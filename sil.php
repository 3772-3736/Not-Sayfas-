<?php
$id=$_GET['x'];

$db = new PDO("mysql:host=localhost;dbname=imyo;charset=utf8","root","");

$sil=$db->query("delete from bil where id=$id");

header("Location:form.php");
?>
