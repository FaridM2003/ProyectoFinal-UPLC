<?php
    require_once("cabezera.php");
?>

<div class="main">
    <?php
        include  "./conexionDB.php";
        $sql = "SELECT alumno.matricula As matricula, alumno.nombre as nombre ,alumno.apellidos as apellidos,carrera.nombre as Carrera FROM Alumno,Carrera,Grupo where alumno.matricula = grupo.id_alumno and grupo.id_carrera = carrera.id ";
        $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<div class=base>        
            Matricula: " . $row["matricula"]. " - Nombre: " . $row["nombre"]. " " . $row["apellidos"]. "<br>".$row["Carrera"]."
            </div>";
  }
} else {
  echo "0 results";
}




$conn->close();
    ?>
</div>

<?php
    require_once("footer.php");
?>

