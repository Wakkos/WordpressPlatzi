<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'platzi');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'y1;ZT5OVRd.;|a9In5d`*-kuHcsnngEFov|TsUb]7}^ZK_u<Y!Nhj4qWK@pcYm|A');
define('SECURE_AUTH_KEY', 'gQxA4$4q+7G(;wk3M1vT|E_`E@:nXXnS$HQf.I;&<1sTU`mgu-sDZm>^FgJiw8c+');
define('LOGGED_IN_KEY', ')2LY_Cr/)JRE^+KL+c;n: LTGNE|8iWrX*NP$5bR3`V<r^n#7|%sq|d?51rt<2;z');
define('NONCE_KEY', 'fmMy6/Q$2[-Ju!i<|#.Z;5men7Cs+(jzh)kdtU|0+aF4-_ZUI~>(CN0NdRZ+]j.N');
define('AUTH_SALT', 'm1L93h0Om#:Zz3V}6tXn@Z@aOi-!SM62~eu3+eCoGz9|U2HOI>QR:;-YK4$sfM~n');
define('SECURE_AUTH_SALT', ')-C<?8Pi>A@uBCWUQiQmegvj&g*bF|P_#rIP|:e/@RduV3#C$x4_vV+Fg9tU?9!x');
define('LOGGED_IN_SALT', 'a(,:MGCeysCv/1y-y}Ad!fd0T$^+g@^sFT*@Fnb6L-N]!{`}03?BU9S9EqfAT@?@');
define('NONCE_SALT', 'VtU~]sb}2OE[m{|IW%]HhC@6W<`#+(t8|,T!m!sG@k2n6`Z|bWKp+PU{p!tP*`;^');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

