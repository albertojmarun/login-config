<?php

define('ERROR_INICIAR_SESION', -1);
define('SESION_INICIADA', 1);
define('SESION_NO_INICIADA', 2);

/**
 * Función para Iniciar Sesión.
 * @return (number) Número entero que indica si se inicia sesión o no.
 * ERROR_INICIAR_SESION: Error al Iniciar sesión.
 * SESION_INICIADA: Sesión Iniciada correctamente.
 * SESION_NO_INICIADA: Sesión sin iniciar.
 */
function initSession(){
     session_start();

     if(isset($_SESSION['id'])){
          return SESION_INICIADA;
     }
     
     if(isset($_POST['username']) && isset($_POST['password'])){
          if($_POST['username'] == 'prueba' && $_POST['password'] == 'prueba'){
               $_SESSION['id'] = '123';
               $_SESSION['username'] = 'prueba';

               return SESION_INICIADA;
          }

          return ERROR_INICIAR_SESION;
     }

     return SESION_NO_INICIADA;
}

/**
 * Función para confirmar que la sesión se encuentra iniciada o no.
 * @return (boolean) Valor booleano que indica si la sesión tiene un id.
 * - Verdadero: Sesión iniciada.
 * - Falso: Sesión no iniciada.
 */
function checkSession(){
     session_start();
     
     return !isset($_SESSION['id']);
}

/**
 * Función para cerrar la sesión.
 * @return (boolean) Valor booleano que indica si se debe o no cerrar sesión.
 * Verdadero: La sesión se cerró correctamente.
 * Falso: La sesión no se cerró.
 */
function logout(){
     session_start();
     
     if(isset($_SESSION['id'])){
          session_destroy();
          return true;
     }

     return false;
}

/**
 * Función para iniciar la sesión de la máquina.
 * @return (number) Número entero que indica si se inicia sesión o no en la máquina.
 * ERROR_INICIAR_SESION: Error al Iniciar sesión.
 * SESION_INICIADA: Sesión Iniciada correctamente.
 */
function initMachineSession(){
     if(isset($_SESSION['maquina']['id'])){
          return SESION_INICIADA;
     }
     
     if(isset($_POST['id_maquina']) && isset($_POST['password'])){
          if($_POST['id_maquina'] == 'ID_MAQUINA' && $_POST['password'] == 'maquina'){
               session_start();
               print_r($_SESSION);
               
               $_SESSION['maquina']['id'] = 'ID_MAQUINA';
               

               return SESION_INICIADA;
          }

          return ERROR_INICIAR_SESION;
     }
}

/**
 * Función para confirmar que la sesión en la máquina se encunetra iniciada.
 * @return (boolean) Valor booleano que indica el estado de la sesión en la máquina.
 * - Verdadero: Sesión iniciada.
 * - Falso: Sesión no iniciada.
 */
function checkMaquina(){
     session_start();
     return !isset($_SESSION['maquina']['id']);
}

/**
 * Función para cerrar la sesión en la máquina.
 * Antes de cerrar sesión se debe verificar que la sesión en la máquina se encuentra iniciada.
 */
function logoutMaquina(){
     session_start();
     if(isset($_SESSION['maquina']['id'])) unset($_SESSION['maquina']);
}
