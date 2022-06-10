<?php
   session_start();
   include 'db.php';
   if(isset($_POST['logins'])){
      $email =$_POST['em']; 
      $password =$_POST['pass'];
      $pass_decode = md5($password);
      $query = "select * from registation  where  Email= '$email'";
      $result = mysqli_query($con,$query);
      $count = mysqli_num_rows($result);
      if($count>0){
         $row = mysqli_fetch_assoc($result);
         $pass = $row['Password'];
         if( $pass==$pass_decode){
            $_SESSION['d_user']=$row['Name'];
            $_SESSION['d_ser']=$row['Mobile'];
            ?>
            <script>
               alert("Login Successfully");
               location.replace('index.php');
            </script>
            <?php
             } else{
             ?>
              <script>
               alert("Invalid Password");
               location.replace('login.php');
              </script>
         <?php
         }
         

      }
   }  
?>