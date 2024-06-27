<?php

$id = $_GET['id'];

if (
    isset($_SESSION['cart'][$id])
) {
    $_SESSION['cart'][$id]++;
} else {
    $_SESSION['cart'][$id] = 1;
}

//header('Location: index.php?action=cart');
?>

<script>

    $(document).ready(

        function(){

            window.location.href = 'index.php?action=cart';

        }

    );

</script>


