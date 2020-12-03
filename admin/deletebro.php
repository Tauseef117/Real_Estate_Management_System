
<?php
session_start();

include ('titleheaddebro.php'); // we include html starting code on this file 
include('header.php');
 if(isset($_SESSION['uid'])) // if session is set then print the echo statment
 {
  echo " ";
 }

?>
    <style>
body {
   
    background-image: url("../abc.jpg");
   
  background-repeat: repeat;
  height: 100%;
}
</style>
<div class="container">
 <br><div class="card bg-info text-white text-center">
  
 </div>
 <form action="deletebro.php" method="post">
  <table style="width:55%" align="center" class="table table-striped table-hover table-bordered">
   <tr>
    <th> Enter Broker ID </th>
    <td><input type="number" name="brokerid" placeholder="Enter Broker ID" required></td>
   </tr>
   <tr>
    <th> Enter Broker Name </th>
    <td> <input type="text" name="name" placeholder="Enter Broker Name " required></td>
   </tr>
   <tr class="text-center">
    <td colspan=2 align="center"><button type="submit" name="submit" class="btn-primary btn"> Search </button></td>
   </tr>
  </table>
 </form>

 
 <table align="center" width="80%" border="1" style="margin-top:10px;">
    <tr style="background-color:#000; color:#fff;">
        <th>Property ID</th>
        <th>Contact No</th>
    </tr>
  <?php
  if(isset($_POST['submit'])) // If only work when submit button is pressed
   {
    include ('../dbcon.php'); // Include Database File 
    
    $brokerid = $_POST['brokerid'];
    $name = $_POST['name'];
    
    $query = "select * from broker where brokerid='$brokerid' AND name LIKE '%$name%'";
    $run = mysqli_query($con,$query);
    
    if(mysqli_num_rows($run)<1)
    {
     echo "<tr><td colspan='5'> No Records Found</td></tr>";
    }
    else
    {
     $count=0;
     while($data=mysqli_fetch_assoc($run))
     {
      $count++;
      ?>
      <tr>
    
       <td> <?php echo $data['propid']; ?></td>
       <td> <?php echo $data['contactno']; ?></td>
      
       <td><a href="deletebroform.php?sid=<?php echo $data['brokerid'] ?>"> Delete </td>
      </tr>
      
      <?php
     }
    }
   }
  ?>
 </table>
</div>
</body>
</html>