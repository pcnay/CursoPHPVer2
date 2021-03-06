<?php
  // Es donde se encuentra todas las vistas de la aplicación Web.
  // Se requiere para desplegar la tabla que contiene los super heroes. 
  require "vistas.php";
?>
<!DOCTYPE html > 
<html lang="es">
  <head>
    <meta charset = "UTF-8" />
    <title>Aplicacion CRUD De Super Heroes</title>
    <meta name= "description" content="Aplicacion CRUD con Filosofia MVC desarrollada en PHP y Ajax"/>
    <link rel="stylesheet" href="css/super-heroes.css" />
  </head>
  
  <body>
    <header id="cabecera">
      <h1>Super Heroes</h1>
      <div><img src="img/super-heroes.png" alt = "Super Heroes"/></div>
      <!-- Se coloca "#" ya que no se requiere que vaya algun enlace. -->
      <a href="#" id="insertar">Insertar</a>
    </header>
    <section id="contenido">
      <!-- <p>En esta parte se encontrara la tabla donde se desplegara la informacion.</p> -->

      <!-- Es donde se colocara las respuesta por parte del Despachador Ajax -->
      <div id="respuesta"></div>

      <!-- Este DIV se colocara la imagen de precarga (archivo.gif) cuando se haga pa peticion al servidor -->
      <div id="precarga"></div>

      <!-- Esta parte del código es donde se muetra la tabla de los super heroes 
            Este archivo se encuentra en "vistas.php" -->
      <?php mostrarHeroes(); ?>
    </section>
    <script src="js/super-heroes.js"></script>
  </body>
</html>