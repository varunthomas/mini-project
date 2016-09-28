<?php
include('session.php');
if(isset($_POST['submit'])){
header("location: question/attendance.php");
}

else if(isset($_POST['rev'])){
header("location: question/review.php");
}

else if(isset($_POST['ses'])){
header("location: question/sessionals.php");
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
<div class="button">
			<a href="question/start.php">Start Test</a>
		</div>
<form method="post" action="<?php $_PHP_SELF ?>">
<input name="submit" type="submit" value="Check Attendance"  >
<input name="rev" type="submit" value="Review"  >
<input name="ses" type="submit" value="Sessionals"  >


</form>
</body>
</html>
<?php 
}
?>