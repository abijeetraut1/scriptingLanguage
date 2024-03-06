<!-- write a php script that uses a foreach loop to iterate over an associative array containing student names as keys and their corresponding grades as values -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab works 17 1. </title>
</head>

<body>
    <h1>17 a. rite a php script that uses a foreach loop to iterate over an associative array containing student names as keys and their corresponding grades as values</h1>
    <?php
        $array = [
            "name1" => "abijeet",
            "name2" => "kapil",
            "names3" => "mausam"
        ];

        foreach ($array as $key => $value) {
            echo "{$key} {$value} ";
        };
    ?>

    <h1>17 b. define a php function called "calculateCircleArea" that takes the radious of a circle as parameter and returns its area."</h1>
    <?php
        function findArea($radious){
            echo 2 * (22/7) * $radious;
        };
        
        findArea(12);
    ?>

</body>

</html>