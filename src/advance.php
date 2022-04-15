<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Given below is an multi-dimensional array</h1>
    <ol>
        <li> List all products in this format: <br>
            <p>Category Subcategory ID Name Brand <br>
                Electronics Television PR001 MAX-001 Samsung</p>
        </li>
        <li>List all products in Mobile subcategory in same format as in point 1.</li>
        <li> List all products with their id, name, subcategory and category with brand name = "Samsung" like this:
            <p>Product ID: PR001 <br>
                Product Name: MAX-001 <br>
                Subcategory: Television <br>
                Category: Electronics <br>
            </p>
        </li>
        <li>Delete product with id = PR003.</li>
        <li>Update product name = "BIG-555" with id = PR002.</li>
    </ol>
    <?php
    $products = array(
        "Electronics" => array(
            "Television" => array(
                array(
                    "id" => "PR001",
                    "name" => "MAX-001",
                    "brand" => "Samsung"
                ),
                array(
                    "id" => "PR002",
                    "name" => "BIG-301",
                    "brand" => "Bravia"
                ),
                array(
                    "id" => "PR003",
                    "name" => "APL-02",
                    "brand" => "Apple"
                )
            ),
            "Mobile" => array(
                array(
                    "id" => "PR004",
                    "name" => "GT-1980",
                    "brand" => "Samsung"
                ),
                array(
                    "id" => "PR005",
                    "name" => "IG-5467",
                    "brand" => "Motorola"
                ),
                array(
                    "id" => "PR006",
                    "name" => "IP-8930",
                    "brand" => "Apple"
                )
            )
        ),
        "Jewelry" => array(
            "Earrings" => array(
                array(
                    "id" => "PR007",
                    "name" => "ER-001",
                    "brand" => "Chopard"
                ),
                array(
                    "id" => "PR008",
                    "name" => "ER-002",
                    "brand" => "Mikimoto"
                ),
                array(
                    "id" => "PR009",
                    "name" => "ER-003",
                    "brand" => "Bvlgari"
                )
            ),
            "Necklaces" => array(
                array(
                    "id" => "PR010",
                    "name" => "NK-001",
                    "brand" => "Piaget"
                ),
                array(
                    "id" => "PR011",
                    "name" => "NK-002",
                    "brand" => "Graff"
                ),
                array(
                    "id" => "PR012",
                    "name" => "NK-003",
                    "brand" => "Tiffany"
                )
            )
        )
    );

    echo " <table border='1px'>
    <tr>
        <th>Category</th>
        <th>Subcategory</th>
        <th>ID</th>
        <th>Name</th>
        <th>Brand</th>
    </tr>";
    foreach ($products as $key => $category) {
        foreach ($category as $key1 => $subcategory) {
            foreach ($subcategory as $key2 => $value) {
                    echo "   <tr>
                    <td>$key</td>
                    <td>$key1</td>
                    <td>$value[id]</td>
                    <td>$value[name]</td>
                    <td>$value[brand]</td>
                </tr>";
            }
        }
    };
echo "</table>";
  
    foreach ($products as $key => $category) {
        foreach ($category as $key1 => $subcategory) {
            foreach ($subcategory as $key2 => $value) {
                if ($value["id"] == "PR003") {
                    unset($value);
                } elseif ($value["id"] == "PR002") {
                    $value["name"] = "BIG-555";
                }
                echo "<p> Product ID: $value[id] <br> Product Name: $value[name] <br>Product Brand: $value[brand] <br> Subcategory:$key1 <br> Category: $key</p>";
            }
        }
    };
    ?>
</body>

</html>