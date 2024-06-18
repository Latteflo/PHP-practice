<?php
if (isset($_GET['age']) && isset($_GET['gender'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];

    if ($age < 12) {
        if ($gender == 'Female') {
            echo "Hello Girl!";
        } else {
            echo "Hello boy!";
        }
    } elseif ($age >= 12 && $age < 18) {
        if ($gender == 'Female') {
            echo "Hello Miss Teen!";
        } else {
            echo "Hello mister Teen!";
        }
    } elseif ($age >= 18 && $age < 115) {
        if ($gender == 'Female') {
            echo "Hello Madam!";
        } else {
            echo "Hello Sir!";
        }
    } elseif ($age >= 115) {
        echo "Wow! Still alive? Are you a robot, like me? Can I hug you?";
    }
}
?>
<form method="get" action="">
    <label for="age">Please type your age:</label>
    <input type="text" name="age">
    <br>
    <label>Man or Woman:</label>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br>
    <input type="submit" name="submit" value="Greet me now">
</form>