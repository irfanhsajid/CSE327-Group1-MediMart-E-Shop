<?php
function validatePassword($password) {
    // Check if the length is within 8-32 characters
    if (strlen($password) < 8 || strlen($password) > 32) {
        return "Password length must be between 8 and 32 characters.";
    }

    // Check if it contains at least one uppercase, one lowercase, and one numeric character
    if (!preg_match("/[A-Z]/", $password) || !preg_match("/[a-z]/", $password) || !preg_match("/[0-9]/", $password)) {
        return "Password must contain at least one uppercase letter, one lowercase letter, and one numeric character.";
    }

    // Check if it does not contain any special characters
    if (preg_match("/[^A-Za-z0-9]/", $password)) {
        return "Password cannot contain special characters.";
    }

    return "Password is valid.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Password Validator</title>
</head>
<body>
    <h1>Password Validator</h1>
    <form method="post">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        
        <input type="submit" value="Validate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST["password"];
        $validationResult = validatePassword($password);
        echo $validationResult;
    }
    ?>
</body>
</html>



<?php
function power($number, $degree) {
    $result = 1;
    for ($i = 1; $i <= $degree; $i++) {
        $result *= $number;
    }
    return $result;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Power Calculator</title>
</head>
<body>
    <h1>Power Calculator</h1>
    <form method="post">
        <label for="base">Base:</label>
        <input type="number" id="base" name="base" required><br>
        
        <label for="exponent">Exponent:</label>
        <input type="number" id="exponent" name="exponent" required><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST["base"];
        $exponent = $_POST["exponent"];
        $result = power($base, $exponent);
        echo "Result: " . $result;
    }
    ?>
</body>
</html>
