<?php
include 'db.php';
session_start();
session_unset();

if(session_destroy()){
     ?>
          <script>
             alert("Logout Successfully");
             location.replace('login.php');
          </script>

     <?php
   }
?>