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
define('DB_NAME', 'curso_wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', '^qYF,+;?YF% <mxo~8-!=Ygw~<Kb?JV,7Swf[>7F&YPtp}%:9CVXeZnu85Fygb#y');
define('SECURE_AUTH_KEY', '*@V*gI&YbmeY7&w[Gk`mOBO=f_>eozFP18jE4V#UA!dJo{BLL&jfcV<Z}CyNm!Bm');
define('LOGGED_IN_KEY', '}47pV[4ucJDf~~rX2$Vngp)!CGVNq69v^pe#`WaW2H$[BU;u|G,BCNyB.ERM])v/');
define('NONCE_KEY', 'Rd4B(Z|zo)3<.M0iAU20S.4$+E`{LL *$<e)Ezy_LQye[k,MS;tIY)s`c4PTnz+t');
define('AUTH_SALT', '5LZQne.Fy(/9j#)0puWoCU^I/7%/PLjR_6_BN,xe|lv^8Q<k/>,eH{;J<.o?y1pq');
define('SECURE_AUTH_SALT', '#:D4>}e{ppz*BNg*%>kaO60+[c#PrDFMO9?ZU[hmzX4g9_QLr%JyF=q_ZHjIk6M=');
define('LOGGED_IN_SALT', '#$r(-u:<fl#,7~:H/8j5W{_B0OD4ooM}c InabR<XOIJaQJ9>g#3uj`G2cBh Ix:');
define('NONCE_SALT', '4^!8n#i&SUAfkF-8gcP Iy3>t2)RRzOt?L_vd.zKjycH7a}$@U$V7jm]EfO5/|Gp');

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

