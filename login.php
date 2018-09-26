<?php
include "test_dbconnect.php";

session_start();


if(isset($_POST) & !empty($_POST)){
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	echo $username;

	$q1="SELECT doctors_id,first_name, username, password FROM doctors";
	$result=mysqli_query($cn, $q1);
	while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){
		if($row['username']==$username && $row['password']==$password){
		$_SESSION['fname']=$row['first_name'];
		$_SESSION['id']=$row["doctors_id"];
		$_SESSION["logged"] = true;
		$_SESSION['type'] = 'doctor';
		// echo $_SESSION['username'];
		// echo $_SESSION['id'];
		header("location:doc_profile.php"); //redirecting to home
	}
	else{
		 echo '<br><br><br><div class="alert alert-danger alert-dismissable fade show">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Login Unsucessful</strong> 
    </div>';
	}

	}


}
?>

