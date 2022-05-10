<?php
$con = mysqli_connect('localhost','root' ,'','reg1');
$sql="SELECT * FROM local";
$result=mysqli_query($con,$sql);
$rd=$_GET['id'];
 // sql to delete a record
 $sql = "DELETE FROM local WHERE id=$rd";
    if (mysqli_query($con, $sql)) {
        echo "Record deleted successfully";
       echo '<a href="Display.php">Go back</a>';
    } else {
        echo "Error deleting record: " . mysqli_error($con);
       echo '<a href="Display.php">try agin</a>';
    }