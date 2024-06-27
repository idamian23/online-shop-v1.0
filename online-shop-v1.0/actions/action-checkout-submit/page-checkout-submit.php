<?php

if (
    $_SERVER['REQUEST_METHOD'] !== 'POST'
) {
    die;
}

$_SESSION['cart'] = [];

?>

<div>

    <h1>Comanda a fost plasata.</h1>

</div>
