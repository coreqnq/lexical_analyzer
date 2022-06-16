<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form method="post">
            <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="inputtext" name="inputtext" placeholder="asdas">
                <label for="floatingInput">Input</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>

    </main>
    <div class="container">
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Token</th>
                        <th scope="col">Atributo</th>
                        <th scope="col">Posicion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    require('team/garcia.php');
                    require('team/aquino.php');
                    require('team/PedroDavid.php');
                    require('team/gutierrez.php');
                    require('team/pabel.php');

                    if (isset($_POST['inputtext'])) {

                     echo  '<div class="container-fluid p-5 bg-primary text-white text-center">
                            <h1> '.$_POST['inputtext'].'</h1>
                            </div>';

                        $simbols = sybomls($_POST['inputtext']);
                        $class = classAquino($_POST['inputtext']);
                        $identicador = Identificador($_POST['inputtext']);
                        $operators = searchOperators($_POST['inputtext']);
                        $typeCharacter = searchOperators($_POST['inputtext']);


                        if (count($simbols)) {
                            foreach ($simbols as $item) {
                                echo '<tr>';
                                echo '<td>' . $item[0] . '</td>
                                    <td>' . $item[1] . '</td>
                                    <td>' . $item[2] . '</td>';
                                echo '</tr>';
                            }
                        }

                        if (count($class)) {
                            foreach ($class as $item) {
                                echo '<tr>';
                                echo '<th>' . $item[0] . '</th>
                                      <td>' . $item[1] . '</td>
                                      <td>' . $item[2] . '</td>';
                                echo '</tr>';
                            }
                        }

                        if (count($operators)) {
                            foreach ($operators as $item) {
                                echo '<tr>';
                                echo '<td>' . $item[0] . '</td>';
                                echo '<td>' . $item[1] . '</td>';
                                echo '<td>' . $item[2] . '</td>';
                                echo '</tr>';
                            }
                        }

                        /* if (strlen($identicador)>0) { */

                        if (count($identicador)) {

                            /*  echo ' <td colspan="3">' . $identicador . '</td>'; */
                            foreach ($identicador as $item) {
                                echo '<tr>';
                                echo '<td>' . $item[0] . '</td>
                                     <td>' . $item[1] . '</td>
                                     <td>' . $item[2] . '</td>';
                                echo '</tr>';
                            }

                        }







                    }

                    ?>


                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
