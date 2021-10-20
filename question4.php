<html>

<head>
    <Title>Question 4</Title>
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

        <h2>Question 4</h2>

        <form action="question4.php" formtarget="_blank" method="post">
            <select name="question">
                <option value="select">Select</option>
                <option value="name">What is your name?</option>
                <option value="hobby">What is your hobby?</option>
                <option value="club">What is your favourite club?</option>
                <input type="text" name="input">
            </select>
            <input type="submit" name="submit">
        </form>

        <?php
        $question = $_POST['question'];
        $output = $_POST['input'];

        if ($question == "name") {
            name();
        } elseif ($question == 'hobby') {
            hobby();
        } elseif ($question == 'club') {
            club();
        } elseif ($question == 'select') {
            echo "Please select and answer any of the question";
        }

        function name()
        {
            global $output;
            $name = $output;
            echo "My name is " . $name;
        }
        function hobby()
        {
            global $output;
            $hobby = $output;
            echo "My hobby is " . $hobby;
        }
        function club()
        {
            global $output;
            $club = $output;
            echo "My favourite club is " . $club;
        }

        ?>
    </div>

</body>

</html>