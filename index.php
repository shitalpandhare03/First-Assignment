<html>
<body>

<form action="" method="post">
<<<<<<< HEAD

 Enter first string <input type="text" name="first"><br>
Enter second string <input type="text" name="second"><br>
=======
 Enter string <input type="text" name="string"><br>
>>>>>>> af7b409df698929bec2b8dd48b5e5c93bb767b7a

<input type="submit" name="submit" value="submit">
</form>
</body>
<html>



<<<<<<< HEAD





<?php

//checking form submition

if(isset($_POST["submit"]))
{

	//fetching data from form


	$first=$_POST["first"];
	$second=$_POST["second"];


//checking length of string and gives output

	if(strlen($first)>strlen($second))
	{
		echo "first String is Big than second";
	}
	else if(strlen($first)<strlen($second))
	{
		echo "second String is Big than first";
	}
	else
	{
		echo "strings are equals";
	}
}


?>


=======
<?php
if(isset($_POST["submit"]))
{

	$str=$_POST["string"];

	$result=substr($str,-3);

	echo "last three character of string are:  $result"; 
}
?>
>>>>>>> af7b409df698929bec2b8dd48b5e5c93bb767b7a
