<?php

$id = $_GET['id'];

if (
    isset($_SESSION['cart'][$id])
) {

    //

    $_SESSION['cart'][$id]--;

    if (
        $_SESSION['cart'][$id] === 0
    ) {
        unset($_SESSION['cart'][$id]);
    }

    //

}

header('Location: index.php?action=cart');
