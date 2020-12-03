<?php
session_start();

 if(isset($_SESSION['uid'])) // if session is set then print the echo statment
 {
  echo " ";
 }
 /*else // If session is not set then it will redirect me to Login page 
 {
  header('location: ../adminlogin.php');
 }*/
 ?>
<?php
     include('../dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Login/Signup</title>

</head>

<body>
    <div class="container">
        <div class="box" id="login">
            <div class="login-form">
                <h1>Login</h1>
                <br>
                <br>
                <form action="new.php" method="post">
                    <input type="text" name="usernm" class="inp" placeholder="Username" required>
                    <br>
                    <input type="password" name="pass" class="inp" placeholder="Password" required>
                    <br><br>


                    <input type="radio" name="user-type" value="admin" class="radio-btn" checked style=" margin: 0;height: 20px;width: 20px;">&nbsp; <span style="color:#86c323">Admin</span> &nbsp;&nbsp;

                    <input type="radio" name="user-type" value="organizer" class="radio" style=" margin: 0;height: 20px;width: 20px;"> &nbsp; <span style="color:#86c323">Orgainzer</span>&nbsp;&nbsp;

                    <input type="radio" name="user-type" value="student" class="radio" style=" margin: 0;height: 20px;width: 20px;">&nbsp; <span  style="color:#86c323">Student</span>
                    <br>
                    <br>
                    <button class="btn" name="login">Login</button>
                </form>

                <?php
                  
                  if(isset($_POST['login']))
                  { 
                      $usern = $_POST['usernm'];
                      $passw = $_POST['pass'];        
                      $quer="SELECT * from 'reguser' WHERE 'nameuser' ='$usernm' and 'pword' ='$pass' ";
                      $res=mysqli_query($con,$quer);
                      if( mysqli_num_rows($res)>0)
                      {
                          
                          header('location:clientadmin.php');
                      }
                      else
                      {
                          echo'<script type="text/javascript"> alert("invalid")</script>';
                      }
                  }
        ?>

            </div>
        </div>
        <div class="box" id="signup">
            <div class="signup-form">
                <h1>Signup</h1>
                <br>
                <br>
                <form action="new.php" method="post">
                    <input type="text" name="name" class="input" placeholder="Name" required>
                    <br>
                    <input type="number" name="contactno" class="input" placeholder="Contact No" required>
                    <br>
                    <input type="text" name="address" class="input" placeholder="address" required>
                    <br>
                    
                    <input type="password" name="password" class="input" placeholder="Password" required>
                    <br>
                    <input type="password" name="cpassword" class="input" placeholder="Confirm Password" required>
                    <br>
                    
            
                    <!-- <input type="submit" name="signup-btn" value="SignUp"> -->
                    <button class="btn" id="ba" name="signupbtn">Signup</button>
                </form>
                <?php
                    if(isset($_POST['signupbtn'])){
                       
                       
                        $usernames = $_POST['name'];
                        $contactnos = $_POST['contactno'];
                        $addresss = $_POST['address'];
                        $passwords = $_POST['password'];
                        $cpasswords = $_POST['cpassword'];
                       
                        if($passwords==$cpasswords)
                        {
                            $sql="SELECT * from 'reguser' WHERE 'nameuser' = '$usernames' and 'pword' ='$passwords'";
                            $run=mysqli_query($con,$sql);
                            if (mysqli_num_rows($run)>0)
                            {
                                echo ' <script type="text/javascript"> alert("User already exists.. Please Login")</script>';
                            }
                            else
                            {
                                $query1 = "insert into client values ( NULL,'$usernames','$contactnos','$addresss')";
                                $query_run = mysqli_query($con,$query1);
                                if($query_run)
                                {
                                    echo '<script type="text/javascript"> alert("User registered..")</script>';
    
                                    $query2 = "insert into reguser values('$usernames','$passwords')";
                                     $query_run = mysqli_query($con,$query2);
                                }

                            }
                        }
                        else
                            {
                                echo ' <script type="text/javascript"> alert("Password does not match")</script>';
                            }
                        }  
         ?>
            </div>
        </div>
    </div>
</body>

</html>