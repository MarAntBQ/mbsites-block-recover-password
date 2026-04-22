<?php
/*
Plugin Name: Marbust Websites - Block Recover Password
Description: Desactiva la opción de restablecer contraseña en WordPress
Version: 1.0
Author: MarAntBQ.dev
*/

// Bloquear reset de contraseña
add_filter('allow_password_reset', '__return_false');