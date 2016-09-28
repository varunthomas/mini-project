<?php
$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
mysql_select_db('mini');

$query = "SELECT * FROM attendance"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo '<table border="1">'; // start a table tag in the HTML
echo"<tr><th>".'Roll no'."</th><th>".'Name'."</th><th>".'DSA'."</th><th>".'ALC'."</th><th>".'Maths'."</th></tr>";
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['rollno'] . "</td><td>" . $row['name'] . "</td><td>".$row['dsa']."</td><td>".$row['alc']."</td><td>".$row['maths']."</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML


echo'<br><a href="../profile.php">go to main page</a>';
mysql_close();
?>