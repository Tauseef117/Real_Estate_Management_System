<?php
    include('header.php');
    include('titleheadbro.php');
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
<form method="post" action="addbro.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:70%; margin-top:40px;">

<tr>
    <th><font size="6">Property ID </font> </th>
    <td> <input type="number" name="propid" placeholder="Enter Property ID" required></td>

</tr>
<tr>
    <th><font size="6">Broker Name </font> </th>
    <td> <input type="text" name="name" placeholder="Enter Name" required></td>

</tr>

<tr>
    <th><font size="6">Contact No</font> </th>
    <td> <input type="number" name="cont" placeholder="Enter contact no" required></td>

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
              
            
                $propid=$_POST['propid'];
                $name=$_POST['name'];
                $contactno=$_POST['cont'];
                


                $qry="INSERT INTO broker values (NULL,'$propid','$name','$contactno')";
                 

                $run=mysqli_query($con,$qry);
                if(isset($run))
                {
                  mysqli_query($con,"CREATE TRIGGER `insertbro` AFTER INSERT ON `broker` FOR EACH ROW INSERT INTO logs VALUES(NULL, NEW.prop.id,'Broker Inserted',NOW())");
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

