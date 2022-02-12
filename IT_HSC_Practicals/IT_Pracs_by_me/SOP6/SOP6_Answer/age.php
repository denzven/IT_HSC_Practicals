<?php
if(isset($_POST['submit']))
{
	$age = $_POST['age'];
	if($age>=18)
		echo"<br><br>You are eligible to vote";
	else
		echo"<br><br>You are not eligible to vote";
}
?>