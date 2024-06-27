<?php

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

//session_destroy();

require_once "env.php";

require_once "detect-action.php";

require_once 'db-product.php';


//asta la urma dupa ce ne asiguram ca avem tot ce ne trebuie

require_once "html.php";