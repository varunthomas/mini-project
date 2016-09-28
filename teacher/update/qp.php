<?php

if(isset($_POST['submit'])){


$link = mysqli_connect("localhost", "root", "", "mini");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$Sub=$_POST['sub'];
$Question=$_POST['qp1'];
 $Option1=$_POST['op1'];
 $Option2=$_POST['op2'];
 $Option3=$_POST['op3'];
 $Option4=$_POST['op4'];
 $Answer=$_POST['ans'];
 if($Sub=='DSA'){
// Attempt update query execution
$sql = "INSERT INTO dsatestpaper ".
       "(question,option1, option2,option3,option4,answer) ".
       "VALUES('$Question','$Option1','$Option2', '$Option3','$Option4','$Answer')";
}
else if($Sub=='ALC'){
// Attempt update query execution
$sql = "INSERT INTO alctestpaper ".
       "(question,option1, option2,option3,option4,answer) ".
       "VALUES('$Question','$Option1','$Option2', '$Option3','$Option4','$Answer')";
}
else if($Sub=='Maths'){
// Attempt update query execution
$sql = "INSERT INTO mathtestpaper ".
       "(question,option1, option2,option3,option4,answer) ".
       "VALUES('$Question','$Option1','$Option2', '$Option3','$Option4','$Answer')";
}
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
	?>
	<a href="qp.php">Next Question</a><br>
	<a href="../profile.php">Back to profile</a>
	<?php
	
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
else{
?>


<html>
<head>
<title>Create a question paper</title>
</head>
<body>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">

<td width="100">Subject</td>
<td><select id="sub" name="sub">
  <option value="ALC">ALC</option>
  <option value="Maths">Maths</option>
  <option value="DSA">DSA</option>
  
</select></td>

<tr>
<td width="100">Question</td>
<td><textarea rows="4" cols="50" name="qp1" id="qp1">

</textarea></td>
</tr>
<tr>
<td width="100">Option 1</td>
<td><input name="op1" type="text" id="op1"></td>
</tr>
<tr>
<td width="100">Option 2</td>
<td><input name="op2" type="text" id="op2"></td>
</tr>
<tr>
<td width="100">Option 3</td>
<td><input name="op3" type="text" id="op3"></td>
</tr>
<tr>
<td width="100">Option 4</td>
<td><input name="op4" type="text" id="op4"></td>
</tr>
<tr>
<td width="100">Answer</td>
<td><input name="ans" type="text" id="ans"></td>
</tr>

<tr>

<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="submit" type="submit" id="submit" value="Enter question">
</td>


</tr>
</table>
</form>
</body>
</html>
<?php
}
?>