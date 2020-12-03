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
    include('header.php');
    include('titleheaduppro.php');
    include('../dbcon.php');
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
 <style>
body {
   
    background-image: url("../abc.jpg");
   
  background-repeat: repeat;
  height: 100%;
}
</style>
</head>
<body>
<table align="center">
<form action="updateprop.php" method="post">
    <tr>
        <th><font size="5">Enter Property ID</font></th>
        <td><input type="number" name="propid" placeholder="Enter Property ID" required="required"/> </td>
    
        <th><font size="5">Enter Owner Name</font></th>
        <td><input type="text" name="ownername" placeholder="Enter Owner Name" required="required"/>
 </td>
 <td colspan="2"><input type="submit" name="submit" value="Search" /> </td>
    </tr>
    
    

</form>
</table>

<table align="center" width="80%" border="1" style="margin-top:10px;">
    <tr style="background-color:#000; color:#fff;">
        <th>Type</th>
        <th>Location</th>
        <th>Status </th>
        <th>Total value </th>
        <th>edit </th>


    </tr>
   

    <?php
    if(isset($_POST['submit']))
    { 
        $propid=$_POST['propid'];
        $ownername=$_POST['ownername'];
        $_SESSION['property_id'] = $_POST['propid'];
        $run=mysqli_query($con, $sql="SELECT * FROM property WHERE propid ='$propid' AND ownername LIKE  '%$ownername%' ");
        if (mysqli_num_rows($run)<1)
        {
            echo "<tr><td colspan='5'>no records found</td></tr>";
         }
            else
            {
                $count=0;
                while($data=mysqli_fetch_assoc($run))
                {
                   
                    
                      $count++;
                    ?>
                    <tr>
                    
                 
                 <td><?php echo $data['type']; ?></td>
                 <td><?php echo $data['location']; ?></td>
                 <td><?php echo $data['status']; ?></td>
                 <td><?php echo $data['totvalue']; ?></td>
               
                 <td><a href="updateform.php?id=<?php  echo $data['propid']?>">Edit</a></td>
                     </tr>
               <?php
                    }
                }

  }
    ?>
    </table>
    </body>
</html>





