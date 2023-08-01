<?php
// Conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$dbname = "escuela";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta a la base de datos
$sql = "SELECT alumno.matricula As matricula, alumno.Nombre as nombre ,alumno.Apellidos as apellidos,carrera.nombre as Carrera, alumno.fecha_nac as fecha_nac, alumno.direccion as direccion, alumno.telefono as telefono, alumno.fech_ini as registro FROM Alumno,Carrera,Grupo where alumno.matricula = grupo.id_alumno and grupo.id_carrera = carrera.id and alumno.matricula='$username' AND alumno.contrasenia='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    session_start();
    $_SESSION['matricula'] = $username;
    $row = $result->fetch_assoc();
    $_SESSION['nombre']       = $row["nombre"];
    $_SESSION['apellidos']    = $row['apellidos'];
    $_SESSION['date']         = $row['fecha_nac'];
    $_SESSION['Carrera']      = $row['Carrera'];
    $_SESSION['direccion']      = $row['direccion'];
    $_SESSION['telefono']      = $row['telefono'];
    $_SESSION['registro']      = $row['registro'];

    $nombre         = $row["nombre"];
    $apellidos      = $row['apellidos'];
    $date       = $row['fecha_nac'];
    $carrera        = $row['Carrera'];
    $direccion      = $row['direccion'];
    $telefono       = $row['telefono'];
    $registro       = $row['registro'];

    // Guardar el nombre de usuario y la contraseña en cookies
    setcookie("username", $username, time() + (86400 / 24),"/"); // 86400 = 1 día
    setcookie("password", $password, time() + (86400 / 24),"/");
    setcookie("apellidos", $apellidos, time() + (86400 / 24),"/");
    setcookie("nombre", $nombre, time() + (86400 / 24),"/");
    setcookie("date", $date, time() + (86400 / 24),"/");
    setcookie("Carrera", $carrera, time() + (86400 /24),'/');
    setcookie("direccion", $direccion, time() + (86400 /24),'/');
    setcookie("telefono", $telefono, time() + (86400 /24),'/');
    setcookie("registro", $registro, time() + (86400 /24),'/');
    header("Location: perfil-usuario.php"); // Redirigir a otra página
} else {
    // Inicio de sesión fallido
    header("Location: registrarse.php?error=1");
}

$conn->close();
?>