<?php
    include('header.php');
    include('titlehead.php');
?>
<html>
    <body>
    <style>
    
body {
   
    background-image: url("../abc.jpg");
   
  background-repeat: repeat;
  height: 100%;
}

</style>
<form method="post" action="addprop.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;">

<tr>
    <th><font size="6">Owner Name</font> </th>
    <td><input type="text" name="oname" placeholder="Enter Owner Name" required> </td>

</tr>
<tr>
    <th><font size="6">Type </font> </th>
    <td> <input type="text" name="type" placeholder="Enter Type" required></td>

</tr>
<tr>
    <th><font size="6">Location </font> </th>
    <td> <input type="text" name="loc" placeholder="Enter Location" required></td>

</tr>
<tr>
    <th><font size="6">Status </font> </th>
    <td> <input type="text" name="status" placeholder="Enter Status" required></td>

</tr>

<tr>
    <th><font size="6">Total Value</font> </th>
    <td> <input type="number" name="val" placeholder="Enter total value" required></td>

</tr>
<tr>
    <td colspan="2" align="center"><input type="submit" name="submit" value="submit"> </td>
</tr>


</table>
</form>
    </body>
</html>
    

    <?php
        if(isset($_POST['submit']))
        {
                include('../dbcon.php');
              
                $ownername=$_POST['oname'];
                $type=$_POST['type'];
                $location=$_POST['loc'];
                $status=$_POST['status'];
                $totvalue=$_POST['val'];
                


                $qry="INSERT INTO property values (NULL,'$ownername','$type','$location','$status','$totvalue')";
                 

                $run=mysqli_query($con,$qry);
                if(isset($run))
                {
                    mysqli_query($con,"CREATE TRIGGER `insertpro` AFTER INSERT ON `property` FOR EACH ROW INSERT INTO logs VALUES(NULL, NEW.propid,'Property Inserted',NOW())");
                   echo ' 
                    <script>
                        alert("Data inserted succesfully");

                        </script>
                    ';
                    
                }
                else
                {
                    echo "not submitted";
                }
    
            

        }

    ?>

