<?php
include('session.php');
if(isset($_POST['att'])){
header("location: update/attendance.php");
}
else if(isset($_POST['ses'])){
header("location: update/sessionals.php");
}
else if(isset($_POST['quest'])){
header("location: update/qp.php");
}
else{
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>

<form method="post" action="<?php $_PHP_SELF ?>">
<input name="att" type="submit" value="Update Attendance"  >
<input name="ses" type="submit" value="Update Sessionals"  >
<input name="quest" type="submit" value="Create questions"  >
</form>
</body>
</html>
<?php 
}
?>