<?php require 'DbHeader.php';?>
<?php
$link = mysqli_connect(
    'localhost', //Сервер
    'root', //Имя пользователя
    'root', //Пароль
    'db1' //Имя БД
);

if ( !$link ) {
    die("Ничего не получилось, никаких БД сегодня(");
    mysqli_close($link);
}


//Составить запрос
$query = "SELECT distinct  a_name,  b_name, b_year, g_name, books.b_id FROM authors join m2m_books_authors on authors.a_id = m2m_books_authors.a_id join books on books.b_id = m2m_books_authors.b_id join m2m_books_genres on books.b_id = m2m_books_genres.b_id join genres on genres.g_id = m2m_books_genres.g_id ";
     //users заменить на имя таблицы, к которой хочется обратиться
//Выполнить запрос
$result = mysqli_query($link, $query);


?>








<body>


<div class="container">
    <div class="row">
        <div class="center col-sm-12">
        <h1 style="margin-top: 9%"> Электронная библиотека(или что то вроде того) </h1>
        </div>
    </div>
<div class="row center" style="margin-top: 3%;">

    <?php
    while  ($arResult = mysqli_fetch_array($result)) {


    ?>
        <form action="<?php if (isset($_SESSION["Name"])){ echo "Otpravka.php";} else {echo "Enter.php";} ?>" method="post" >
<div class="col-sm-12 ">


<div class="card" style=" margin: 10px;">

    <div class="card-body" style="">

        <h5 class="card-title"> <?php echo "$arResult[1]"?></h5>
        <h6 class="card-subtitle mb-2 text-muted">Год: <?php echo "$arResult[2]"?></h6>

        <h6 class="card-subtitle mb-2 text-muted">Автор: <?php echo "$arResult[0]"?></h6>
        <h6 class="card-subtitle mb-2 text-muted">Жанр: <?php echo "$arResult[3]"?></h6>


        <button id="validationTooltip05" class="btn btn-primary center" style="margin-right: 10%;" type="submit" name="SoDefaultButton" value="<?php echo " $arResult[4]"?>" onclick="openokno()">Оформить подписку</button>

    </div>
</div>

</div>
        </form>
        <?php } ?>

</div>
    <div style="margin-bottom: 9%" class="<?php if (isset($_SESSION["Name"])){ echo "d-none";}?>">
    <a style="" class="btn btn-primary" href="Sub.php">Регистрация</a>
    <a style="" class="btn btn-primary" href="Enter.php">Войти</a>

    </div>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php require 'DbFooter.php';?>
</body>

</script>
</html>
