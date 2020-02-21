

<!DOCTYPE html>
<html>
<head>
	<title>Edit Tour</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>
<body>

<div class="main">
	<h1 class="tittle">Wanna edit someone's tour?</h1>
	<p class="undertittle">These are the tours you can edit:</p>



	
	<form class="foorm" action="edit.php" method="POST">

			<?php

//// Конфиг БД НЕ ТРОГАТЬ!!!!!!
	$db_host = "localhost"; 
	$db_user = "root"; // Логин БД
	$db_password = ""; // Пароль БД
	$db_base = 'tour'; // Имя БД
	$db_table = "tours"; // Имя Таблицы БД
	
	$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
/////// 	
$result = mysqli_query($mysqli,"SELECT * FROM tours");
 
while($value = $result->fetch_assoc()) {
	echo "<a href='edit.php?id=".$value['id']."'>". $value['name'] ." (edit)</a><br>";
}
// Логика если обнволяется одна запись
if ($_GET){
	$result = mysqli_query($mysqli,"SELECT * FROM tours WHERE id=".$_GET['id']." LIMIT 1");
	$data= mysqli_fetch_assoc($result);
}
?>


<? if ($_GET) : ?>
	<br>
	<br>
	
		<input class="inputStyle" name="id" type="number"  value = "<?= $data['id'] ?>" placeholder="Input ID" required />
  <br>
  <br>
  <br>
  <input class="inputStyle" type="varchar" name="name" value = "<?= $data['name'] ?>" placeholder="Tour Name" required />
  <br>
  <br>
  <br>
  <input class="inputStyle" type="text" name="descr" value = "<?= $data['descr'] ?>" placeholder="Description" required />
  <br>
  <br>
  <br>
  <input class="inputStyle" name="direction" type="text" value = "<?= $data['direction'] ?>" placeholder="Direction" required />
  <br>
  <br>
  <br>
  <input class="inputStyle" name="date_begin" type="date" value = "<?= $data['date_begin'] ?>" placeholder="Begin Date" required />
  <br>
  <br>
  <br>
  <input class="inputStyle" name="date_end" type="date" value = "<?= $data['date_end'] ?>" placeholder="End date" required />
  <br>
  <br>
  <br>
  <input class="inputStyle" name="price" type="number" value = "<?= $data['price'] ?>" placeholder="Price" required />
  <br>
  <br>
  <br>
  <input class="inputStyle2" name="photo_url" type="file" value = "<?= $data['photo_url'] ?>" placeholder="Photo" required />
  <br>
  <br>
  <br>
  <input class="button" type="submit" value="Coniform"/>
	</form>
	<? endif; ?>
	
</div>
</body>
</html>

<?php
if  ($_POST)
{
	$ID = $_POST['id'];
	$name = $_POST['name'];
	$desc = $_POST['descr'];
	$direction = $_POST['direction'];
	$date_begin = $_POST['date_begin'];
	$date_end = $_POST['date_end'];
	$price = $_POST['price'];
	$photo_url = $_POST['photo_url'];
	

	
	if($mysqli->connect_errno)
	{
		printf("Не удалось подключиться с базам данных, попробуйте поже.", $mysqli->connect_error);
	}
	$result = $mysqli->query("UPDATE ".$db_table." SET   Name = '".$name."', `descr`='".$descr."',direction= '".$direction."',date_begin= '".$date_begin."',date_end='".$date_end."',price ='".$price."',photo_url ='".$photo_url."' WHERE ID=".$ID);
	 
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