<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Write a PHP script that inserts a new item in an array in any position</h1>
    <?php
    $arr = array(1,2,3,4,5);
    echo "original Array";
    foreach ($arr as $value) {
        echo "<li>$value</li>";
    }
    echo "After inserting '$' the array is :";
    // $newArr = array("$");
    array_splice( $arr, 3, 0, "$" );
    foreach ($arr as $value) {
        echo "<li>$value</li>";
    }
    ?>
</body>
</html>