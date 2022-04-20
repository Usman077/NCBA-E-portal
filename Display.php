<table border=1px>
    <h1>Students register</h1>
<tr><th>Sr#</th><th>Student first Name</th><th>Student middle Name</th><th>Student last Name</th><th>Email</th><th>Password</th><th>Address</th><th>College</th><th>Mobile</th><th>gender</th><th>City</th><th>State</th><th>Countery</th><th>Hobbies</th><th>Oprations</th> </tr>


<?php
$con = mysqli_connect('localhost','root' ,'','reg1');
$sql="SELECT * FROM local";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
    echo "<tr><td>".$row['id']."</td><td>".$row['fname']."</td><td>".$row['mname']."</td><td>".$row['lname']."</td><td>".$row['email']."</td><td>".$row['password']."</td><td>".$row['address']."</td><td>".$row['college']."</td><td>".$row['mobile']."</td><td>".$row['gender']."</td><td>".$row['city']."</td><td>".$row['state']."</td><td>".$row['country']."</td><td>".$row['hobbies']."</td><td>";
}

?>


</table>