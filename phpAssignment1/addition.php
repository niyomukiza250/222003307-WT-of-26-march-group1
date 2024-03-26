<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition Form with PHP</title>
</head>
<body>
    <h2>Addition Form with PHP</h2>
    <form action="#" method="post">
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        
        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname"><br>
        
        <label for="firstNumber">First Number:</label><br>
        <input type="number" id="firstNumber" name="firstNumber"><br>
        
        <label for="secondNumber">Second Number:</label><br>
        <input type="number" id="secondNumber" name="secondNumber"><br>
        
        <input type="submit" name="submit" value="Add">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $firstNumber = $_POST['firstNumber'];
        $secondNumber = $_POST['secondNumber'];
        
        $fullName = $fname . " " . $lname;
        $sum = $firstNumber + $secondNumber;
        
        echo "<p>Hello $fullName</p>";
        echo "<p>The sum is $sum</p>";
    }
    ?>
</body>
</html>
