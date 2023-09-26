<?php

session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lab Task 03 - Register Form</title>
</head>
<body>
   <h1>Registration Form</h1>
   <form class="form-container" action="register.php" method="post">
    <div class="input-field">
        <p>User Name</p>
        <input type="text" placeholder="your username here" name="username">
    </div>
    <div class="input-field">
        <p>Email</p>
        <input type="email" placeholder="put e-mail here" name="email">
    </div>
    <div class="input-field">
    <p>Password</p>
    <input type="password" placeholder="enter password" name="password">
</div>

<div class="input-field">
    <p>Retype Password</p>
    <input type="password" placeholder="retype password" name="retype_password">
</div>

<div class="input-field">
    <p>First Name</p>
    <input type="text" placeholder="enter first name" name="first_name">
</div>

<div class="input-field">
    <p>Last Name</p>
    <input type="text" placeholder="enter last name" name="last_name">
</div>

<div class="input-field">
    <p>Phone</p>
    <input type="tel" placeholder="enter phone number" name="phone">
</div>

<div class="input-field">
    <p>Street</p>
    <input type="text" placeholder="enter street" name="street">
</div>

<div class="input-field">
    <p>City</p>
    <input type="text" placeholder="enter city" name="city">
</div>

<div class="input-field">
    <p>State</p>
    <input type="text" placeholder="enter state" name="state">
</div>

<div class="input-field">
    <p>Zipcode</p>
    <input type="text" placeholder="enter zipcode" name="zipcode">
</div>

<div class="input-field">
    <p>Country</p>
    <input type="text" placeholder="enter country" name="country">
</div>
<div class="input-field">
    <p>Membership Level</p>
   <p>Free</p>
</div>
<button type="submit">Register</button>
   </form>
   
</body>
</html>


