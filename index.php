<?php
    session_start();

    if (!isset($_SESSION['fruitList'])) {
        $_SESSION['fruitList'] = array("green", "tomates", "SDFSD", "SDASD");
    }

    if (isset($_POST['tomate'])) {
        array_push($_SESSION['fruitList'], $_POST['tomate']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plodovete</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>   
    <div class="container">
        <header>
            <h1 class="heading">plodove</h1>
            <h2 class="heading">fresh plodove</h2>
        </header>
        <ul class="fruitlist">
            <?php
                foreach ($_SESSION['fruitList'] as $fruit) {
                    echo "<li>$fruit</li>";
                }
            ?>
        </ul>


        <h3>Add your favorite movie</h3>

<form method="post"> 

    <label>Plodove</label>

    <input type="text" name="tomate">

    <input type="submit" value="Add">

    </div>
</body>
</html>
