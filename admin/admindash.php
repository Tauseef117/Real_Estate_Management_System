<style>
body{
  margin: 0;
  padding: 0;
}
.container{
  text-align: center;
  margin-top: 300px;
}
.btn{
  border: 1px solid #FEFEFE;
  background: none;
  padding: 45px 40px;
  font-size: 21px;
  font-family: "montserrat";
  cursor: pointer;
  margin: 20px;
  transition: 0.8s;
  position: relative;
  overflow: hidden;
}
.btn1,.btn2{
  color: #FEFEFE;
}
.btn3,.btn4{
  color: #FEFEFE;
}
.btn1:hover,.btn2:hover{
  color: #fff;
}
.btn3:hover,.btn4:hover{
  color: #3498db;
}
.btn::before{
  content: "";
  position: absolute;
  left: 0;
  width: 100%;
  height: 0%;
  background: #3498db;
  z-index: -1;
  transition: 0.8s;
}
.btn1::before,.btn3::before{
  top: 0;
  border-radius: 0 0 50% 50%;
}
.btn2::before,.btn4::before{
  bottom: 0;
  border-radius: 50% 50% 0 0;
}
.btn3::before,.btn4::before{
  height: 180%;
}
.btn1:hover::before,.btn2:hover::before{
  height: 180%;
}
.btn3:hover::before,.btn4:hover::before{
  height: 0%;
}

</style>
<?php
    include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
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
   <h4> <a href="logout.php" style="float:right;margin-right:30px; color:black; font-size:25px;">Logout</a></h4>
    <h1><a  style=font-size:38px;">Welcome to Admin Control Panel</h1>
    </div>
    
    <div class="container">
  <a href="addprop.php"> <button class="btn btn1">Add Property Details</button>
  <a href="addbro.php"> <button class="btn btn2">Add Broker Details</button>
  <a href="updateprop.php"> <button class="btn btn1">Update Property Details</button>
  <a href="updatebro.php"> <button class="btn btn2">Update Broker Details</button>
  <a href="deleteprop.php"> <button class="btn btn1">Delete Property Details</button>
  <a href="deletebro.php"> <button class="btn btn2">Delete Broker Details</button>
  <a href="logdis.php"> <button class="btn btn2">View Log Details</button>
</div>
   
 </div>
 </body>
</html>

