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
    include('titleheadupbro.php');
    include('../dbcon.php');
?>
    <style>
body {
   
    background-image: url("../abc.jpg");
   
  background-repeat: repeat;
  height: 100%;
}
</style>
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
<table align="center">
<form action="updatebro.php" method="post">
    <tr>
        <th><font size="5">Enter Broker ID</font></th>
        <td><input type="number" name="brokerid" placeholder="Enter Broker ID" required="required"/> </td>
    
        <th><font size="5">Enter Broker Name</font></th>
        <td><input type="text" name="name" placeholder="Enter Broker Name" required="required"/>
 </td>
 <td colspan="2"><input type="submit" name="submit" value="Search" /> </td>
    </tr>
    
    

</form>
</table>

<table align="center" width="80%" border="1" style="margin-top:10px;">
    <tr style="background-color:#000; color:#fff;">
        <th>Property ID </th>
        <th>Contact No</th>
        <th>edit </th>


    </tr>
   

    <?php
    if(isset($_POST['submit']))
    { 
        $brokerid=$_POST['brokerid'];
        $name=$_POST['name'];
        $_SESSION['broker_id'] = $_POST['brokerid'];
        $run=mysqli_query($con, $sql="SELECT * FROM broker WHERE brokerid ='$brokerid' AND name LIKE '%$name%'");
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
                    
                 
                 <td><?php echo $data['propid']; ?></td>
                 <td><?php echo $data['contactno']; ?></td>
                 
               
                 <td><a href="updateformbro.php?id=<?php  echo $data['brokerid']?>">Edit</a></td>
                     </tr>
               <?php
                    }
                }

  }
    ?>
    </table>
    </body>
</html>
