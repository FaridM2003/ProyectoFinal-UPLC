<?php
// Datos simulados para usuarios y contraseñas con hash (normalmente usarías una base de datos).
$users = [
    'admin' => hash('sha256', 'password123'),
    'user1' => hash('sha256', 'userpassword')
];

// Obtener los datos JSON del POST
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);

$username = $input['username'];
$password = $input['password'];

// Validación de credenciales
if (isset($users[$username]) && $users[$username] === hash('sha256', $password)) {
    // Login exitoso
    echo json_encode(["success" => true]);
} else {
    // Credenciales incorrectas
    echo json_encode(["success" => false]);
}
?>
