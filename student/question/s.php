<?php
$arr=array();
?>
<form method="POST" action="<?php $_PHP_SELF ?>" method="POST">
username
<input name="Fname" type="text" id="Fname">
pass
<input name="lname" type="text" id="lname">
<input name="add" type="submit" id="add" value="Submit">
<?php
$arr[]=$_POST['Fname'];
$arr[]=$_POST['lname'];
foreach($arr as $val)

echo $val;
?>

