<?php
     include '../php/sessions.php'; 
     checkSession();
?>

<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="../css/session.css">
          <script src="../js/scripts.js" defer></script>
          <title>MENU</title>
     </head>
     <body>
          <header>
               <ul>
                    <li>
                         <a href="#">LOGO</a>
                    </li>
                    <li>
                         <a href="../php/close_session.php">Cerrar Sesion</a>
                    </li>
               </ul>
          </header>
          <br>       
          <div class="div_center">
               <button onclick="requestCode();" class="card">
                    <img src="../assets/ajmi_logo.jpeg" alt="MAQUINA">
                    <h4>Administración Máquina</h4>
               </button>
               <button onclick="requestCode();" class="card">
                    <img src="../assets/ajmi_logo.jpeg" alt="Historial">
                    <h4>Historial</h4>
               </button>
               <button onclick="requestCode();" class="card">
                    <img src="../assets/ajmi_logo.jpeg" alt="Datos">
                    <h4>Cargar Datos</h4>
               </button>
               <button onclick="requestCode();" class="card">
                    <img src="../assets/ajmi_logo.jpeg" alt="Estadisticas">
                    <h4>Estadísticas</h4>
               </button>
               <button onclick="requestCode();" class="card">
                    <img src="../assets/ajmi_logo.jpeg" alt="Iniciar">
                    <h4>Iniciar</h4>
               </button>
               <button onclick="requestCode();" class="card">
                    <img src="../assets/ajmi_logo.jpeg" alt="Parar">
                    <h4>Parar</h4>
               </button>
          </div>
          <!--
          <form action="#" method="POST">
               <div class="form-choice">
                    <label for="n_cajas"><strong>Número de Cajas</strong></label>
                    <input type="number" name="n_cajas" id="n_cajas" min="1" max="10" value="1" required>
               </div>
               <br>

               <p><strong>Número de Rampas</strong></p>
               
               <div class="form-group">
                    <input type="radio" name="n_rampas" id="cuatro_rampas" value="4" selected>
                    <label for="cuatro_rampas">4 Rampas</label>
               </div>
               <br>
               <div class="form-group">
                    <input type="radio" name="n_rampas" id="seis_rampas" value="6">
                    <label for="seis_rampas">6 Rampas</label>
               </div>
               <br>

               <p><strong>Seccionamiento de Pedidos:</strong></p>
               <div class="form-group">
               </div>

               <div id="submit-boxes">
                    <button type="submit">Enviar</button>
               </div>
          </form> 
     -->
     </body>
</html>