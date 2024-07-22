<?php
        echo "<script>alert('log out')</script>";// put your code here
        session_start();
        session_unset();
        session_destroy();
        echo '<script>window.location.replace("login.php")</script>';
        session_destroy();
//        header("location: login.php");
        ?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    </body>
</html>
