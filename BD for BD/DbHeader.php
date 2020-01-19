<?php session_start();?>
<html>
<head>
    <title>Why born</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>



     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="DbStyle.css">


</head>
<body>



<nav class="navbar navbar-expand-lg navbar-dark bg-nav">
    <a class="navbar-brand" href="123.php" >Croco-bizness</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
<!--            <li class="nav-item ">-->
<!--                <a class="nav-link" onclick="Alert()" href="#">Главная <span class="sr-only">(current)</span></a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" onclick="Alert()" href="#">Новости</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link " onclick="Alert()" href="#">Функции</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->


    </div>
    </li>

    </ul>



    <?php if(isset($_SESSION) and !empty($_SESSION)){echo "<a href='Db_page.php' class='log_button'>Привет, {$_SESSION['Name']}!</a>"; echo '<a href="http://178.35.152.24/123.php?LogOut=1"class=\'log_button\' style=\'color: white;\' class="btn " >Выход</a>';}  ?>



    <span class="navbar-text">
                        Croco-bizness in Russia
                      </span>
    </div>
</nav>
