<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'kiako';
$connect = mysqli_connect($server, $user, $pass, $db);
$sql = ' update mahsolat set name ="' . $_POST['name'] . '"';
$res = mysqli_query($connect, $sql);
header('Location:edit-admin.php');
?>