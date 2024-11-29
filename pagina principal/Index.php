<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda a Estudiantes</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
   
    <!--Cuerpo de la pagina principal-->
    <div class="contenedor_search">

        <input type="search" name="buscar" id="search" placeholder="Ingrese una busqueda">
        <input type="submit" class="lupa" value="🔎">
    </div>
    <div class="contenedor">
        <div class="contenedor_1">
            <label for="button_menu" class="line_btn">
              <img src="icons8-menú-144.png" class="img_icon" title="menu_bar">
           </label>

            <h1 class="h1_pri"><i><b>Blogstudent</b></i></h1>
        </div>

        <div class="contenedor_2">

            <a href="login/login.php" class="ref"><h5 class="input_1"><i>Iniciar Sesión</i></h5></a>

        </div>

    </div>
    <hr>
    <input type="checkbox"  id="button_menu">

<!--Aqui comienza el menu-->
    <div class="menu">
        <div class="contenido">
           <img src="UNEFA_Punto_Fijo_campus_front.JPG" alt="unefa" title="unefa" class="cabecera_menu">
            <nav>
                <a href="Index.php">Inicio</a>
                <a href="#">Mi Perfil</a>
                <a href="#">Salud Mental e Inteligencia Emocional</a>
                <a href="#">Reporte de Inconveniente</a>
                <a href="#">Contactanos</a>
                <a href="#">Acerca de</a>
            </nav>
            <label for="button_menu" ><strong>⬅️</strong></label>
        </div>
    </div>  
</body>
</html>