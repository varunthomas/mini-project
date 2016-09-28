<?php
$i=0;
$total=0;
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

$conn = mysql_connect("$dbhost", "$dbuser", "$dbpass");
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

  mysql_select_db('mini');
  
  $re = mysql_query("SELECT * FROM alctestpaper", $conn);
$num_rows = mysql_num_rows($re);
  
  
         $sql1 = "SELECT `answer` FROM `alctestpaper`";
          $retval1 = mysql_query( $sql1, $conn );
if(! $retval1 )
{
  die('Could not enter data: ' . mysql_error());
}

$array1 = array();

while($row1 = mysql_fetch_assoc($retval1)){
  $array1[] = $row1;

 // echo $row['answer']."<br>"; // etc

}




  
         $sql2 = "SELECT `anskey` FROM `alcanswers`";
          $retval2 = mysql_query( $sql2, $conn );
if(! $retval2 )
{
  die('Could not enter data: ' . mysql_error());
}

$array2 = array();

while($row2 = mysql_fetch_assoc($retval2)){
  $array2[] = $row2;



}

for($i=0;$i<$num_rows;$i++){
if($array1[$i]['answer']==$array2[$i]['anskey']){
$total+=5;
}

}
echo $total;


$sql = "TRUNCATE TABLE `alcanswers`";
          $retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

mysql_close($conn);

?>
<a href="../profile.php">Back to profile</a>