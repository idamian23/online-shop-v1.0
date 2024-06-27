<div id="cart-container">

    <h1>Cosul de cumparaturi</h1>

    <div id="cart-table-container">
        <?php

        if (
            count($_SESSION['cart'])
        ) {

            //

            $total = 0.0;

            ?>

            <table border="0" class="table table-bordered table-striped">

                <thead>

                <tr>

                    <th>
                        Denumire
                    </th>

                    <th>
                        Cantitate
                    </th>

                    <th>
                        Pret
                    </th>

                    <th>
                        Pret Linie
                    </th>

                    <th>
                        actiuni
                    </th>

                </tr>

                </thead>

                <tbody>

                <?php

                foreach ($_SESSION['cart'] as $product_id  => $quantity) {

                    //

                    ?>

                    <tr>

                        <td>

                            <?php
                            echo $product_arr[$product_id]['name'];
                            ?>

                        </td>
                        <td>

                            <?php
                            echo $quantity;
                            ?>

                        </td>

                        <td>

                            <?php
                            echo $product_arr[$product_id]['price'];
                            ?>

                        </td>

                        <td>

                            <?php

                            $price_line = $quantity * $product_arr[$product_id]['price'];

                            $total +=  $price_line;

                            echo $price_line;

                            ?>

                        </td>

                        <td>

                            <a href="index.php?action=removeFromCart&id=<?php echo $product_id; ?>">-1</a>

                            &nbsp;|&nbsp;

                            <a href="index.php?action=add2cart&id=<?php echo $product_id; ?>">+1</a>

                        </td>

                    </tr>

                    <?php

                    //

                }

                //

                ?>

                <tr>

                    <td colspan="5">
                        <b>Total <?php echo $total; ?> RON</b>
                    </td>

                </tr>

                </tbody>

            </table>

            <br />

            <a class="btn btn-primary" href="index.php?action=checkout">Checkout</a>

            <?php

            //

        } else {
            echo 'Cosul de cumparaturi nu contine produse.';
        }

        ?>
    </div>

</div>
