
<?php

/* The CategoryView class is responsible for rendering product information and displaying a message when no products have been added yet. */
class CategoryView {
    public function renderProduct($product) {
?>
 

    <form action="" method="post" class="box"  data-aos="zoom-in-down" data-aos-duration="1000">

         <input type="hidden" name="pid" value="<?= $product['id']; ?>">
         <input type="hidden" name="name" value="<?= $product['name']; ?>">
         <input type="hidden" name="price" value="<?= $product['price']; ?>">
         <input type="hidden" name="image" value="<?= $product['image']; ?>">

         <a href="quick_view.php?pid=<?= $product['id']; ?>" class="fas fa-eye"></a>
         <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>

         <img src="uploaded_img/<?= $product['image']; ?>" alt="">
         <span class="cat"><?= $product['category']; ?></span>
         <div class="name"><?= $product['name']; ?></div>

        <div class="flex">
            <div class="price"><?= $product['price']; ?>/-</div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
        </div>
    </form>

    <?php
    }

    /**
     * The function "showEmptyProductsMessage" displays a message indicating that no products have been added yet.
     */
    public function showEmptyProductsMessage() {
        echo '<p class="empty">no products added yet!</p>';
    }
}

?>
