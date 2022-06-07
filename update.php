
<?php
$con = mysqli_connect('localhost','root' ,'','reg1');
$id=$_GET['id'];
$sql="SELECT * FROM local WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$fname=$row['fname'];
$email=$row['email'];
$password=$row['password'];
$address=$row['address'];
$college=$row['college'];
$mobile=$row['mobile'];
$city=$row['city'];
$state=$row['state'];
$country=$row['country'];

if(isset($_POST['update']))
{     
    
$fname=$_POST['fname'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$college=$_POST['college'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$Sql="UPDATE local SET fname='$fname',email='$email', password ='$password', address='$address',college= '$college', mobile='$mobile', gender='$gender', city='$city', state='$state',country='$country' WHERE id=$id";
$result = $con->query($Sql);
if($result==true){
  header("location:Display.php");
}
else{
    echo "error" . $con->error;
}
}    
    
?>


<html>
<head>
    <title>update</title>
    <link rel="stylesheet" href="reg.css">
    
    
</head>
<body>
     
   
    <div id="con" >      
    <h1 align="center" > Update</h1>
             <form  method="post">
              
               <table>
                    <tr>  
                        <td><label for="name">Name:</label></td>
                        <td><input type="text" name="fname" value="<?php echo $fname?>"  > </td>         
                    </tr>     
                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td colspan="3" ><input type="email" name="email"  value="<?php echo $email?>"  placeholder="abc@xyz.com"  ></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td colspan="3"><input type="password" name="password"  value="<?php echo $password?>" placeholder="Password"required></td>
                    </tr>
                    <tr>
                        <td><label for="cpassword">Confirm Password:</label></td>
                        <td colspan="3"><input type="password"  name="password"  value="<?php echo $password?>" placeholder="Confirm Password"required></td>
                    </tr>
                    <tr>
                        <td><label for="address">Address:</label></td>
                        <td colspan="3"><input type="text" name="address" values="<?php echo $address?>" ></td>
                    </tr>
                    <tr>
                        <td><label for="college">College Name:</label></td>
                        <td colspan="3"><input type="text"  name="college"  value="<?php echo $college?>"  placeholder="College Name"></td>
                    </tr>
                    <tr>
                       <td><label for="mobile">Mobile Number:</label></td> 
                 
                       <td><input type="number"  name="mobile" value="<?php echo $mobile?>"  placeholder="Mobile Number" required> </td>
                    </tr>
                    <tr>
                        <td><label for="gender">Gender:</label></td>
                        <td>
                            <select name="gender" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="other">Other</option>

                            </select> </td>
                    <tr>
                        <td><label for="city">City:</label></td>
                        <td colspan="3"><input type="text" name="city" value="<?php echo $city?>"  placeholder="City"></td>
                    </tr>
                    <tr>
                        <td><label for="state">State:</label></td>
                        <td colspan="3"><input type="text"  name="state" value="<?php echo $state?>" placeholder="State"></td>
                    </tr>
                    <tr>
                        <td><label for="country">Country:</label></td>
                        <td colspan="3"><input type="text"  name="country" value="<?php echo $country?>"  placeholder="Country"></td>
                    </tr>
                
                 </table>
                    <input type="submit" name="update" value="Submit">

        </form>
        <button><a href="display.php">DISPLAY</a></button>    
       
    </div>

</body>
</html>




