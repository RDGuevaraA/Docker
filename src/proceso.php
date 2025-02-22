<?php

    session_start();
$user = 'Guevara';
$psw = 'GA242652';

    if(isset($_POST['send'])){


        $userName = $_POST['user'];
        $password = $_POST['contraseña'];

        
        if($userName == $user && $password == $psw){
            $_SESSION['log'] = "Guevara";
            header('location: login.php');
        }else{
         echo "<script>
            alert('DATOS INCORRECTOS VUELVA A INTENTARLO');
            setTimeout(function() {
                window.location.href = 'index.php';
            }, 0); 
          </script>";
        }


    }






?>