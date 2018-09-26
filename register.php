<?php
include "test_dbconnect.php";
if(isset($_POST) & !empty($_POST)){
    if($_POST['password']==$_POST['cpassword']){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        //$depart=$_POST['depart'];
       // $age = $_POST['age'];
        //$sex = $_POST['sex'];
        //$email=$_POST['email'];
        //$phone=$_POST['phone'];
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        //$city = $_POST['city'];
        //$hospital = $_POST['hospital'];
        //$location = $_POST['location'];
        //$image = $_POST['image'];
        //$password=md5($_POST['password']);

        $sql1="INSERT INTO doctors (first_name, last_name,username, password)
         VALUES('$fname', '$lname', '$username', '$password')";
        $result = mysqli_query($cn, $sql1);

        if($result){
            echo "success";
      header('location: login_doctor.php');
        }
        else{
            echo "failed";
            header('location: sign_up.php');

        }

    }
}

?>
