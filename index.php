<html>
<body>

<form action="" method="post">
 Enter string <input type="text" name="string"><br>

<input type="submit" name="submit" value="submit">
</form>
</body>
<html>



<?php
if(isset($_POST["submit"]))
{

	$str=$_POST["string"];

	$result=substr($str,-3);

	echo "last three character of string are:  $result"; 
}
?>
