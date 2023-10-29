<?php

include 'components/connect.php';
require_once 'controller/categoryController.php';
session_start();

/* This code is checking if the `user_id` is set in the `SESSION` superglobal. If it is set, the value is assigned to the variable. If it is not set, an empty string is assigned */
if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}
$category = $_GET['category'];

/* The line ` = new CategoryController(new CategoryModel(), new CategoryView());` is
creating a new instance of the `CategoryController` class. It is passing two arguments to the
constructor of the `CategoryController` class: an instance of the `CategoryModel` class and an
instance of the `CategoryView` class. The `CategoryModel` class is instantiated with the ``
variable, which is a database connection object. The `CategoryView` class does not require any
arguments. */

$controller = new CategoryController(new CategoryModel($conn), new CategoryView());

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>category</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

<?php include 'components/user_header.php'; ?>
<section class="products">
    <div class="box-container">
    <?php
       /* The code  is calling the `displayProductsByCategory()` method of the controller object. This method is responsible for retrieving and displaying the products that belong to the specified category. The controller variable is passed as an argument to the method to specify which category to display. */
            $controller->displayProductsByCategory($category);
        ?>
        
    </div>
</section>

<!-- section endpoints -->

<!-- aos js cdn -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>


<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>
