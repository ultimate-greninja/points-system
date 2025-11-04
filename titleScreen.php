<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (isset($_POST['register'])) {
         header("location:register.php");
         exit();
     } elseif (isset($_POST['login'])) {
         header("location:login.php");
         exit();
     }
 }
 ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A short description of the page">
    <title>RPG PLANNER</title>
    <link rel="stylesheet" href="css/mystyles.css">
</head>

<body>
    <h1>RPG PLANNER</h1>
    <form id = "choiceButtons" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <button type = "submit" id = "register" value="register">REGISTER</button>
        <button type = "submit" id = "login" value="login">LOG IN</button>
    </form>
    <script src="scripts/planner.js"></script>
</body>

</html>