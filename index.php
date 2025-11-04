<?php
 if ($_COOKIE["userLoggedIn"] ?? false) {
     header("location:titleScreen.php");
     exit();
 }
 include("inc/header.php");
?>

    <h1>HERE</h1>


<?php
 include("inc/footer.php");
 ?>