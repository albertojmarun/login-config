<?php
     include 'sessions.php';

     // CERRAR SESIÓN DE LA MÁQUINA
     logoutMaquina();
     
      // VOLVER A LA PÁGINA PRINCIPAL (MENU)
     header('Location: ../views/', true, 302);
     exit;