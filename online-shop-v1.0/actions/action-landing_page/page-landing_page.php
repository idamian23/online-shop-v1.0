<style>
    .product-container {

        border-left: 1px solid #00f;

        .product_name {
            font-weight: bold;
        }

    }

    .product_name a {
        font-style: italic;
    }
</style>

<div class="p-2" id="landing-page-container">

    <?php

    //

    foreach ($product_arr as $product_id => $product) {

        //

        echo '<div id="product-' . ($product_id) . '" class="product-container p-2 m-2">';

        if (true) {

            //

            echo '<div class="product_name p-2">';


            echo '<a href="index.php?action=product&id=' . $product_id . '">';
            echo $product['name'];
            echo '</a>';


            echo '</div>';

            echo '<div class="product_price p-2">';

            echo $product['price'] . ' RON';

            echo '</div>';

            //

        }

        echo '</div>';

        //

    }

    //

    ?>

</div>
