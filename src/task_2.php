<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73</h1>
    <p>Expected Output :</p>
    <ul>
        <li>Average Temperature is : 70.6 </li>
        <li> List of seven lowest temperatures : 60, 62, 63, 63, 64, </li>
        <li>List of seven highest temperatures : 76, 78, 79, 81, 85,</li>
    </ul>

    <?php
    $temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    $avg = array_sum($temp)/count($temp);
    echo "<p>Average Temperature is : $avg</p>";
    sort($temp);
    echo "<p>List of seven lowest temperatures :";
    for ($i=0; $i < 7; $i++) { 
        echo "$temp[$i], ";
    }
    echo "</p>";
    rsort($temp);
    echo "<p>List of seven lowest temperatures :";
    for ($i=0; $i < 7; $i++) { 
        echo "$temp[$i], ";
    }
    echo "</p>";
    ?>
</body>
</html>