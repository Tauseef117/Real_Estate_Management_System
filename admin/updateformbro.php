<?php
include('header.php');
include('titleheadupbro.php');
include('../dbcon.php');
session_start();
$id = isset($_GET['id']);

$run = mysqli_query($con,$sql = "SELECT * FROM broker WHERE 'brokerid'='$id' ");
$data = mysqli_fetch_assoc($run);

// $_SESSION['property_id'] = $data['propid'];
?>
    <style>
body {
   
    background-image: url("../abc.jpg");
   
  background-repeat: repeat;
  height: 100%;
}
</style>
<form method="post" action="updatedatabro.php" enctype="multipart/form-data">
<table align="center" border="1" style="width: 70%; margin-top: 40px;">
 <tr>
  <th>Broker Name</th>
  <td>
   <input type="text" name="name" value="<?php echo $data['name']; ?>" required>
  </td>
 </tr>

 <tr>
  <th>Property ID</th>
  <td>
   <input type="number" name="propid" value="<?php echo $data['propid']; ?>" required="">
  </td>
 </tr>
 

 <tr>
  <th>Contact No</th>
  <td>
   <input type="number" name="contactno" value="<?php echo $data['contactno']; ?>" required="">
  </td>
 </tr>


 <tr>
  
  <td colspan="2" align="center">
  <input type="hidden" name="brokerid" value="<?php echo $data['brokerid']; ?>">
  <input type="submit" name="submit" value="Submit">
  </td>

 </tr>
 
</table>
<td><a href="updateformbro.php?id=<?php  echo $data['brokerid']?>"></a></td>
</form>