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
define('DB_NAME', 'il-fonti-di-modena');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'YWI5l@%h>PkBr9^XzPe8gEBSi5=# &]#?Cy]t.ji Fz*(STj@GdJMgT?iK9wgtkg');
define('SECURE_AUTH_KEY', 'c_%Xm9WahHa&>=ziFKM(P3tWt#q?ZT-j^oruSt^+imr7%{c=5I]=KkC4!(>5|5>p');
define('LOGGED_IN_KEY', 'B*# z[O:+4c.u{C_o1pcC@}`u.b5!dA@![}E<<^Ikk*5=*Tu]{;}1fRCF#PZs*)t');
define('NONCE_KEY', '^;xa^:[mm,]M.meZ[8dybpFu.My-J9C0*j#t~3_ZrBMVO-l[Rey-JUfgV)$]#N@)');
define('AUTH_SALT', 'qIl{No#.^XDG.r!j9A.fwZuzJ`1EY7d{CiaxV0lXdUjxqDD(We=&.nC^BgbUO@_Y');
define('SECURE_AUTH_SALT', 'h{1/pxpf Y#48n{#e[DY+_HDG8ca{$:,Q0<oq!>)tqksr|R@cdAKR?8xn!dn]zDg');
define('LOGGED_IN_SALT', '&[xAtPVwS*wEaptPg,KoTbs7yE7Rw^mCWN5yCwu2MefUuN`Da:~^$J*hoO{QM8nd');
define('NONCE_SALT', '3Q|7sZZTr|FNV9wP._Hf+e<Di-DI^AK=L;Y5$@7o2hq) *ziC~m7X:+<f5DnVQOK');

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
define('WP_DEBUG', true);
define("WP_DEBUG_DISPLAY", true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

