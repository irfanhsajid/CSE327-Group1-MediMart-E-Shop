<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $retypePassword=$_POST["retype_password"];
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $phone = $_POST["phone"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zipcode = $_POST["zipcode"];
    $country = $_POST["country"];
// User Name Validation
if (preg_match('/[^\w]/', $username)) {
    echo "Error: User Name cannot contain special characters or spaces";
    exit;
}

// Passwords  Validation
if ($password !== $retypePassword) {
    echo "Error: Passwords do not match!";
    exit;
}

// \Email Validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Error: Invalid email format";
    exit;
}

// Phone Validation
if (!preg_match('/^[0-9+]+$/', $phone)) {
    echo "Error: Phone number can only contain numbers and '+'";
    exit;
}

        // Zipcode Validation
        if (!ctype_digit($zipcode)) {
            echo "Error: Zipcode must be a number";
            exit;
        }
    
    if ($password!==$retypePassword) {
        echo "Error: Passwords do not match!";
    } else {
        $sql = "INSERT INTO users (username, email, password,retype_password, first_name, last_name, phone, street, city, state, zipcode, country)
            VALUES ('$username', '$email', '$password', '$retypePassword', '$firstName', '$lastName', '$phone', '$street', '$city', '$state', '$zipcode', '$country')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
    $conn->close();
}
?>
