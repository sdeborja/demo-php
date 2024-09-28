<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
  
<?php 
      if (isset($_GET["success"])){
    ?>
   <p style="background-color: green; color:aliceblue;"><?php echo $_GET ["success"]?></p> 
   <?php 
      }
   ?>


  <?php 
      if (isset($_GET["error"])){
    ?>
  <p style="background-color: red; color:aliceblue;"><?php echo $_GET ["error"]?></p> 

  <?php 
      }
   ?>
  <form action ="output.php" method="POST">
    <label for "username">Username</label>
    <input type="text" name="username" id="username">

<div>
    <label for "email">Email</label>
    <input type="email" name="email" id="email">
</div>

<div>
    <label for "password">Password</label>
    <input type="password" name="password" id="password">
</div>

<div>
    <label for "password">Confirm password</label>
    <input type="password" name="confirmpassword" id="confirmpassword">
</div>
    
<div>
    <input type="submit" value="Register">
</div>


    </form>
</body>
</html>