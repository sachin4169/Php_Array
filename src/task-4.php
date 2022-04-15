<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Write a PHP script to delete a specific value from an array using array_filter() function.</h1>
    <?php 
    $arr = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
    echo "<p>Before deleting</p>";
    foreach ($arr as $key => $value) {
        echo "$key => $value ,";
    }
    unset($arr["c3"]);
    echo "<p>after deleting c3</p>";
    foreach ($arr as $key => $value) {
        echo "$key => $value ,";
    }
    ?>
</body>
</html>