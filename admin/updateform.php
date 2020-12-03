

<?php
include('header.php');
include('titleheaduppro.php');
include('../dbcon.php');
session_start();
$id = isset($_GET['id']);

$run = mysqli_query($con,$sql = "SELECT * FROM property WHERE 'propid'='$id' ");
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
<form method="post" action="updatedata.php" enctype="multipart/form-data">
<table align="center" border="1" style="width: 70%; margin-top: 40px;">
 <tr>
  <th>Owner Name</th>
  <td>
   <input type="text" name="ownername" value="<?php echo $data['ownername']; ?>" required>
  </td>
 </tr>

 <tr>
  <th>Type</th>
  <td>
   <input type="text" name="type" value="<?php echo $data['type']; ?>" required="">
  </td>
 </tr>

 <tr>
  <th>Location</th>
  <td>
   <input type="text" name="location" value="<?php echo $data['location']; ?>" required="">
  </td>
 </tr>

 <tr>
  <th>Status</th>
  <td>
   <input type="text" name="status" value="<?php echo $data['status']; ?>" required="">
  </td>
 </tr>

 <tr>
  <th>Total Value</th>
  <td>
   <input type="number" name="totvalue" value="<?php echo $data['totvalue']; ?>" required="">
  </td>
 </tr>


 <tr>
  
  <td colspan="2" align="center">
  <input type="hidden" name="propid" value="<?php echo $data['propid']; ?>">
  <input type="submit" name="submit" value="Submit">
  </td>

 </tr>
 
</table>
<td><a href="updateform.php?id=<?php  echo $data['propid']?>"></a></td>
</form>