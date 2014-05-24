<?php
    //can only view this page if session is registered
    //if not, redirect to main page
    session_start();
    if(!session_is_registered(myusername)){
        header("location:main_login.php");
    }
?>

<html>
    <body>
        Login Successful
    </body>
</html>