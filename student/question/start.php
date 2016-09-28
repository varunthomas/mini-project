
<?php

if(isset($_POST['start']))
{

$subject = $_POST['subject'];
   

if($subject=='DSA')
header('Location: dsaquiz.php'); 

else if($subject=='ALC')
header('Location: alcquiz.php'); 

else if($subject=='Maths')
header('Location: mathquiz.php'); 

}


else
{
?>

<html>
<head>
<title>Test Paper</title>
</head>
<body>
Select the subject
<br>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td><input type="radio" name="subject" value="DSA">DSA<br></td>
<td><input type="radio" name="subject" value="ALC">ALC<br></td>
<td><input type="radio" name="subject" value="Maths">Maths<br></td>
<td>
<input name="start" type="submit" id="start" value="Start test">
</td>
</tr>
<?php
}
?>