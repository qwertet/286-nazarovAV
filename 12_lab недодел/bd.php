<?php
if (isset($_POST['name']) && isset($_POST['descr']))
{

    // Переменные с формы
    $name = $_POST['name'];
    $descr = $_POST['descr'];
    $direction = $_POST['direction'];
    $date_begin = $_POST['date_begin'];
    $date_end = $_POST['date_end'];
    $price = $_POST['price'];
    $photo_url = $_POST['photo_url'];

    // Параметры для подключения
    $db_host = "localhost";
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_base = 'tour'; // Имя БД
    $db_table = "tours"; // Имя Таблицы БД
    // Подключение к базе данных
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
    if ($mysqli->connect_error)
    {
        die('Ошибка : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    $result = $mysqli->query("INSERT INTO " . $db_table . " (name,descr,direction,date_begin,date_end,price,photo_url) VALUES ('" . $name . "','" . $descr . "','" . $direction . "', '" . $date_begin . "', '" . $date_end . "', '" . $price . "','" . $photo_url . "')");

    if ($result == true)
    {
        echo "Информация занесена в базу данных";
    }
    else
    {
        echo "Информация не занесена в базу данных";
    }
}


?>