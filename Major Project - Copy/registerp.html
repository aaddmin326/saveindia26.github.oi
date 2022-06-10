<?php
 
 include 'db.php';
 // REGISTER USER
 if (isset($_POST['user_details'])) {
     // receive all input values from the form
       $name = mysqli_real_escape_string($con, $_POST['name']);
       $email = mysqli_real_escape_string($con, $_POST['email']);
       $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
       $address = mysqli_real_escape_string($con, $_POST['address']);
       $password = mysqli_real_escape_string($con, $_POST['password']);
       $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
  
       $pass = md5($password);
       // $cpassword = password_hash($cpassword,PASSWORD_BCRYPT) 
 
       $findquery = "select * from registation WHERE email = '$email'";
       $query =mysqli_query($con,$findquery);

       $findcount = mysqli_num_rows($query);
       if($findcount>0){
           ?>
            <script>
                  alert("Mobile no is already exist");
                  location.replace('login.php');
             </script>

            <?php
         }else{
               if($password === $cpassword){
                $insertquery = "INSERT INTO registation (Name, Email, Mobile, Address, Password, Date_Time)
                values('$name','$email','$mobile','$address','$pass',current_timestamp())";
                $iquery = mysqli_query($con, $insertquery);
                  if($iquery){
                             ?>
                               <script>
                                     alert("Accont Created Successfully");
                                     location.replace('login.php');
                                </script>
                            <?php
                        }else{
                            ?>
                                  <script>
                                      alert("Denied Process");
                                      location.replace('register.php');
                                    </script>

                            <?php

                    }
                }else{
                        ?>
                          <script>
                               alert("Password do not match");
                               location.replace('register.php');
                            </script>

                        <?php
                
                    }
                }
    }
    

   

?>