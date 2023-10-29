/* The code is simulating user roles and checking if the user has the role of 'admin' or 'customer'. If
the user has the role of 'admin', it will display "Welcome, Admin!". If the user has the role of
'customer', it will display "Welcome, Customer!". If the user does not have either of these roles,
it will display "Access denied. Admins and Customers only.". */
<?php
// Simulated user roles (you should replace these with your actual roles)
$userRoles = ['admin', 'customer', 'guest'];

if (in_array('admin', $userRoles)) {
    // Code for administrators
    echo "Welcome, Admin!";
} elseif (in_array('customer', $userRoles)) {
    // Code for customers
    echo "Welcome, Customer!";
} else {
    // Access denied for others
    echo "Access denied. Admins and Customers only.";
}
?>
