<html>

<head>
    <Title>Question 2</Title>
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

        <h2>Question 2</h2>
        Fill in the forms.
        <form action="question2.php" formtarget="_blank" method="post">
            Name: <br>
            <input type="text" name="name"><br>
            IC number: <br>
            <input type="text" name="ic"><br>
            Phone Number: <br>
            <input type="text" name="phoneNum"><br>
            <br>
            <input type="submit" name="submit">
        </form>
        <?php
        $name = $ic = $phoneNum = "";

        // function test_input($data)
        // {
        //     $data = trim($data);
        //     $data = stripslashes($data);
        //     $data = htmlspecialchars($data);
        //     return $data;
        // }

        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     $name = test_input($_POST['name']);
        //     $ic = test_input($_POST['ic']);
        //     $phoneNum = test_input($_POST['phoneNum']);
        // }
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     $name = ($_POST['name']);
        //     $ic = ($_POST['ic']);
        //     $phoneNum = ($_POST['phoneNum']);
        // }

        echo "<h2> Your Input are as follows: </h2>";
        
        function getName() {
            // global $name;
            $name = ($_POST['name']);
            echo $name."<br>";
            
        }
        function getIC () {
            $ic = ($_POST['ic']);
            echo $ic."<br>";
        }
        function getMobile () {
            $phoneNum = ($_POST['phoneNum']);
            echo $phoneNum."<br>";
        }
        function displayInfo () {
            getName();
            getIC();
            getMobile();
        }
        displayInfo();

        ?>
    </div>

</body>

</html>