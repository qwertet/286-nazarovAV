<?php
//// Конфиг БД НЕ ТРОГАТЬ!!!!!!
	$db_host = "localhost"; 
	$db_user = "root"; // Логин БД
	$db_password = ""; // Пароль БД
	$db_base = 'world'; // Имя БД
	$db_table = "tours"; // Имя Таблицы БД
	
	$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
/////// 	
$result = mysqli_query($mysqli,"SELECT * FROM tours");
 
while($value = $result->fetch_assoc()) {
	echo "<a href='change.php?id=".$value['ID']."'>". $value['Name'] ." (изменить)</a><br>";
}
// Логика если обнволяется одна запись
if ($_GET){
	$result = mysqli_query($mysqli,"SELECT * FROM tours WHERE ID=".$_GET['id']." LIMIT 1");
	$data= mysqli_fetch_assoc($result);
}
?>
<html>
<head>
 <title>change</title>
</head>
<body>
<? if ($_GET) : ?>
<form method="POST" action="change.php">
  <input name="ID" type="number"  value = "<?= $data['ID'] ?>" "placeholder="Номер ID" required />
  <br>
  <input type="varchar" name="name" value = "<?= $data['Name'] ?>" placeholder="Название тура" required />
  <br>
  <input type="text" name="desc" value = "<?= $data['desc'] ?>" placeholder="Описание тура" required />
  <br>
  <input name="direction" type="text" value = "<?= $data['direction'] ?>" placeholder="Направление тура" required />
  <br>
  <input name="date_begin" type="date" value = "<?= $data['date_begin'] ?>" placeholder="Дата начала тура" required />
  <br>
  <input name="date_end" type="date" value = "<?= $data['date_end'] ?>" placeholder="Дата окончания тура" required />
  <br>
  <input name="price" type="number" value = "<?= $data['price'] ?>" placeholder="Цена тура(p.)" required />
  <br>
  <input name="photo_url" type="file" value = "<?= $data['photo_url'] ?>" placeholder="Путь к картинке тура" required />
  <br>
  <br>
  <input type="submit" value="Изменить"/>
  <? endif; ?>
</body>
</html>
<?php
if  ($_POST)
{
	$ID = $_POST['ID'];
	$name = $_POST['name'];
	$desc = $_POST['desc'];
	$direction = $_POST['direction'];
	$date_begin = $_POST['date_begin'];
	$date_end = $_POST['date_end'];
	$price = $_POST['price'];
	$photo_url = $_POST['photo_url'];
	

	
	if($mysqli->connect_errno)
	{
		printf("Не удалось подключиться с базам данных, попробуйте поже.", $mysqli->connect_error);
	}
	$result = $mysqli->query("UPDATE ".$db_table." SET   Name = '".$name."', `desc`='".$desc."',direction= '".$direction."',date_begin= '".$date_begin."',date_end='".$date_end."',price ='".$price."',photo_url ='".$photo_url."' WHERE ID=".$ID);
	 
	if($result == true)
	{
		echo "Изменено";
	}
	else
	{
		echo "Что-то пошло не так";
	}
}
?>