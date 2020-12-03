<?php
session_start();
        if(isset($_SESSION['uid']))
        {
            echo "";
        }
        else{
            header('location:..../adminlogin.php');
        }

?>
<?php
    include('header.php');
?>

<!DOCTYPE HTML>
<html lang="en_US">
    <head>
        <meta charset="UTF-8">
        
</head>
<body>
<style>
body {
   
    background-image: url("../backim.jpg");
    height: 100%;

 
  background-repeat: no-repeat;
  background-size: cover;
    background-color: powderblue;
}
</style>


 <div class="admintitle" align="center">
   <h4> <a href="logout.php" style="float:right;margin-right:30px; color:orange; font-size:25px;">Logout</a></h4>
    <h1><a  style=font-size:38px;">Welcome to Admin Control Panel</h1>
    </div>
    <div class="dashboard">
        <table  style="width:50%" align="center">
            <tr>
                <td><a href="addprop.php" align="center"><font size="9"><button type="button" class="btn btn-primary btn-block" style="font-size: 28px;">Enter Property Details</button></font></a></td>

             </tr>
             <tr>
                <td><a href="addbro.php"><font size="6"><button type="button" class="btn btn-primary btn-block" style="font-size: 28px;">Enter Broker Details</button></font></a></td>

             </tr>
             <tr>
                <td><a href="updateprop.php"><font size="6"><button type="button" class="btn btn-primary btn-block" style="font-size: 28px;">Update Property Details</button></font></a></td>

             </tr>
             <tr>
                <td><a href="updatebro.php" align="center"><font size="9"><button type="button" class="btn btn-primary btn-block" style="font-size: 28px;">Update Broker Details</button></font></a></td>

             </tr>
             <tr>
                <td><a href="deleteprop.php"><font size="6"><button type="button" class="btn btn-primary btn-block" style="font-size: 28px;">Delete Property Details </button></font></a></td>

             </tr>
             <tr>
                <td><a href="deleteprop.php"><font size="6"><button type="button" class="btn btn-primary btn-block" style="font-size: 28px;">Delete Broker Details</button></font></a></td>

             </tr>
         </table>


    </div>
   
 </div>
 </body>
</html>