<?php
	

function require_auth() {
	

       $AUTH_USER = 'admin';
       $AUTH_PASS = 'admin';
       header('Cache-Control: no-cache, must-revalidate, max-age=0');
       $has_supplied_credentials = !(empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW']));
       $is_not_authenticated = (!$has_supplied_credentials || $_SERVER['PHP_AUTH_USER'] != $AUTH_USER ||$_SERVER['PHP_AUTH_PW']   != $AUTH_PASS);
	

       if ($is_not_authenticated) {	

             header('HTTP/1.1 401 Authorization Required');
             header('WWW-Authenticate: Basic realm="Access denied"');
             exit;
	
       }
	echo 'hola';

}


 require_auth();
/*
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Mi dominio"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Texto a enviar si el usuario pulsa el botón Cancelar';
    exit;
} else {
    echo "<p>Hola {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>Introdujo {$_SERVER['PHP_AUTH_PW']} como su contraseña.</p>";
}*/