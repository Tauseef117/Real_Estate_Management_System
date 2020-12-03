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
     <a href="choose.php" style="float:left;margin-right:10px; color:black; font-size:20px;">Go Back</a>   
    <a  href="clientlogout.php" style="float:right;margin-right:10px; color:black; font-size:20px;">Logout</a></h4>
    <h1>Enter below details for booking</h1>
    </div>

<form method="post" action="booking.php" enctype="multipart/form-data">
<table align="center" border="1" style="width: 70%; margin-top: 40px;">

<tr>
  <th>Property ID</th>
  <td>
   <input type="number" name="propid" value="" required="">
  </td>
 </tr>

 <tr>
  <th>Owner Name</th>
  <td>
   <input type="text" name="ownername" value="" required="">
  </td>
 </tr>

 <tr>
  <th>Your Unique ID</th>
  <td>
   <input type="number" name="clientid" value="" required="">
  </td>
 </tr>

 <tr>
    <td colspan="2" align="center"><input type="submit" name="submit" value="submit"> </td>
</tr>

 <?php
        if(isset($_POST['submit']))
        {
                $propid=$_POST['propid'];
                $ownername=$_POST['ownername'];
                $clientid=$_POST['clientid'];

                $query = "select * from property where propid='$propid' AND ownername LIKE '%$ownername%'";
                $run = mysqli_query($con,$query);
                $quer = "select * from client where clientid='$clientid'";
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
                      $qry="INSERT INTO booking values (NULL,'$propid','$ownername','$clientid')";
                     $run=mysqli_query($con,$qry);
                     if(isset($run))
                      {
                      echo ' 
                       <script>
                        alert("Booked");

                        </script>
                       ';                   
                     }
                }

        }

    ?>
