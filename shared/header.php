

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EscuelaApp</title>

    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/headerStyles.css">
    <link rel="stylesheet" href="css/footerStyles.css">
    <link rel="stylesheet" href="css/header2.css">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

</head>

<body>

    <header class="header-fixed">

        <div class="header-limiter">

            <h1><a href="index.php">Escuela <span>App</span></a></h1>



            <nav id="menu">
                <ul>
                    <li><a <?php if(strcmp($_SERVER["PHP_SELF"],"/EscuelaApp/index.php")==0) echo "class='active'"  ?> href="#"></a></li>


                </ul>

            </nav>



        </div>

    </header>