<?php
    session_start();
    if(!isset($_SESSION['log'])) {
        header("Location: index.php"); 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

    <title>Document </title>
</head>
<body onload="lanzarConfeti()">

    <div class="login-container">
        <p>Bienvenido <?php echo $_SESSION['log']; ?></p>
        <a href="close.php"><button >Cerrar sesión</button></a> 

    </div>

    <script src="js.js"></script>
</body>
</html>