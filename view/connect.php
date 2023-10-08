/* The code you provided is establishing a connection to a MySQL database using PHP's PDO (PHP Data
Objects) extension. */

<?php

$db_name = 'mysql:host=localhost;dbname=medimart_db';
$user_name = 'root';
$user_password = '';

$conn = new PDO($db_name, $user_name, $user_password);

?>