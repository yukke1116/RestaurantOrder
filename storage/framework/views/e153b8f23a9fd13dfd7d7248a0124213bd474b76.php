<?php
    $restaurant_name = $_POST["restaurant_name"];
    $password = $_POST["password"];

    if ($restaurant_name == $db_restaurant_name && $password == $db_password) {
        header("Location: top");
    } else {
        header("Location: login");
    }
?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/login&out/loginCheck.blade.php ENDPATH**/ ?>