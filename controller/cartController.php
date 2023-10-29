

<?php
require_once 'model/cartModel.php';
require_once 'view/cartView.php';

class CartController {
    private $model;
    private $view;

 /**
  * The function is a constructor that initializes the model and view properties of an object.
  * 
  * @param model The model parameter is typically an object that represents the data and business logic
  * of the application. It is responsible for retrieving and manipulating data, as well as performing
  * any necessary calculations or validations.
  * @param view The "view" parameter is typically an object that represents the user interface or the
  * presentation layer of the application. It is responsible for displaying data to the user and
  * receiving user input.
  */
    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

  /**
   * The function addToCart checks if a user is logged in and adds a product to their cart if they are.
   * 
   * @param user_id The user ID of the user adding the item to the cart.
   * @param pid The parameter "pid" stands for product ID. It is used to identify a specific product in
   * the system.
   * @param name The name parameter represents the name of the product being added to the cart.
   * @param price The price parameter is the price of the product being added to the cart.
   * @param image The "image" parameter is the URL or file path of the image associated with the
   * product being added to the cart.
   * @param qty The parameter "qty" represents the quantity of the product that the user wants to add
   * to their cart.
   */
    public function addToCart($user_id, $pid, $name, $price, $image, $qty) {
        if($user_id == ''){
            header('location: login.php');
        } else {
            $message = $this->model->addToCart($user_id, $pid, $name, $price, $image, $qty);
            $this->view->showAddToCartMessage($message);
        }
    }
}
?>
