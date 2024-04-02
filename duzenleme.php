<?php
error_reporting(0);
$id=$_POST['id'];
$ad=$_POST['ad'];
$vize=$_POST['vize'];
$f=$_POST['fin'];
$ort=$vize*0.4+$f*0.6;

$db = new PDO("mysql:host=localhost;dbname=imyo;charset=utf8","root","");

$sil=$db->query("update bil set ad='$ad',vize='$vize',final='$f',ortalama='$ort' where id='$id'");

header("Location:form.php");
?>