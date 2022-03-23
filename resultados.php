<?php
//base datos vehiculo

$bd = array(
    array("id" => 1, "Marca" => "Toyota", "Categoria" => "Primero"),
    array("id" => 1, "Marca" => "BMW", "Categoria" => "Sedan"),
    array("id" => 1, "Marca" => "Hyundai", "Categoria" => "Primero"),
    array("id" => 1, "Marca" => "Nissan", "Categoria" => "4x4")
);

//caturar paranetro por url
$cat = $_GET["cat"];
include "shared/header.php"
?>


<main>
    <h1>Vehiculos categoria: </h1>
    <table>
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Marca</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <?php
        //filtrar
        foreach ($bd as $i => $v) {
            if (strcmp($cat, $v["Categoria"]) == 0 || strcmp($cat, "Todos") == 0) {
                echo generarFila($v);
            }
        }
        ?>
    </table>
</main>

<?php 
    function generarFila($v){
        return "<tr>
                    <td>$v[id]</td>
                    <td>$v[Marca]</td>
                    <td>$v[Categoria]</td>
                </tr>";
    }
?>


<?php include "shared/footer.php" ?>