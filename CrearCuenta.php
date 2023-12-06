<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Registrarte</title>
</head>

<body>
    <div class="contenedor">
       
        <form action="Login/Registrarse.php" method="POST">
        <h1 class="text-white text-center">REGISTRARSE</h1>
            <?php if(isset($_GET['error'])){ ?>
                <p class="error"><?php echo $_GET['error']?></p>
                <?php } ?>
            <br>
            <?php if(isset($_GET['success'])){ ?>
                <p class="success"><?php echo $_GET['success']?></p>
                <?php } ?>
                <br>
            <label>
                <i class="fa-solid fa-user"> </i>
                Usuario
            </label>
            <input type="text" placeholder="Ingresa Usuario" name="Usuario">

            <label>
                <i class="fa-solid fa-user"> </i>
                Nombre Completo
            </label>
            <input type="text" placeholder="Ingresa Nombre Completo" name="Nombre_Completo">  <label>
          
            <label>
                <i class="fa-solid fa-key"></i>
                Contraseña
            </label>
            <input type="password" placeholder ="Ingresa una contraseña" name="Clave">

            <label>
                <i class="fa-solid fa-key"></i>
                Repetir Contraseña
            </label>
            <input type="password" placeholder ="Repetir Contraseña" name="RClave">
                
            <hr>
        <button type="submit">Crear Cuenta</button>
        <a href="Index.php">Iniciar Sesión</a>

    </div>
</body>

</html>