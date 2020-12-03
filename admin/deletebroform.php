<?php 
 include ('../dbcon.php');
 
 $brokerid = $_REQUEST['sid'];
 
 $query = "delete from broker where brokerid = $brokerid";
 $run = mysqli_query($con,$query); // for fired the query
 
 if($run == true)
 {
    
  ?>
  <script> 
   alert('Data Deleted Successfully');
   window.open('deletebro.php','_self'); // use for Page redirection
   // header('location:updateform.php?sid=$id');
  </script>
  <?php
 }