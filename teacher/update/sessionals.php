<?php
if(isset($_POST['submit'])){

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mini");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $Mark1=$_POST['mark1'];
 $Mark2=$_POST['mark2'];
 $Sub=$_POST['sub'];
 $Roll_no=$_POST['roll'];
 if($Sub=='DSA'){
// Attempt update query execution
$sql1 = "UPDATE sess SET dsamark1=$Mark1 WHERE id=$Roll_no";
$sql2 = "UPDATE sess SET dsamark2=$Mark2 WHERE id=$Roll_no";
}
else if($Sub=='ALC'){
// Attempt update query execution
$sql1 = "UPDATE sess SET alcmark1=$Mark1 WHERE id=$Roll_no";
$sql2 = "UPDATE sess SET alcmark2=$Mark2 WHERE id=$Roll_no";
}
else if($Sub=='Maths'){
// Attempt update query execution
$sql1 = "UPDATE sess SET mathmark1=$Mark1 WHERE id=$Roll_no";
$sql2 = "UPDATE sess SET mathmark2=$Mark2 WHERE id=$Roll_no";
}
if(mysqli_query($link, $sql1) || mysqli_query($link, $sql2)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($link);
	echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
}
else{
?>
<html>
<head>
<title>Sessionals</title>
</head>
<body>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">

<tr>
<td width="100">Subject</td>
<td><select id="sub" name="sub">
  <option value="ALC">ALC</option>
  <option value="Maths">Maths</option>
  <option value="DSA">DSA</option>
  
</select></td>
</tr>
<tr>
<td width="100">Roll no</td>
<td><input name="roll" type="text" id="roll"></td>
</tr>
<tr>
<td width="100">Series Test 1 Mark</td>
<td><input name="mark1" type="text" id="mark1"></td>
</tr>

<tr>
<td width="100">Series Test 2 Mark</td>
<td><input name="mark2" type="text" id="mark2"></td>
</tr>

<tr>

<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="submit" type="submit" id="submit" value="Update">
</td>


</tr>
</table>
</form>
</body>
</html>
<?php
}
?>