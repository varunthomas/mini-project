
<?php
$i=0;
while($i<=5)
{
$conn = mysql_connect("localhost", "root", "");


       if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
        
	mysql_select_db('mini');
          $sql1 = "SELECT `answer` FROM `dsatestpaper`";
          $retval1 = mysql_query( $sql1, $conn );
if(! $retval1 )
{
  die('Could not enter data: ' . mysql_error());
}

$array = array();

while($row1 = mysql_fetch_assoc($retval1)){
  $array[] = $row1;

 // echo $row['answer']."<br>"; // etc

}


          $sql2 = "SELECT `question` FROM `dsatestpaper`";
          $retval2 = mysql_query( $sql2, $conn );
if(! $retval2 )
{
  die('Could not enter data: ' . mysql_error());
}
$question = array();

while($row2 = mysql_fetch_assoc($retval2)){
  $question[] = $row2;

 // echo $row['answer']."<br>"; // etc

}


          $sql3 = "SELECT `option1` FROM `dsatestpaper`";
          $retval3 = mysql_query( $sql3, $conn );
if(! $retval3 )
{
  die('Could not enter data: ' . mysql_error());
}
$option1 = array();

while($row3 = mysql_fetch_assoc($retval3)){
  $option1[] = $row3;

 // echo $row['answer']."<br>"; // etc

}

         $sql4 = "SELECT `option2` FROM `dsatestpaper`";
          $retval4 = mysql_query( $sql4, $conn );
if(! $retval4 )
{
  die('Could not enter data: ' . mysql_error());
}
$option2 = array();

while($row4 = mysql_fetch_assoc($retval4)){
  $option2[] = $row4;

 // echo $row['answer']."<br>"; // etc

}


         $sql5 = "SELECT `option3` FROM `dsatestpaper`";
          $retval5 = mysql_query( $sql5, $conn );
if(! $retval5 )
{
  die('Could not enter data: ' . mysql_error());
}
$option3 = array();

while($row5 = mysql_fetch_assoc($retval5)){
  $option3[] = $row5;

 // echo $row['answer']."<br>"; // etc

}

         $sql6 = "SELECT `option4` FROM `dsatestpaper`";
          $retval6 = mysql_query( $sql6, $conn );
if(! $retval6 )
{
  die('Could not enter data: ' . mysql_error());
}
$option4 = array();

while($row6 = mysql_fetch_assoc($retval6)){
  $option4[] = $row6;

 // echo $row['answer']."<br>"; // etc

}



	mysql_select_db('mini');
          $sql1 = "SELECT `answer` FROM `dsatestpaper`";
          $retval1 = mysql_query( $sql1, $conn );
if(! $retval1 )
{
  die('Could not enter data: ' . mysql_error());
}

$array = array();

while($row1 = mysql_fetch_assoc($retval1)){
  $array[] = $row1;

 // echo $row['answer']."<br>"; // etc

}


          $sql2 = "SELECT `question` FROM `dsatestpaper`";
          $retval2 = mysql_query( $sql2, $conn );
if(! $retval2 )
{
  die('Could not enter data: ' . mysql_error());
}
$question = array();

while($row2 = mysql_fetch_assoc($retval2)){
  $question[] = $row2;

 // echo $row['answer']."<br>"; // etc

}


          $sql3 = "SELECT `option1` FROM `dsatestpaper`";
          $retval3 = mysql_query( $sql3, $conn );
if(! $retval3 )
{
  die('Could not enter data: ' . mysql_error());
}
$option1 = array();

while($row3 = mysql_fetch_assoc($retval3)){
  $option1[] = $row3;

 // echo $row['answer']."<br>"; // etc

}

         $sql4 = "SELECT `option2` FROM `dsatestpaper`";
          $retval4 = mysql_query( $sql4, $conn );
if(! $retval4 )
{
  die('Could not enter data: ' . mysql_error());
}
$option2 = array();

while($row4 = mysql_fetch_assoc($retval4)){
  $option2[] = $row4;

 // echo $row['answer']."<br>"; // etc

}


         $sql5 = "SELECT `option3` FROM `dsatestpaper`";
          $retval5 = mysql_query( $sql5, $conn );
if(! $retval5 )
{
  die('Could not enter data: ' . mysql_error());
}
$option3 = array();

while($row5 = mysql_fetch_assoc($retval5)){
  $option3[] = $row5;

 // echo $row['answer']."<br>"; // etc

}

         $sql6 = "SELECT `option4` FROM `dsatestpaper`";
          $retval6 = mysql_query( $sql6, $conn );
if(! $retval6 )
{
  die('Could not enter data: ' . mysql_error());
}
$option4 = array();

while($row6 = mysql_fetch_assoc($retval6)){
  $option4[] = $row6;

 // echo $row['answer']."<br>"; // etc

}

$answer = $_POST['answer'];
  

$total=0;

if($answer==$array[0]['answer'])
{
$total=$total+5;
}



mysql_close($conn);







?>

<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100"><?php echo $question[$i]['question']; ?></td><br>

<td><input type="radio" name="answer" value="<?php echo $option1[$i]['option1'] ?>"><?php echo "    ". $option1[$i]['option1']; ?><br></td>
<td><input type="radio" name="answer" value="<?php echo $option2[$i]['option2'] ?>"><?php echo "    ". $option2[$i]['option2']; ?><br></td>
<td><input type="radio" name="answer" value="<?php echo $option3[$i]['option3'] ?>"><?php echo "    ". $option3[$i]['option3']; ?><br></td>
<td><input type="radio" name="answer" value="<?php echo $option4[$i]['option4'] ?>"><?php echo "    ". $option4[$i]['option4']; ?><br></td>

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

	mysql_select_db('mini');
          $sql1 = "SELECT `answer` FROM `dsatestpaper`";
          $retval1 = mysql_query( $sql1, $conn );
if(! $retval1 )
{
  die('Could not enter data: ' . mysql_error());
}

$array = array();

while($row1 = mysql_fetch_assoc($retval1)){
  $array[] = $row1;

 // echo $row['answer']."<br>"; // etc

}


          $sql2 = "SELECT `question` FROM `dsatestpaper`";
          $retval2 = mysql_query( $sql2, $conn );
if(! $retval2 )
{
  die('Could not enter data: ' . mysql_error());
}
$question = array();

while($row2 = mysql_fetch_assoc($retval2)){
  $question[] = $row2;

 // echo $row['answer']."<br>"; // etc

}


          $sql3 = "SELECT `option1` FROM `dsatestpaper`";
          $retval3 = mysql_query( $sql3, $conn );
if(! $retval3 )
{
  die('Could not enter data: ' . mysql_error());
}
$option1 = array();

while($row3 = mysql_fetch_assoc($retval3)){
  $option1[] = $row3;

 // echo $row['answer']."<br>"; // etc

}

         $sql4 = "SELECT `option2` FROM `dsatestpaper`";
          $retval4 = mysql_query( $sql4, $conn );
if(! $retval4 )
{
  die('Could not enter data: ' . mysql_error());
}
$option2 = array();

while($row4 = mysql_fetch_assoc($retval4)){
  $option2[] = $row4;

 // echo $row['answer']."<br>"; // etc

}


         $sql5 = "SELECT `option3` FROM `dsatestpaper`";
          $retval5 = mysql_query( $sql5, $conn );
if(! $retval5 )
{
  die('Could not enter data: ' . mysql_error());
}
$option3 = array();

while($row5 = mysql_fetch_assoc($retval5)){
  $option3[] = $row5;

 // echo $row['answer']."<br>"; // etc

}

         $sql6 = "SELECT `option4` FROM `dsatestpaper`";
          $retval6 = mysql_query( $sql6, $conn );
if(! $retval6 )
{
  die('Could not enter data: ' . mysql_error());
}
$option4 = array();

while($row6 = mysql_fetch_assoc($retval6)){
  $option4[] = $row6;

 // echo $row['answer']."<br>"; // etc

}

$answer = $_POST['answer'];
  

$total=0;

if($answer==$array[0]['answer'])
{
$total=$total+5;
}



mysql_close($conn);




$i++;
}
?>