
<?php 
include("../dbcon.php");
session_start();

$name = $_POST['name']; 
$propid =$_POST['propid'];
$contactno = $_POST['contactno'];
// $propid = $_GET['idd'];
$brokerid = $_SESSION['broker_id'];

 $sql="UPDATE broker SET `name` = '$name', `propid` = '$propid', `contactno` = '$contactno' Where `brokerid` = '$brokerid'";


$run = mysqli_query($con,$sql );
if($run == true) {
    mysqli_query($con,"CREATE TRIGGER `updatebro` AFTER UPDATE ON `broker` FOR EACH ROW INSERT INTO logs VALUES(NULL, NEW.propid,'Broker Updated',NOW())");
 ?>
 <script type="text/javascript">
  alert('Data Updated Successfully');
  window.open('updateformbro.php?id<?php echo $brokerid; ?>', '_self');
 </script>
 <?php
}

?>