<?php
require_once 'model/categoryModel.php';
require_once 'view/categoryView.php';

/* The CategoryController class is responsible for displaying products by category and handling the logic for retrieving and rendering the products. */
class CategoryController {
    private $model;
    private $view;

    /**
     * The function is a constructor that assigns values to the model and view properties of an object.
     * 
     * @param model The model parameter is typically an object that represents the data and business
     * logic of the application. It is responsible for retrieving and manipulating data, as well as
     * performing any necessary calculations or operations.
     * @param view The "view" parameter is typically an object that represents the user interface or
     * the presentation layer of the application. It is responsible for rendering the data from the
     * model and displaying it to the user.
     */
    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

   /**
    * The function displays products by category and shows an empty products message if there are no
    * products in that category.
    * 
    * @param category The category parameter is a string that represents the category of products that
    * we want to display.
    */
    
    public function displayProductsByCategory($category) {
        $products = $this->model->getProductsByCategory($category);

        if (!empty($products)) {
            foreach ($products as $product) {
                $this->view->renderProduct($product);
            }
        } else {
            $this->view->showEmptyProductsMessage();
        }
    }
}
?>
