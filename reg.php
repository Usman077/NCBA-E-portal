<?php
echo "<h1>Registration Form</h1>";

$con = mysqli_connect('localhost','root' ,'','reg1');
if($con){
    echo"you are connected";
}else{
    echo "not connect";
}


?>