<?php
/* The CategoryModel class is a PHP class that interacts with a database connection to retrieve
products based on a specified category. */
class CategoryModel {
    private $conn;

    /**
     * The function is a constructor that assigns a value to the  property.
     * 
     * @param conn The conn parameter is a variable that represents a database connection. It is
     * typically an instance of a database connection class, such as PDO or mysqli. This parameter is
     * passed to the constructor of a class to establish a connection to the database and make it
     * available for use within the class.
     */
    public function __construct($conn) {
        $this->conn = $conn;
    }

    /**
     * The function retrieves all products from a database table based on a specified category.
     * 
     * @param category The category parameter is the category of products that you want to retrieve
     * from the database.
     * 
     * @return an array of products that belong to the specified category.
     */
    public function getProductsByCategory($category) {
        $select_products = $this->conn->prepare("SELECT * FROM `products` WHERE category = ?");
        $select_products->execute([$category]);

        return $select_products->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
