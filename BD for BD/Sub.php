<?php require 'DbHeader.php';?>
<html>
<head>
    <meta charset="utf-8" />
    <title>HTML5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



        <style>

    </style>
</head>
<body>
<form action="DbSend.php" method="post">
<div class="container">
    <div class="row">
    <div class="center col-sm-12" style="margin-top: 9%">
        <h1 style=""> Регистрация(или что то вроде того) </h1>
    </div>
</div>
    <div class="row" style="">
        <div class="col-sm-12 center">
<div class="input-group flex-nowrap">
<div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Введите ваше имя:</span>
</div>
<input type="text" class="form-control" placeholder="Да, просто имя или никнейм" aria-label="Username" aria-describedby="addon-wrapping" name="name">
</div>
        </div>
    </div>
</div>
    <button id="validationTooltip05" class="btn btn-primary center" style="margin-left: 21%; margin-top: 2%" type="submit" name="SoDefaultButton" value="VseOk">Зарегистрироваться</button>
</form>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



<?php require 'DbFooter.php';?>
