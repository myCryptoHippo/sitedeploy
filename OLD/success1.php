<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Success!</title>
    <link rel="stylesheet" type="text/css" href="css/landing.css">
</head>
<body>
<div class="form" style="text-align:center; color:white;margin-top:30vh">
    <h1 style="color:white; font-size: 50px"><b>Success!</b></h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: dashboard/examples/portfolio.php" );
    endif;
    ?>
    </p>     
    <a href="login.php"><button class="button special" style="margin-top:5vh; font-size: 25px;" />Back</button></a>
</div>
</body>
</html>
