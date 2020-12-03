<?php 
 include ('../dbcon.php');
 
 $propid = $_REQUEST['sid'];
 
 $query = "delete from property where propid = $propid";
 $run = mysqli_query($con,$query); // for fired the query
 
 if($run == true)
 {
    mysqli_query($con,"CREATE TRIGGER `deletepro` AFTER DELETE ON `property` FOR EACH ROW INSERT INTO logs VALUES(NULL, NEW.propid,'Updated',NOW())");
  ?>
  <script> 
   alert('Data Deleted Successfully');
   window.open('deleteprop.php','_self'); // use for Page redirection
   // header('location:updateform.php?sid=$id');
  </script>
  <?php
 }