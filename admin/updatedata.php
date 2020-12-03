

<?php 
include("../dbcon.php");
session_start();

$ownername = $_POST['ownername']; 
$type = $_POST['type'];
$location =$_POST['location'];
$status =$_POST['status'];
$totvalue = $_POST['totvalue'];
// $propid = $_GET['idd'];
$propid = $_SESSION['property_id'];

 $sql="UPDATE property SET `ownername` = '$ownername', `type` = '$type', `location` = '$location', `status` = '$status', `totvalue` = '$totvalue' WHERE `propid` = '$propid'";


$run = mysqli_query($con,$sql );
if($run == true) {
    mysqli_query($con,"CREATE TRIGGER `updatepro` AFTER UPDATE ON `property` FOR EACH ROW INSERT INTO logs VALUES(NULL, NEW.propid,'Property Updated',NOW())");
 ?>
 <script type="text/javascript">
  alert('Data Updated Successfully');
  window.open('updateform.php?id<?php echo $propid; ?>', '_self');
 </script>
 <?php
}

?>