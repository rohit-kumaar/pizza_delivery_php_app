<?php

    if(isset($_POST['add-to-cart']))
    {
        $name     = $_POST['name'];
        $price    = $_POST['price'];
        $image    = $_POST['image'];
        $product_quantity = 1;
    
        $select_cart = mysqli_query($connection, "SELECT * FROM `add-to-cart` WHERE name = '$name'");
    
        if(mysqli_num_rows($select_cart) > 0)
        {
        $message[] = 'product already added to cart';
        }
        else
        {
        $insert_product = mysqli_query($connection, "INSERT INTO `add-to-cart`(image, name, price, quantity) VALUES('$image', '$name', '$price', '$product_quantity')");
        $message[] = 'product added to cart succesfully';
        }
    
    }

   
      
    

    

?>