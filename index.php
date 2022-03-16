<?php
     include 'php/sessions.php';
     $code = initSession();

     switch($code){
          case ERROR_INICIAR_SESION:
               $message = 'Usuario o contraseña incorrectos';
          break;

          case SESION_INICIADA:
               header('Location: ./views/index.php', true, 302);
               exit;
          break;
          
          default:
               $message = '';
          break;
     }
?>

<!DOCTYPE html>
<html lang="es">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="./css/login.css">
          <script src="./js/scripts.js" defer></script>
          <title>Login</title>
     </head>
     <body>
          <h1 class="text-center"> Login </h1>
          <div class="logo-banner">
               <img id="logo_login" src="./assets/ajmi_logo.jpeg" alt="LOGO">
          </div>
          <p class="error_message">
               <?php
                    if(isset($message)) echo $message;
               ?>
          </p>
          <form method="POST" action="index.php">
               <div class="form-group">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="username" placeholder="Introduce el Usuario:" required />
               </div>
               <br>
               <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Introduce una Contraseña:" required />
               </div>
               <div class="submit">
                    <button type="submit">Iniciar Sesión</button>
               </div>
          </form>
          <br>
     </body>
</html>