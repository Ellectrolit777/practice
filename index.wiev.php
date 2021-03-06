
<!doctype html>
<html lang="en">
<head>
    <!-- Визуальная страница index -->
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
        }
        image{
            border:1px black solid;
            width: 80%;
        }
        .er{
            width:30%;
            margin: 0 auto;
        }

        #tt{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        </style>


</head>
<body>

<div id="tt">

<?php foreach ($res as $key): ?>
        <div class="card" style="width: 18rem;">
            <img src="image/<?= $key->name_img; ?>" class="card-img-top">
            <div class="card-body">
            </div>
        </div>
    <?php endforeach; ?>
</div> 

<form>
    <button type="button" class="btn btn-primary" onclick="window.location='index.two.php'">Вход</button>
</form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>