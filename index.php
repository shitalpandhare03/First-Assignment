<html>
<body>

<form action="" method="post">
 Enter Email <input type="text" name="email"><br>
Enter password <input type="text" name="password"  >Must contain at least 1 digit,3 uppercase ,3 lowercase letter, 1 special char,and at least 8 chars required<br>

<input type="submit" name="submit" value="submit">
</form>
</body>
<html>









<?php

//checking form submition

if(isset($_POST["submit"]))
{

	//fetching data from form

	$email=$_POST["email"];
	$password=$_POST["password"];


//validation of email 

	if(preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/",$email))
	{
		echo "valid email<br>";
	}
	else
	{
		echo "email is not valid<br>";
	}

	




//validation of password
	
	if(strlen($password)<8)
	{
		echo "password is too short<br>";
	}
	else
	{
		if(strlen($lower=preg_replace("/[^a-z]/","",$password))<3)
		{
			echo "password has at lest 3 lower case character<br>";
		}
		if(strlen($upper=preg_replace("/[^A-Z]/","",$password))<2)
		{
			echo "password has at lest 2 upper case character<br>";
	 	}
		if(strlen($upper=preg_replace("/[^0-9]/","",$password))<2)
		{
			echo "password has at lest 2 digits<br>";
	 	}
		if(strlen($upper=preg_replace("/[@,&,#]/","",$password))<1)
		{
			echo "password has at lest 1 special character <br>";
	 	}
	}


 
//setting cookie and showing that cookie

if(setcookie("email",$email, time()+30000))
{
	echo "set a cookie<br>";
	echo "showing cookies:\t". $_COOKIE["email"];
}
else
{
	echo "cookie is not set";
}


}

?>





