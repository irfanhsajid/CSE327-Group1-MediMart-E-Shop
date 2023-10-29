
<?php
class CartModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    /* The `addToCart` function in the `CartModel` class is responsible for adding items to a user's cart.
    It takes in parameters such as the user ID, product ID, name, price, image, and quantity of the item
    being added. */

    public function addToCart($user_id, $pid, $name, $price, $image, $qty) {
        $check_cart_numbers = $this->conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");

     /* The line `->execute([, ]);` is executing a prepared statement
     to check if an item with the given name and user ID already exists in the cart. It binds the
     values of `` and `` to the prepared statement placeholders and then executes the
     statement. */
        $check_cart_numbers->execute([$name, $user_id]);

        /* The code block you provided is part of the `addToCart` function in the `CartModel` class. */

        if($check_cart_numbers->rowCount() > 0){
           return ' <p style="color:red; font-size:16px; text-align:center; margin-top: 10px;"> already added to cart! </p>';
        } else {
            $insert_cart = $this->conn->prepare("INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES(?,?,?,?,?,?)");
            $insert_cart->execute([$user_id, $pid, $name, $price, $qty, $image]);
           return '<p style="color:red; font-size:16px; text-align:center; margin-top: 10px;"> successfully added to cart! </p>'; 
        }
    }
}
?>
