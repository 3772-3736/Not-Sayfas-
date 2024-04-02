<?php
error_reporting(0);
$id=$_GET['id'];
$ad=$_GET['ad'];
$vize=$_GET['vize'];
$f=$_GET['f'];

?>

<table>
<form action='duzenleme.php' method='POST'>
<tr><td>id</td><td><input type="text" name="id" value="<?php echo $id ?>"></td></tr>
<tr><td>ad</td><td><input type="text" name="ad" value="<?php echo $ad ?>"></td></tr>
<tr><td>vize</td><td><input type="text" name="vize" value="<?php echo $vize ?>"></td></tr>
<tr><td>final</td><td><input type="text" name="fin" value="<?php echo $f ?>"></td></tr>
<tr><td colspan="2" align=center><input type="submit" name="onay"></td></tr>
</form></tr></table>