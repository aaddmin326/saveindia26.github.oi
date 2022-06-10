<?php
  $serve = "localhost";
  $username = "root";
  $password = "";
  $db ="major project";

  $con =mysqli_connect( $serve,$username,$password,$db);

  if($con){
      ?>
      <script>
        //  alert("Connection Successfully");
      </script>
      <?php
  }
  else{
    ?>
    <script>
          alert("No Connection");
      </script>

    <?php
  }
?>
