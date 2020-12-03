<?php
 session_start();
 if(isset($_SESSION['uid']))
 {
     header('location:admin/admindash.php');

 }

 
?>
<!DOCTYPE HTML>
<html lang="en_US">
    <head>
        <meta charset="UTF-8">
        <title>Admin Login</title>
      
</head>
<body>
<br>           </br>
<br></br>
<br></br>
<h1 align="center" style="margin-top:0.1px"><font size="10" color="orange"> Admin login </font></h1>
<form action="adminlogin.php" method="post">
<table align="center">
<tr>
    <td><font size="6"color="orange">Username  </font></td><td><input type="text" name ="uname" required></td>
    </tr>
    <tr>
    <td><font size="6"color="orange">Password  </font></td><td><input type="password" name= "pass" required></td>
    </tr>
   <tr>
    <td colspan="2" align="center"><font size="7"><input type="submit" name="login" value ="login"></font></td>
    </tr>
    
    <style>
body {
  background-image: url('backim.jpg');
  background-repeat: no-repeat;
}
</style>
 </table>

</form>

</body>
</html>
<?php

include('dbcon.php');

if(isset($_POST['login']))
{
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $qry="SELECT * FROM `Admin` WHERE `Username`='$username' AND `Password`='$password'";
    $run=mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);
    if($row <1)
    {
        ?>
        <script>
            alert('incorrect password!!');
            window.open('adminlogin.php','_self');
            </script>
            <?php

    }
    else{
        
        
             $data=mysqli_fetch_assoc($run);
             $id=$data['id'];
            
             $_SESSION['uid']=$id;
             header('location:admin/admindash.php');

            



       
    }


}
?>