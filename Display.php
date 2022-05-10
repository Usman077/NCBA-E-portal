<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
</head>
<body>
    

</html>
<div class="glass">
<h1 align="center">Students Record</h1>

<table  align="center">
    
<tr><th>ID</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Password</th>
<th>Address</th>
<th>College</th>
<th>Mobile</th>
<th>gender</th>
<th>City</th>
<th>State</th>
<th>Countery</th>
<th colspan="2" align="center">Oprations</th>
 </tr>

<?php
$con = mysqli_connect('localhost','root' ,'','reg1');
$sql="SELECT * FROM local";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
    echo 
    "<tr>
    <td>".$row['id']."</td>
    <td>".$row['fname']."</td>
    <td>".$row['mname']."</td>
    <td>".$row['lname']."</td>
    <td>".$row['email']."</td>
    <td>".$row['password']."</td>
    <td>".$row['address']."</td>
    <td>".$row['college']."</td>
    <td>".$row['mobile']."</td>
    <td>".$row['gender']."</td>
    <td>".$row['city']."</td>
    <td>".$row['state']."</td>
    <td>".$row['country']."</td>
 <td><a href='del.php?id=$row[id]'class='btn btn-danger'>DELETE</a></td> 
 <td><a href='update.php?id=$row[id]'class='btn btn-success'>UPDATE</a></td> "  ;
}

?>

</table>
</div>
</body>
</html>
<style>
    body{
        background:linear-gradient(to right,#65dfc9,#6cdbed);
        min-height:100vh;
        display:flex;
        align-items: center;
        justify-content: center;
    }
    h1{
       
        color: #426696;  
    }
    .glass{
        min-height: 80vh;
        background :white;

        background:linear-gradient(to right bottom,rgba(255,255,255,0.7),rgba(255,255,255,0.3));
        border-radius:2rem;
    }