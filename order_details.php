/* The code you provided is a PHP script that displays the details of an order based on the order ID
passed in the URL. Here's a breakdown of what the code does: */
<?php
session_start();

// Check if the user is authenticated (logged in).
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or display an error message.
    header('Location: login.php');
    exit();
}

// Simulated order data (replace with actual database queries).
$orders = [
    1 => [
        'id' => 1,
        'order_date' => '2023-10-01',
        'status' => 'Processed',
        'items' => [
            ['name' => 'Product A', 'quantity' => 2, 'price' => 10.00],
            ['name' => 'Product B', 'quantity' => 1, 'price' => 20.00],
        ],
        'total_cost' => 40.00,
    ],
    2 => [
        'id' => 2,
        'order_date' => '2023-10-15',
        'status' => 'Shipped',
        'items' => [
            ['name' => 'Product C', 'quantity' => 3, 'price' => 15.00],
        ],
        'total_cost' => 45.00,
        'tracking_info' => 'Tracking number: 123456789',
    ],
];

// Get the selected order ID from the URL (e.g., order_details.php?order_id=1).
if (isset($_GET['order_id']) && isset($orders[$_GET['order_id']])) {
    $order = $orders[$_GET['order_id']];

    // Display order details.
    echo "<h1>Order Details for Order #{$order['id']}</h1>";
    echo "<p>Order Date: {$order['order_date']}</p>";
    echo "<p>Status: {$order['status']}</p>";

    // Display order items.
    echo "<h2>Order Items</h2>";
    echo "<ul>";
    foreach ($order['items'] as $item) {
        echo "<li>{$item['name']} (Quantity: {$item['quantity']}, Price: \${$item['price']})</li>";
    }
    echo "</ul>";

    echo "<p>Total Cost: \${$order['total_cost']}</p>";

    // Display order status.
    echo "<h2>Order Status</h2>";
    echo "<p>Status: {$order['status']}</p>";

    // Display tracking information if available (for shipped orders).
    if (isset($order['tracking_info'])) {
        echo "<h2>Tracking Information</h2>";
        echo "<p>{$order['tracking_info']}</p>";
    }
} else {
    echo "Invalid order selection.";
}

// Include footer or other necessary components.
?>
