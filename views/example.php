<?php
     include '../php/sessions.php';
     if(checkSession()) header('Location: ../', true, 302);
?>

<!DOCTYPE html>
<html lang="es">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="../css/session.css">
          <script src="../js/scripts.js" defer></script>
          <title>Ejemplo</title>
     </head>
     <body>
          <header>
               <ul>
                    <li>
                         <a href="#">LOGO</a>
                    </li>
                    <li>
                         <a href="../php/logout.php">Cerrar Sesion</a>
                    </li>
               </ul>
          </header>
          <h1>EJEMPLO</h1>
          <a href="index.php">VOLVER ATRÁS</a>
     </body>
</html>
