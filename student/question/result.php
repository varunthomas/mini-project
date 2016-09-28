<?php


$conn = mysql_connect("localhost", "root", "");
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}


   



mysql_select_db('quiz');
$sql = "SELECT `answer` FROM `quiz`";

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

// run query


// set array
$array = array();

// look through query
while($row = mysql_fetch_assoc($retval)){

  // add each row returned into an array
  $array[] = $row;

  // OR just echo the data:
  echo $row['answer']."<br>"; // etc

}
$correct=array('Thomas','Six','5');

for($i=0;$i<2;$i++)
{
if($correct[$i]==$array[$i]['answer'])
{
$x+=5;
}
}

mysql_close($conn);
?>