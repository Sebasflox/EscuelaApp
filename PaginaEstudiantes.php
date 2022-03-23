
<?php include "Shared/header.php" ;
        $bd = array(
            array("id" => 123, "Nombre" => "Rolando", "Apellido1" => "Luz", "Apellido2" => "Valverde","Grado" => "Primero", "Prof" => "Marielos"),
            array("id" => 456, "Nombre" => "Gerardo", "Apellido1" => "Sol", "Apellido2" => "Rojas","Grado" => "Segundo", "Prof" => "Ricardo"),
            array("id" => 789, "Nombre" => "Andre", "Apellido1" => "Lira", "Apellido2" => "Blanco","Grado" => "Primero", "Prof" => "Marielos"),
            array("id" => 101, "Nombre" => "Josh", "Apellido1" => "Hernandez", "Apellido2" => "Guzman","Grado" => "Tercero", "Prof" => "Ana")
        );
        ?>


<main>
    <h1>Pagina Estudiantes</h1>

    <form action="" method= "POST">

    <select name="Escolaridad" method="Seleccion" class="form-select" aria-label="Default select example">
        <option selected>Seleccione un grado</option>
        <option value="Primero">Primero</option>
        <option value="Segundo">Segundo</option>
        <option value="Tercero">Tercero</option>
        <option value="Cuarto">Cuarto</option>

        

        <input type="submit" value="Seleccionar">

    </select>

    </form>
</main>

<?php 

if ($_POST){

    if ($_POST['Escolaridad'] != 'Primero' && $_POST['Escolaridad'] != 'Segundo' && $_POST['Escolaridad'] != 'Tercero' && $_POST['Escolaridad'] != 'Cuarto' ){
        header("Location: 404.html");
    } else{
        $cat = $_POST['Escolaridad'];
        echo '
        <main>
            <h1>Base datos estudiantes: </h1>
            <table>
                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido1</th>
                        <th>Apellido2</th>
                        <th>Grado</th>
                        <th>Maestr@</th>
                    </tr>
                </thead>
                ';
                //filtrar
                $val=true;
                foreach ($bd as $i => $v) {
                    if (strcmp($cat, $v["Grado"]) == 0 || strcmp($cat, "Todos") == 0) {
                        echo generarFila($v);
                        $val=false;
                    }
                };

                if($val){
                    echo '<p>No hay registros de estudiantes</p>';
                }
                echo'
            </table>
        </main> ';
         include "shared/footer.php";
    }

}

function generarFila($v){
    return "<tr>
                <td>$v[id]</td>
                <td>$v[Nombre]</td>
                <td>$v[Apellido1]</td>
                <td>$v[Apellido2]</td>
                <td>$v[Grado]</td>
                <td>$v[Prof]</td>
            </tr>";
}

?>

