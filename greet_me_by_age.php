<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greetings Form</title>
</head>
<body>
    <?php
    if (isset($_GET['age'])) {
        $age = $_GET['age'];

        if ($age < 12) {
            $message = "Hello kiddo!";
        } elseif ($age >= 12 && $age < 18) {
            $message = "Hello Teenager!";
        } elseif ($age >= 18 && $age < 115) {
            $message = "Hello Adult!";
        } elseif ($age >= 115) {
            $message = "Wow! Still alive? Are you a robot, like me? Can I hug you?";
        }
    } else {
        $message = ""; 
    }
    ?>

    <h2>Greetings Form</h2>
    <form method="get" action="greet.php">
        <label for="age">Please type your age:</label>
        <input type="text" name="age" id="age">
        <input type="submit" name="submit" value="Greet me now">
    </form>

    <?php
    if (!empty($message)) {
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>
