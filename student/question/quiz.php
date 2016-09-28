<html>
<head>
<title>Test Paper</title>
</head>
<body>
Select the subject
<br>


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


$answer = $_POST['answer'];
   

$sql = "INSERT INTO quiz ".
       "(answer) ".
       "VALUES('$answer')";
mysql_select_db('quiz');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
header('Location: quiz2.php'); 


mysql_close($conn);



}


else
{
?>

<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">What is your name?</td>

<td><input type="radio" name="answer" value="Varun">Varun<br></td>
<td><input type="radio" name="answer" value="Thomas">Thomas</td>

</tr>


<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="add" type="submit" id="add" value="Next question">
</td>


</tr>
</table>
</form>
<?php
}
?>