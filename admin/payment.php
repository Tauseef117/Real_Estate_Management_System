<?php
session_start();
 ?>

<?php
    include('header.php');
    include('../dbcon.php');
?>
<style>
body {
  background-image: url('../abc.jpg');
  background-repeat:repeat;
}
</style>
<div class="admintitle" align="center">
    
  
    <h4>
     <a href="../index.php" style="float:left;margin-right:10px; color:black; font-size:20px;">Back to Home Page</a>   
    <a  href="clientlogout.php" style="float:right;margin-right:10px; color:black; font-size:20px;">Logout</a></h4>
    <h1>Enter Payment Details</h1>
    </div>

<form method="post" action="payment.php" enctype="multipart/form-data">
<table align="center" border="1" style="width: 70%; margin-top: 40px;">

<tr>
  <th>Booking ID</th>
  <td>
   <input type="number" name="bookid" value="" required="">
  </td>
 </tr>

 <tr>
  <th>Username</th>
  <td>
   <input type="text" name="nameuser" value="" required="">
  </td>
 </tr>

 <tr>
  <th>Transaction Ref No</th>
  <td>
   <input type="number" name="transref" value="" required="">
  </td>
 </tr>

 <tr>
    <td colspan="2" align="center"><input type="submit" name="submit" value="submit"> </td>
</tr>

 <?php
        if(isset($_POST['submit']))
        {
                $bookid=$_POST['bookid'];
                $nameuser=$_POST['nameuser'];
                $transref=$_POST['transref'];

                $query = "select * from booking where bookid='$bookid'";
                $run = mysqli_query($con,$query);
                $quer = "select * from reguser where nameuser='$nameuser'";
                $ru = mysqli_query($con,$quer);


                if((mysqli_num_rows($run)<1) && (mysqli_num_rows($ru)<1))
                {
                    echo ' 
                    <script>
                        alert("Enter Valid Details");

                        </script>
                    '; 
                }
                else
                {
                      $qry="INSERT INTO payment values (NULL,'$bookid','$nameuser','$transref')";
                     $run=mysqli_query($con,$qry);
                     if(isset($run))
                      {
                      echo ' 
                       <script>
                        alert("Congratulations....Payment Deatils are Verified");

                        </script>
                       ';                   
                     }
                }

        }

    ?>
