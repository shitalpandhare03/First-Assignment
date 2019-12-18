<html>
<body>

<form action="" method="post">
 Enter first string <input type="text" name="first"><br>
Enter second string <input type="text" name="second"><br>

<input type="submit" name="submit" value="submit">
</form>
</body>
<html>




<?php

//form submiting

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


