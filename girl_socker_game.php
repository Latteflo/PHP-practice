<?php
if (isset($_GET['age']) && isset($_GET['gender'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];

    if ($age >= 21 && $age <= 40 && $gender == 'Female') {
        echo "Welcome to the team!";
    } else {
        echo "Sorry, you don't fit the criteria.";
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
    <input type="submit" name="submit" value="Check eligibility">
</form>
