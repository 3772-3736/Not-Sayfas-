<?php
$ad=$_GET["ad"];
$vize=$_GET["vize"];
$fin=$_GET["fin"];
$ort=$vize*0.4+$fin*0.6;

$db = new PDO("mysql:host=localhost;dbname=imyo;charset=utf8","root","");

$ekle=$db->query("INSERT INTO bil (ad,vize,final,ortalama) values ('$ad','$vize','$fin','$ort')");

header("Location:form.php");
?>
