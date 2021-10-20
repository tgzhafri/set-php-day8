<html>

<head>
    <Title>Question 1</Title>
    <style>
        .container {
            width: 700px;
            height: auto;
            border: 2px solid black;
            margin: 0 auto;
            padding: 1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Day 26, PHP Day 8 - Daily Assignments</h1>

        <h2>Question 1</h2>
        Star Arrangement List :
        <form action="question1.php" formtarget="_blank" method="post">
            <select name="starType">
                <option value="select">Select</option>
                <option value="halfStars" type="submit">Half Stars</option>
                <option value="fullStars" type="submit">Full Stars</option>
            </select>
            <input type="submit" name="submit">
        </form>
        <?php

        
        $starType = $_POST['starType'];

        if ($starType == 'halfStars') {
            echo "half-star <br>";
            halfStars();
        } elseif ($starType == 'fullStars') {
            echo "full-star <br>";
            fullStars();
        } else {
            echo "Please select one of the options!";
        }

        function halfStars()
        {
            $n = 5;
            for ($i = 0; $i <= $n; $i++) {
                for ($j = 0; $j < $i; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
        }

        function fullStars()
        {
            $n = 5;
            for ($i = 0; $i <= $n; $i++) {
                echo " ";
                for ($j = 0; $j < $i; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
            for ($i = 0; $i <= $n; $i++) {
                echo " ";
                for ($j = $i; $j < $n; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
        }

        ?>
    </div>

</body>

</html>