<?php

$res = $user->getUserById($_SESSION["id"]);
$resTwo = $user->getImageUser($_SESSION["id"]);
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>

        form{
            width:30%;
            margin: 0 auto;
        }
        .card{
            margin: 30px;
            border:1px black solid;
             height: auto;
             width:200px;
            

            
        }
        image{
            border:1px black solid;
            width: 80%;
        }

        #f{
            display: flex;
            flex-direction: row;
            justify-content: center;
            width:15%;
            border: 3px black solid;
            border-radius: 15px;
        }

        #df{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: flex-start;
            width:75%;
            border: 3px black solid;
            border-radius: 15px;
            margin-left: 10px;
        }

        #dd{
            display: flex;
            flex-direction: row;
            justify-content: center;
            
        }

    </style>


</head>
<body>
<div id="dd">

<div id="f">

        

        <div class="card" style="width: 18rem;">
            <img src="image/<?= $res->name_img; ?>" class="card-img-top">
            <div class="card-body">
                Логин: <h5 class="card-title"><?= $res->login; ?></h5>
                Никнейм: <h5 class="card-title"><?= $res->nickname; ?></h5>
                Пароль: <h5 class="card-title"><?= $res->password; ?></h5>


            </div>
        </div>
</div> 

<div id="df">

        
 <?php foreach ($resTwo as $key): ?>
        <div>
            <img src="image/<?= $key->name_img ?>" class="card">
    </div>
        
    <?php endforeach; ?>
</div> 

    </div>

<form method="post" enctype="multipart/form-data">

<div class="form-group">
        <label for="exampleInputEmail3">Добавьте файл</label>
        <input type="file" class="form-control" id="exampleInputEmail3" name="imageReg">
    </div>

    <button type="submit" class="btn btn-primary" name="btnAddImg">Добавить</button>
</form>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>