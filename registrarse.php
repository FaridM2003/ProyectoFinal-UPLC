<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" href="img/icoUPLC.png">
	<meta charset="UTF-8">
	<title>UPLC</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 
	<link rel="stylesheet" href="estilos.css">
	

</head>  
<body>
 <form class="formulario" action="login.php" method="post">
    
    <h1>Inicio</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" id="username" name="username" placeholder="Matricula" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ''; ?>">
        <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input type="password" id="password" name="password" placeholder="Contraseña" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''; ?>">
        
         </div>
         <?php if (isset($_GET['error'])): ?>
        <p>Error: Matricula o contraseña incorrectos.</p>
    <?php endif; ?>
         <input type="submit" value="Iniciar sesión" class="button">
         <p>Al iniciar con tu perfil, se redirigirá hacía la pestaña de tu información</p>
         
     </div>
    </form>
</body>
</html>