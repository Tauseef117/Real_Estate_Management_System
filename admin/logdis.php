<?php
session_start();

 ?>
<?php
    include('header.php');
    include('../dbcon.php');
?>

<div class="admintitle" align="center">
    
<meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <h4>
     <a href="admindash.php" style="float:left;margin-right:10px; color:black; font-size:20px;">Back to Control Panel</a>   
    <h1 >Admin Log </h1>
    </div>
    <style>
body {
  background-image: url('../abc.jpg');
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
        <th>Log ID </th>
        <th>Property ID </th>
        <th>Action </th>
        <th>Date</th>
        
       
    </tr>
   
    <?php
        $sql="SELECT * FROM logs";
        $run=mysqli_query($con,$sql);
            while($data=mysqli_fetch_array($run))
            {
                ?>
                <tr>
            <td><?php echo $data['id']; ?></td>
             <td><?php echo $data['propid']; ?></td>
             <td><?php echo $data['action']; ?></td>
             <td><?php echo $data['cdate']; ?></td>
             
             
                 </tr>
                 <?php
             }
        
   ?>
  
 </table>
</body>
</html>