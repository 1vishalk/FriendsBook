<?php
$a=mysqli_connect("localhost","root","");
if($a)
{
echo("connected").("<br>");
}
$b=mysqli_select_db($a, "social");
if($b)
{
echo("and"."<br>"."successfully required database is selcted");
}
?>
