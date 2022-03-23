<?php session_start() ?>

<?php echo $_SERVER["PHP_SELF"]?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EscuelaApp</title>
    <link type="image/png" sizes="16x16" rel="icon" href="favicon.png">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/headerStyles.css">
    <link rel="stylesheet" href="css/footerStyles.css">
    <link rel="stylesheet" href="css/header2.css">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

</head>

<body>

    <header class="header-fixed">

        <div class="header-limiter">

            <h1><a href="index.php">Escuela<span>APP</span></a></h1>



            <nav id="menu">
                <ul>
                    <li><a <?php if(strcmp($_SERVER["PHP_SELF"],"/rentapp/index.php")==0) echo "class='active'"  ?> href="#">Principal</a></li>
                    <li><a href="#">Grado</a>
                        <ul>
                            <li><a href="resultados.php?cat=Sedan">Tercero</a></li>
                            <li><a href="resultados.php?cat=4x4">Segundo</a></li>
                            <li><a href="resultados.php?cat=Primero">Primero</a></li>
                        </ul>
                    </li>

                    <?php if (
                        isset($_SESSION["login"]) &&
                        strcmp($_SESSION["rol"], "admin") == 0
                    ) { ?>
                        <li><a href="#">Administración</a>
                            <ul>
                                <li><a href="crudVehiculo.php">Catalogo de Vehículos</a></li>
                                <li><a href="#">Catalogo de Promociones</a></li>
                            </ul>
                        </li>
                    <?php } ?>

                    <?php if (!isset($_SESSION["login"])) { ?>
                        <li><a href="login.php">Iniciar Sesión</a></li>
                    <?php } ?>

                    <?php if (isset($_SESSION["login"])) { ?>
                        <li><a href="logout.php">Salir</a></li>
                    <?php } ?>
                    <?php if (isset($_SESSION["login"])) { ?>
                        <li><a id="linkUsr" href=""><img class="imgUsr" src="img/usuario.png" alt=""></a></li>
                    <?php } ?>
                </ul>

            </nav>



        </div>

    </header>