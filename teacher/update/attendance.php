<?php
if(isset($_POST['submit'])){

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mini");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $Att=$_POST['att'];
 $Sub=$_POST['sub'];
 $Roll_no=$_POST['roll'];
 if($Sub=='DSA'){
// Attempt update query execution
$sql = "UPDATE attendance SET dsa=$Att WHERE rollno=$Roll_no";
}
else if($Sub=='ALC'){
// Attempt update query execution
$sql = "UPDATE attendance SET alc=$Att WHERE rollno=$Roll_no";
}
else if($Sub=='Maths'){
// Attempt update query execution
$sql = "UPDATE attendance SET maths=$Att WHERE rollno=$Roll_no";
}
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
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
<td width="100">Enter attendance</td>
<td><input name="att" type="text" id="att"></td>
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