<?php
if (isset($_GET['grade'])) {
    $grade = $_GET['grade'];

    switch ($grade) {
        case ($grade < 4):
            echo "This work is really bad. What a dumb kid!";
            break;
        case ($grade >= 5 && $grade <= 9):
            echo "This is not sufficient. More studying is required.";
            break;
        case 10:
            echo "Barely enough!";
            break;
        case ($grade >= 11 && $grade <= 14):
            echo "Not bad!";
            break;
        case ($grade >= 15 && $grade <= 18):
            echo "Bravo, bravissimo!";
            break;
        case ($grade == 19 || $grade == 20):
            echo "Too good to be true: confront the cheater!";
            break;
        default:
            echo "Invalid grade entered.";
    }
}
?>
<form method="get" action="">
    <label for="grade">Enter your grade:</label>
    <input type="text" name="grade">
    <br>
    <input type="submit" name="submit" value="Grade me">
</form>
