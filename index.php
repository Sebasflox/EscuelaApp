<?php include "Shared/header.php" ?>

<?php 
    
    if (!empty($_POST)){
        
        $usr = $_POST["user"];
        $pass = $_POST["pass"];

        if (strcmp($usr, "admin") == 0 && strcmp($pass, "ADmin") == 0){
            header("Location: PaginaEstudiantes.php");
        }
        else{
            $error = "1";
        }
    }

?>

<main>
    <h1>Iniciar Sesión</h1>

    <form action="" method= "POST"> 
        <div>
            <Label for="">Usuario</Label>
            <input type="text" name="user">
        </div>
        <div>
            <Label for="">Clave</Label>
            <input type="password" name="pass">
        </div>
        <div>
            <input type="submit" value="Iniciar Sesión">
        </div>
    </form>

    <?php if (isset($error)) { ?>

        <p>Usuario o contraseña incorrecta</p>

    <?php } ?>

</main>