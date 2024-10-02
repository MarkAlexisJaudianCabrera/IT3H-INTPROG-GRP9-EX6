<?php
    if(isset($_POST['btnExer6'])){
        header("Location: grp9_cabreramarkalexisjaudian_ex6.php");
        exit;
    }
    
    $location = 'index.php';
    $errorLoc = '404.php';

    $checkFile = file_exists($location);

    if(true && empty($checkFile)){
        header('Location:'.$errorLoc);
        exit;
    }
?>
<!--
    Name: Mark Alexis Jaudian Cabrera
    Section: BSIT-IT3H-IRREGULAR
    Subject: INTPROG-IT3H
    Group: 9
    Exercise #6
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Cabrera - PHP Excercise 6</title>
        <link rel="stylesheet" href="ex3-styles.css">
        <link rel="stylesheet" href="ex4-styles.css">
        <link rel="stylesheet" href="ex5-styles.css">
        <link rel="stylesheet" href="ex6-styles.css">
        <link rel="stylesheet" href="global-styles.css">
    </head>
    <body>
        <div class="php-excercise-3">
                <?php include 'grp9_cabreramarkalexisjaudian_ex3.php'; ?>
        </div>
        <br><hr><br>
        <div class="php-excercise-4">
            <center>
                <?php include 'grp9_cabreramarkalexisjaudian_ex4.php'; ?>
            </center>
        </div>
        <br><hr><br>
        <div class="php-excercise-5">
            <center>
                <?php include 'grp9_cabreramarkalexisjaudian_ex5.php'; ?>
            </center>
        </div>
        <br><hr><br>
        <div class="php-excercise-6">
            <h2>EXERCISE #6</h2>
            <form action="index.php" method="POST">
                <button name="btnExer6" value="Click!" class="btn-styles">Click Me!</button>
            </form>
        </div>
    </body>
</html>