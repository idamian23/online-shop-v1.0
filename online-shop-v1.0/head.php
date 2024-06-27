<head>

    <?php
    require_once('title.php');
    ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        body {
            background-color: #ddd;
            margin: 10px;
        }

        a {
            color: #E31C1A;
            text-decoration: none;
        }

        a:hover {
            color: #1D47DD;
        }

        table#table-100-percent {
            border-collapse: separate;
            height: 100%;
            width: 100%;

            & tbody {

                & tr {
                    background-color: #fff;

                    & td.first {
                        width: 100px;

                    }

                }

                tr#header {

                    height: 10px;

                    div#menu-header {
                        padding: 5px;
                    }

                }

                tr#footer {
                    height: 10px;

                    div#footer {
                        padding: 5px;
                    }

                }

            }

        }
    </style>

</head>