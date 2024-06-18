<?php
if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['english'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $english = $_GET['english'];

    if ($age < 12) {
        if ($english == 'yes') {
            if ($gender == 'Female') {
                echo "Hello Girl!";
            } else {
                echo "Hello boy!";
            }
        } else {
            if ($gender == 'Female') {
                echo "Aloha Girl!";
            } else {
                echo "Aloha boy!";
            }
        }
    } elseif ($age >= 12 && $age < 18) {
        if ($english == 'yes') {
            if ($gender == 'Female') {
                echo "Hello Miss Teen!";
            } else {
                echo "Hello mister Teen!";
            }
        } else {
            if ($gender == 'Female') {
                echo "Aloha Miss Teen!";
            } else {
                echo "Aloha mister Teen!";
            }
        }
    } elseif ($age >= 18 && $age < 115) {
        if ($english == 'yes') {
            if ($gender == 'Female') {
                echo "Hello Madam!";
            } else {
                echo "Hello Sir!";
            }
        } else {
            if ($gender == 'Female') {
                echo "Aloha Madam!";
            } else {
                echo "Aloha Sir!";
            }
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
    <label>Do you speak English?</label>
    <input type="radio" name="english" value="yes"> Yes
    <input type="radio" name="english" value="no"> No
    <br>
    <input type="submit" name="submit" value="Greet me now">
</form>
