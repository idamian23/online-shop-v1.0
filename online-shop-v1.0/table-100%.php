<table id="table-100-percent" style="border:0;">

    <tbody>

    <tr id="header">

        <td>

            <?php

            require_once 'menu.php';

            ?>

        </td>

    </tr>

    <tr id="content">

        <td style="vertical-align: top;">

            <div class="p-2">

                <?php

                require_once 'actions/action-' . $detected_action . '/page-' . $detected_action . '.php';

                ?>

            </div>

        </td>

    </tr>

    <tr id="footer">

        <td>

            <?php

            require_once 'footer.php';

            ?>

        </td>

    </tr>

    </tbody>

</table>
