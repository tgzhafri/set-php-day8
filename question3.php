<html>

<head>
    <Title>Question 3</Title>
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

        <h2>Question 3</h2>
        

        <?php
        $students = ['Kevin','Amir', 'Azizi', 'Amirul'];

        echo "List of students name are: ";
        foreach ($students as $ele) {
            echo $ele.', ';
        }
        echo "<br>Add new name <br>";
        array_push($students,"Arjun");
        foreach ($students as $ele) {
            echo $ele.', ';
        }
        ?>
    </div>

</body>

</html>