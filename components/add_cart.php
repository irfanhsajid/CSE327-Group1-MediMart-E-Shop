
<?php
require_once 'controller/cartController.php';

/* The line ` = new CartController(new CartModel(), new CartView());` is creating a new
instance of the `CartController` class. It is passing two arguments to the constructor of
`CartController`: an instance of `CartModel` and an instance of `CartView`. These arguments are used to initialize the `CartController` object with the necessary dependencies. */

$controller = new CartController(new CartModel($conn), new CartView());



/* The `if(isset(['add_to_cart']))` condition checks if the 'add_to_cart' key is set in the superglobal array. This typically indicates that a form has been submitted with the'add_to_cart' button clicked. */

if(isset($_POST['add_to_cart'])){
    $pid = $_POST['pid'];
    $pid = filter_var($pid, FILTER_SANITIZE_STRING);
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $price = $_POST['price'];
    $price = filter_var($price, FILTER_SANITIZE_STRING);
    $image = $_POST['image'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $qty = $_POST['qty'];
    $qty = filter_var($qty, FILTER_SANITIZE_STRING);

    $controller->addToCart($user_id, $pid, $name, $price, $image, $qty);
}


?>
