<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Write a PHP program to filter out some elements with certain key-names.</h1>

    <p>Test Data :1st array : ('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', c4 => 'Black')</p>
    <p> 2nd array : ('c2', 'c4')</p>
    <p> :Array([c1] => Red,[c3] => White)</p>
    <?php 
    $arr = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
    $arr1 = array('c2', 'c4');

    foreach ($arr1 as $key) {
        foreach ($arr as $key1 => $value) {
            if($key == $key1){
                echo "$key => $value  ";
            }
        }
    }

    // print_r(array_filter(
    //     $arr1,
    //     function ($key) use ($arr) {
    //         return in_array($key, $arr);
    //     },
    //     ARRAY_FILTER_USE_KEY
    // ));
    // foreach ($filtered as $value) {
    //     echo $value;
    // }
    
    ?>
</body>

</html>