<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <h1 class="primer_h1"><i><b>Inicio de Sesión</b></i></h1>
    
    <div class="container_d">
        <img src="loginnew.png" alt="Login" title="Login" class="imglo">

        <form action="registro.php" method="POST">
            <div><!--Usuario-->
                <label class="label_lo"><i>Usuario</i></label><br>
                <input type="text" name="user" id="username" required>
                
            </div> 
            <div><!--Contraseña-->
                <label class="label_lo"><i>Contraseña</i></label><br>
                <input type="password" name="pass" id="password" required>
            </div> 

            <input type="submit" value="Ingresar" class="enviar_button" accept="Has ingresado">
            

        </form>

        <h4>¿No estás registrado? Registrate <a href="registro.html" class="a_log">aquí</a></h4>

    </div>
</body>
</html>