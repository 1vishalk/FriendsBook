<?php
	$server="localhost";
	$uname="root";
	$pwd="";
	$con= new mysqli($server,$uname,$pwd);
	if(!$con)
	{
		die("could not connect");
	}
	else
	{
		echo"connect";
	}
	$sql= "create database frndbk_mainprj";
	$con->query($sql);
?>