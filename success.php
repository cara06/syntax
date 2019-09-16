<?php
session_start();
if(!isset($_SESSION['login_user'])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Success</title>

</head>

<body>

    <div id="container">
    <h2 style="text-align:center; color: blue">You are logged in Successfully <?php echo $_SESSION['login_user']?> !</h2>
  </div>

   <div >
<a href="index.php"><p style="text-transform:none;text-align:right; color: red"><<< Go back</p></a>
  </div>
</body>

</html>
