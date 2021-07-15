<?php
	session_start();
	$con= mysqli_connect('localhost','root','');
	if($con)
	{
		echo"connection successful";
	}
	else
	{
		echo"connection unsuccessful";
	}
	mysqli_select_db($con,'fb_mainprj');
	
	$mbno= $_POST['mno'];
	$email= $_POST['email'];
	$passwd= $_POST['paswd'];
	
	$sq="select * from fb_register where mobile_no ='$mbno' && email ='$email' && password='$passwd'";
	$result= mysqli_query($con, $sq);
	$num= mysqli_num_rows($result);

	if($num==1)
	{
		$SESSION['username']= $first_name;
		header('location:fb_homepage.php');
	}
	else
	{
		header('location:fb_homepage.php');
	}
?>