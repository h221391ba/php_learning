<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo "My first php!!" ?>
    </title>
</head>
<body>
<?php
//http://localhost/20210615/01_test.php?name=reverie
$name = $_GET["name"];      //?name=reverie
$welcome = "Hello World!!";
//        $name = "amy";
?>
<!--    <h1>-->
<!--        --><?php //echo "Hello World!!"; ?>
<!--    </h1>-->
<h1>
    <?= $welcome; ?>, <?= $name; ?>.
</h1>
<h1>
    <?= $welcome . "," . $name . "." ?>
</h1>
</body>
</html>
