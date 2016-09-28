<?php

if(isset($_POST['add']))
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

$conn = mysql_connect("$dbhost", "$dbuser", "$dbpass");
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}


?>