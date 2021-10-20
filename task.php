<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
</head>

<body>
    <!-- <?php
            // $student = array('Fikri', 'Arwin', 'Zhafri', 'Chee Hoe');
            // $grades = array('A', 'B', 'C', 'D', 'E', 'F');
            // $subject = array('English', 'Maths');
            // $class = [$student, $grades, $subject];

            // echo $class[0][0] . '<br>';
            // echo $class[2][0] . '<br>';

            // for ($i = 0; $i < count($class[1]); $i++) {
            //     echo $class[1][$i];
            // }
            // echo '<br>';

            // echo "Student name is $student[0], for subject $subject[0] and all the possible grades are ";
            // foreach ($grades as $item) {
            //     echo " $item,";
            // };
            ?> -->



    <?php

    $items = ['soap', 'book', 'roti canai', 'tealive', 'pizza', 'nasi lemak', 'roti', 'ice cream'];
    $items2 = ['soap', 'book', 'roti canai', 'tealive', 'pizza', 'nasi lemak', 'roti', 'ice cream'];
    $customers = ['Kevin', 'Arwin'];

    echo 'list of items available in shops <br>';
    foreach ($items as $ele) {
        echo $ele . ', ';
    }

    echo '<br><br>';
    echo 'list of customers shopping in shops <br>';
    foreach ($customers as $ele) {
        echo $ele . ', ';
    }

    echo '<br><br>';



    echo '1st Scenario <br>';
    echo "$customers[0] buys ";
    function kevin()
    {
        global $items;
        $rand1 = array_rand($items, 3);
        for ($i = 0; $i < count($rand1); $i++) {
            echo $items[$rand1[$i]] . ", ";
        }
    }

    echo '<br><br>';
    echo '2nd Scenario <br>';
    echo "$customers[1] buys ";
    function arwin()
    {
        global $items2;
        $rand2 = array_rand($items2, 3);
        for ($i = 0; $i < count($rand2); $i++) {
            echo $items2[$rand2[$i]] . ", ";
            unset($items2[$rand2[$i]]);
        }

        echo '<br><br>';
        echo 'items left are <br>';
    
        $arr2 = array_values($items2);
        for ($i = 0; $i < count($arr2); $i++) {
            echo $arr2[$i] . '<br>';
        }
    
        $rand3 = array_rand($arr2, 3);
        echo '<br>';
        echo 'Arwin buys another 3 new items <br>';
    
        for ($j = 0; $j < count($rand3); $j++) {
            echo $arr2[$j] . ", ";
        }
    }




    ?>
</body>

</html>