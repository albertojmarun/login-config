<?php
     include 'sessions.php';

     // CERRAR SESIÓN.
     logout();
     
     // VOLVER A LA PÁGINA PRINCIPAL (MENU)
     header('Location: ../', true, 302);
     exit;