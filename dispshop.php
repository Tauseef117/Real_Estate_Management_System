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
    <h1 >Available Shop </h1>
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
        <th>Location</th>
        <th>Status</th>
        <th>Total Value</th>
        <th>Broker Name </th>
        <th>Contact No</th>
    </tr>
   
    <?php
        $run=mysqli_query($con, $sql="SELECT * FROM property INNER JOIN broker ON property.propid=broker.propid where  type='shop'");
       
        if (mysqli_num_rows($run)<1)
        {
            echo "<tr><td colspan='5'>no shop available</td></tr>";
        }
        
        else
        {
           
            while($data=mysqli_fetch_array($run))
            {
                ?>
                <tr>
             <td><?php echo $data['propid']; ?></td>
             <td><?php echo $data['ownername']; ?></td>
             <td><?php echo $data['location']; ?></td>
             <td><?php echo $data['status']; ?></td>
             <td><?php echo $data['totvalue']; ?></td>
             <td><?php echo $data['name']; ?></td>
             <td><?php echo $data['contactno']; ?></td>
             
                 </tr>
                 <?php
             }
        }
   ?>
  
 </table>
</body>
</html>
