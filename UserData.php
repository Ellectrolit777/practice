<?php
session_start();
class UserData{

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findOneUser($data){
        $stmt=$this->pdo->prepare("SELECT * FROM user WHERE login=:log AND password=:pass");

        $stmt->execute([
            "pass"=>$data["password"], 
            "log"=>$data["login"]
            ]);
          
        return $stmt->fetch();
    }

    public function getUserById($id){
        $stmt=$this->pdo->prepare("SELECT * FROM user WHERE id_user=:id");

        $stmt->execute([
            "id"=>$id
            ]);
        return $stmt->fetch();
    }

    
    public function loginUser($data){
        $_SESSION["auth"] = false;
        // var_dump($data);
        $res = $this->findOneUser($data);
            // var_dump($res);
        if($res){
            $_SESSION["auth"] = true;
            $_SESSION["error"] = "";
            $_SESSION["id"]=$res->id_user;
        }
        else{
            $_SESSION["error"] = "<div class='alert alert-warning er' role='alert'>
                Если у вас нет аккаунта, <a href='registr.php'>Зарегистрируйся</a>.
            </div>";
            }
    }

    public function registrUser($data){ 
        $res = $this->findOneUser($data);

        if(($data["loginReg"] == null && $data["passwordReg"] == null) || $res){
            $_SESSION["errorTwo"] = "<div class='alert alert-danger er' role='alert'> Такой логин уже существует </div>";
        }       
        else {
            $_SESSION["errorTwo"] = "";
            $stmt=$this->pdo->prepare("INSERT INTO user(login, password, nickname, name_img) VALUES (:log,:pass,:nick,:img)");
            $stmt->execute(["log" => $data["loginReg"], "pass" => $data["passwordReg"], "nick" => $data["nicknameReg"], "img" => $data["imageR"]]);

        }
    }

    public function addImageUser($data,$session){ 
        // $res = $this->findOneUser($data);
        
        $stmt=$this->pdo->prepare("INSERT INTO images(name_img, id_user) VALUES (:name,:id)");
        $stmt->execute(["name"=>$data["imageR"], "id"=>$session["id"]]);

        
    }

    public function getImageUser($id){
        $stmt=$this->pdo->prepare("SELECT * FROM images WHERE id_user=:id_us");

        $stmt->execute([
            "id_us"=>$id
            ]);;

        return $stmt->fetchAll();
    }

    public function findFullImage(){
        $stmt=$this->pdo->prepare("SELECT * FROM user");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
   

