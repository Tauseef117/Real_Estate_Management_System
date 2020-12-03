<?php
session_start();

 ?>
<?php
    include('admin/header.php');
    include('dbcon.php');
?>

<div class="admintitle" align="center">
    
<meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <h4>
     <a href="index.php" style="float:left;margin-right:10px; color:black; font-size:20px;">Back to Home Page</a>   
    <h1 >All Properties </h1>
    </div>
    <style>
body {
  background-image: url('abc.jpg');
  background-repeat:repeat;
}
</style>
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
&emsp; 
 &ensp;
<table align="center" width="80%" border="1" style="margin-top:10px;">
    <tr style="background-color:#000; color:#fff;">
        <th>Property ID </th>
        <th>Owner Name </th>
        <th>Type</th>
        <th>Location</th>
        <th>Status</th>
        <th>Total Value</th>
       
    </tr>
   
    <?php
        $sql="CALL `display`()";
        $run=mysqli_query($con,$sql);
            while($data=mysqli_fetch_array($run))
            {
                ?>
                <tr>
             <td><?php echo $data['propid']; ?></td>
             <td><?php echo $data['ownername']; ?></td>
             <td><?php echo $data['type']; ?></td>
             <td><?php echo $data['location']; ?></td>
             <td><?php echo $data['status']; ?></td>
             <td><?php echo $data['totvalue']; ?></td>
             
             
                 </tr>
                 <?php
             }
        
   ?>
  
 </table>
</body>
</html>