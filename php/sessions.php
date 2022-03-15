<?php

function initSession(){
     session_start();
     
     if(isset($_SESSION['id'])){
          header('Location: ./views/session.html');
     }
     
     if(isset($_POST['username']) && isset($_POST['password'])){
          if($_POST['username'] == 'prueba' && $_POST['password'] == 'prueba'){
               $_SESSION['id'] = '123';
               $_SESSION['username'] = 'prueba';
               $_SESSION['password'] = 'prueba';
               header('Location: ./views/session.php', true, 302);
          }

          return 'Usuario o Clave Inválidos.';
     }
}

function checkSession(){
     session_start();
     
     if(!isset($_SESSION['id'])){
          header('Location: ../index.php', true, 302);
     }
}

function closeSession(){
     session_start();
     
     if(isset($_SESSION['id'])){
          session_destroy();
          header('Location: ../index.php', true, 302);
     }
}