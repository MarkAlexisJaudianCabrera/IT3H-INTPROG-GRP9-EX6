<?php
    if(isset($_POST['btnHome'])){
        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ex6-styles.css">
</head>
<body>
    <div class="excer-6-styles">
        <h4>This is the Excercise 6</h4>
        <form action="index.php" method="POST">
            <h3>Return to index:</h3>
            <button name="btnHome" value="Click!" class="btn-styles">Click Me!</button>
        </form>
    </div>
</body>
</html>