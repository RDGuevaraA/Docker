<?php
    session_start();
    if(isset($_SESSION['log']) ){
        header('location login.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="styleindex.css">
    
    <title>Document</title>
</head>
<body>
        <div class="login-container">
            <form action="proceso.php" method="post">
                <input required placeholder="User" name="user" type="text">
                <input required placeholder="Password"class="contra" name="contraseña" type="password">
                <div>
                    <span onclick="show()"><img src="ojo (2).png"></span>

                </div>
                <button name="send">Log In</button>
            </form>
        </div>

        <script src="js.js"></script>


        <div class="box">
            <div class="border-animation"></div>
        </div>
</body>
</html>