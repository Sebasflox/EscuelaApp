<?php 
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location:login.php");
    }
    include "shared/header.php" 
    
?>

<main>
    <h1>Crud Vehiculo</h1>
</main>

<?php include "shared/footer.php" ?>