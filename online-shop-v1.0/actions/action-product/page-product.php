<?php

$id = $_GET['id'];

?>

<div id="product-container">

    <div class="p-2">

        <h1>
            <?php

            echo $product_arr[$id]['name'];

            ?>
        </h1>

    </div>

    <div class="p-2">

        <?php

        echo $product_arr[$id]['price'];

        ?> RON

    </div>

    <div class="p-2">

        <a href="index.php?action=add2cart&id=<?php echo $id; ?>" class="btn btn-primary">
            Adauga produsul in cosul de cumparaturi
        </a>

    </div>

</div>

