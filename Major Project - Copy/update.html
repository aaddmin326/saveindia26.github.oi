<?php

      //Auto fill form 
     ///receive all input values from the form
     //session_start();
    //error_reporting(0);
    include 'db.php';
     $di=$_GET['updateid'];
    $dquery = "SELECT * FROM service where ID='$di' ";
    $ddata = mysqli_query($con, $dquery);
    $dtotal = mysqli_num_rows($ddata);
    $result =mysqli_fetch_assoc($ddata);
    // echo $di;
     if (isset($_POST['update'])){
         $name = mysqli_real_escape_string($con, $_POST['name']);
         $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
         $foodquty = mysqli_real_escape_string($con, $_POST['num']);
         $Addredd = mysqli_real_escape_string($con, $_POST['text']);
         $ftype = mysqli_real_escape_string($con, $_POST['type']);
         $dtype = mysqli_real_escape_string($con, $_POST['dtype']);
    
         $updatequery = "UPDATE service SET Name='$name',Food_qunty='$foodquty',
         Mobile='$mobile',Address='$Addredd',Food_type='$ftype',
         Requirement='$dtype',date_time=current_timestamp() WHERE ID='$di' ";
         
        // echo $updatequery;
         
         

          $uquery = mysqli_query($con,$updatequery);
              if($uquery){
                ?>
                <script>
                      alert("Update Successfully");
                      location.replace('index.php');
                 </script>
    
                <?php
                 
              }else{
                ?>
                <script>
                      alert("Update Denai");
                      location.replace('index.php');
                 </script>
    
                <?php
              }
        }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <div class="center">
        <label for="" class="close-btn fas fa-times"> </label>
        <h1>Updation Form</h1>
        <form action="update.php" method="POST">
            <div class="txt_field">
                <input type="text" value="<?php echo $result['Name']; ?>" name="name" required>
                <span></span>
                <label>Full name</label>
            </div>
           <div class="txt_field">
            <input type="text" value="<?php echo $result['Mobile']; ?>" name="mobile" required>
            <span></span>
            <label>Mobile no</label>
        </div>
        <div class="txt_field">
            <input type="number" value="<?php echo $result['Food_qunty']; ?>" name="num" required>
            <span></span>
            <label>Food Quantity in KG</label>
        </div>
           <div class="txt_field">
               <input type="text" value="<?php echo $result['Address']; ?>" name="text" required>
               <span></span>
               <label>Address</label>
           </div>
           <div class="txt_field">
            <input type="text" value="<?php echo $result['Food_type']; ?>" name="type" required>
            <span></span>
            <label>Veg or Non-Veg</label>
        </div>
        <div class="txt_field">
            <input type="text" value="<?php echo $result['Requirement']; ?>"  name="dtype" required>
            <span></span>
            <label>Services</label>
        </div>
            <input type="submit"  name="update" value="Update">
        </form>

    </div>
</body>
</html>
<?php


?>
