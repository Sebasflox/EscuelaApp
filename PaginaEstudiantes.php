<?php include "Shared/header.php" ?>

<?php 

    if (!empty($_Seleccion)){

        $dato = $_Seleccion["1"];

        if (strcmp($dato, "1") == 0){
            header("Location: resultados.php?cat=Primero");
        }
    }

?>

<main>
    <h1>Pagina Estudiantes</h1>

    <form action="" method= "POST">

    <select method="Seleccion" class="form-select" aria-label="Default select example">
        <option selected>Seleccione un grado</option>
        <option href="resultados.php?cat=Primero">Primero</option>
        <option name="2">Segundo</option>
        <option name="3">Tercero</option>
        

        <input type="submit" value="Seleccionar">
        <button onclick="index.php">Volver</button>

    </select>

    </form>

</main>