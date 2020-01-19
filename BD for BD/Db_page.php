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
$query = "SELECT a_name, b_name, b_year, g_name, sb_id  from subscriptions
join books on subscriptions.sb_book = books.b_id and subscriptions.sb_subscriber = '{$_SESSION['id']}'
join genres
join m2m_books_genres on books.b_id = m2m_books_genres.b_id and genres.g_id = m2m_books_genres.g_id
join authors 
join m2m_books_authors on books.b_id = m2m_books_authors.b_id and authors.a_id = m2m_books_authors.a_id
 ";
//users заменить на имя таблицы, к которой хочется обратиться
//Выполнить запрос
$result = mysqli_query($link, $query);

$arResult = mysqli_fetch_array($result);
?>
<div class="container">
    <div class="row">
        <div class="center col-sm-12">
            <h1 style="margin-top: 9%"> Ваши подписки(или что то вроде того) </h1>
        </div>
    </div>
    <div class="row center" style="margin-top: 3%;">

<?php
while  ($arResult = mysqli_fetch_array($result)) {


?>
        <form action="delete.php" method="post" >
<div class="col-sm-12 ">


<div class="card" style=" margin: 10px;">

    <div class="card-body" style="">

        <h5 class="card-title"> <?php echo "$arResult[1]"?></h5>
<h6 class="card-subtitle mb-2 text-muted">Год: <?php echo "$arResult[2]"?></h6>

<h6 class="card-subtitle mb-2 text-muted">Автор: <?php echo "$arResult[0]"?></h6>
<h6 class="card-subtitle mb-2 text-muted">Жанр: <?php echo "$arResult[3]"?></h6>


<button id="validationTooltip05" class="btn btn-danger center" style="margin-right: 10%;" type="submit" name="SoDefaultButton" value="<?php echo " $arResult[4]"?>" onclick="openokno()">Отменить подписку</button>

</div>
</div>
</div>
        </form>
    <?php } ?>
    </div>
</div>

