
<?php
session_start();
/*include '../menu1.php';*/
include ('titleheaddepro.php'); // we include html starting code on this file 
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
 <form action="deleteprop.php" method="post">
  <table style="width:55%" align="center" class="table table-striped table-hover table-bordered">
   <tr>
    <th> Enter Property ID </th>
    <td><input type="number" name="propid" placeholder="Enter Property ID" required></td>
   </tr>
   <tr>
    <th> Enter Owner Name </th>
    <td> <input type="text" name="ownername" placeholder="Enter Owner Name " required></td>
   </tr>
   <tr class="text-center">
    <td colspan=2 align="center"><button type="submit" name="submit" class="btn-primary btn"> Search </button></td>
   </tr>
  </table>
 </form>

 
 <table align="center" width="80%" border="1" style="margin-top:10px;">
    <tr style="background-color:#000; color:#fff;">
        <th>Type</th>
        <th> Location</th>
        <th>Status </th>
        <th>Total value </th>
        <th>edit </th>


    </tr>
  <?php
  if(isset($_POST['submit'])) // If only work when submit button is pressed
   {
    include ('../dbcon.php'); // Include Database File 
    
    $propid = $_POST['propid'];
    $ownername = $_POST['ownername'];
    
    $query = "select * from property where propid='$propid' AND ownername LIKE '%$ownername%'";
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
       <td> <?php echo $data['type']; ?></td>
       <td> <?php echo $data['location']; ?></td>
       <td> <?php echo $data['status']; ?></td>
       <td> <?php echo $data['totvalue']; ?> </td>
       <td><a href="deleteform.php?sid=<?php echo $data['propid'] ?>"> Delete </td>
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