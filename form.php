<html>
<body>
<form action='ekle.php' method='GET'>
<fieldset><legend align=center><b>O G R E N C I</b></font></legend>
<table align=center border=0>
<tr><td>Ad</td><td><input type="text" name="ad"></td></tr>
<tr><td>Vize</td><td><input type="text" name="vize"></td></tr>
<tr><td>Final</td><td><input type="text" name="fin"></td></tr>
<tr><td colspan="2" align=center><input type="submit" name="onay"></td></tr>
<table>
</form>
</fieldset>
</table>
<hr>
<table border="0" align=center cellpadding=5 cellspacing=2>
<tr><th>Ad</th><th>Vize</th><th>Final</th><th>Ortalama</th></tr>
<?php
error_reporting(0);
$db = new PDO("mysql:host=localhost;dbname=imyo;charset=utf8","root","");
foreach($db->query('select * from bil',PDO::FETCH_BOTH) as $satir)
{
echo "<tr align=left><td>$satir[ad]</td><td>$satir[vize]</td><td>$satir[final]</td><td align=center>$satir[ortalama]</td>
<td><a href='sil.php?x=$satir[id]'>Delete</a></td>
<td><a href='duzenle.php?id=$satir[id]&ad=$satir[ad]&vize=$satir[vize]&f=$satir[final]'>Update</a></td></tr>"; }
echo "</table>";
echo "<hr>";

echo "<table align=center><tr>";
foreach($db->query('select * from bil order by ortalama asc',PDO::FETCH_BOTH) as $sira)
{
	echo "<td valign=bottom align=center>$sira[ad]<br><img src='bar.jpg' height=$sira[ortalama] width=55></td>";
}
echo "</tr></table>";

?>


</body>
</html>