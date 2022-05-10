<?php
echo "<h1>Registration Form</h1>";

$con = mysqli_connect('localhost','root' ,'','reg1');
if($con){
    echo"you are connected";
}else{
    echo "not connect";
}
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$college=$_POST['college'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$q ="select * from local where fname ='$fname' && password = '$password'";
$ch = mysqli_query($con,$q);
$num = mysqli_num_rows($ch);

if($num == 1){
    echo"use different username";
}else{
$sql="Insert into local(fname,mname,lname,email,password,address,college,mobile,gender,city,state,country)
values ('$fname','$mname','$lname','$email','$password','$address','$college','$mobile','$gender','$city','$state','$country')";
}

if (mysqli_query($con, $sql)) {
	header("location:display.php");
	echo "New record created successfully";
	echo "<a href='display.php'>Click for Display</a>          ";
	echo "<a href='reg.html'>Back</a>";

  } else {
	echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  



	

?>