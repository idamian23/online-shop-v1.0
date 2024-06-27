<div>

    <div>

        <h1>Checkout</h1>

    </div>

    <div>

        <?php

        if (
            count($_SESSION['cart'])
        ) {

            //

            $total = 0.0;

            echo '<table class="table table-bordered table-striped">';

            echo '<thead>';

            echo '<tr>';

            echo '<th>Product</th>';

            echo '<th>Quantity</th>';

            echo '<th>Price per unit</th>';

            echo '<th>Price per line</th>';

            echo '</tr>';

            echo '</thead>';

            echo '<tbody>';

            foreach ($_SESSION['cart'] as $product_id => $quantity) {

                //

                echo '<tr>';

                echo '<td>' . ($product_arr[$product_id]['name']) . '</td>';

                echo '<td>' . ($quantity) . '</td>';

                echo '<td>' . ($product_arr[$product_id]['price']) . '</td>';

                $price_per_line = $quantity * $product_arr[$product_id]['price'];

                echo '<td>' . ($price_per_line) . '</td>';

                $total +=  $price_per_line;

                echo '</tr>';

                //

            }

            echo '<tr>';

            echo '<td colspan="4"><b>Total ' . ($total) . ' RON</b></td>';

            echo '</tr>';

            echo '</tbody>';

            echo '</table>';

            ?>

            <div>

                <h2>Metoda de plata</h2>

                <div>

                    <form action="index.php?action=checkout-submit" method="post">

                        <div>

                            <div>

                                <ul>

                                    <li>
                                        <input type="radio" name="payment_type" value="1" required /> ramburs
                                    </li>

                                    <li>

                                        <input type="radio" name="payment_type" value="2" required /> plata online cu cardul

                                    </li>

                                </ul>

                            </div>

                            <div>

                                <div>

                                    <div>
                                        First Name:
                                    </div>

                                    <div>
                                        <input type="text" name="first_name" required />
                                    </div>

                                </div>

                                <div>

                                    <div>
                                        Last Name:
                                    </div>

                                    <div>
                                        <input type="text" name="last_name" required />
                                    </div>

                                </div>

                                <div>

                                    <div>
                                        Email:
                                    </div>

                                    <div>
                                        <input type="text" name="email" required />
                                    </div>

                                </div>

                                <div>

                                    <div>
                                        Phone:
                                    </div>

                                    <div>
                                        <input type="text" name="phone" required />
                                    </div>

                                </div>

                                <div>

                                    <div>
                                        Delivery address:
                                    </div>

                                    <div>
                                        <input type="text" name="delivery_address" required />
                                    </div>

                                </div>

                            </div>

                        </div>

                        <br />

                        <div>

                            <input class="btn btn-primary" type="submit" value="CHECKOUT" />

                        </div>

                    </form>

                </div>

            </div>

            <?php

            //

        } else {
            echo 'Your shopping cart is empty.';
        }

        ?>

    </div>

</div>
