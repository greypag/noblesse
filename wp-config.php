<?php

/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the

 * installation. You don't have to use the web site, you can

 * copy this file to "wp-config.php" and fill in the values.

 *

 * This file contains the following configurations:

 *

 * * MySQL settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://codex.wordpress.org/Editing_wp-config.php

 *

 * @package WordPress

 */



// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define('DB_NAME', 'noblesse_db');



/** MySQL database username */

define('DB_USER', 'noblesse_db');



/** MySQL database password */

define('DB_PASSWORD', 't5MsBIyV7i');



/** MySQL hostname */

define('DB_HOST', 'localhost');



/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8mb4');



/** The Database Collate type. Don't change this if in doubt. */

define('DB_COLLATE', '');



/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         't`rlPCLoBL7|xdX+M*{sL sr@2YvNbdSShg]y%(b<LItAE0{<[|s%[:2Uw/ >kHM');

define('SECURE_AUTH_KEY',  'M;zt/z_RQY/(?Khr/F{uW?sgGt+vSle$zqXa;urq^Hdf]UiHNxsg*,Y$jX5(q.y:');

define('LOGGED_IN_KEY',    ')?6d~?~fw=W?*h~#fUhx)qQi/nxq[DNuwp4bLv67#@mKmp^_y yiZoB<`Rk1K/yC');

define('NONCE_KEY',        ')p9$UVx-3z$dij@N2s4I4iy%p_(]}Sk2A+%y8wArC[Fp^pa,WXrdCjmXZRZmt]+6');

define('AUTH_SALT',        'kt+TME/J!t+)ltVuv[rhC-WgdUm-LUu^QLdh&Pk+cj^E; >h +SHG6XGDp3~I0Ak');

define('SECURE_AUTH_SALT', 'DNE%lX:A(g&1#^d+?|^R~hZJ9{0j>/bMe9pyuz@H/IU8?/Pw7uQ%K)=j@|P:jzyS');

define('LOGGED_IN_SALT',   '0mCKPQ:Uty7>ZGY/w<7.)VO[z@FxRx0^xEUkAQNO1#?i6kA-zBNkOHH/&(uB4){[');

define('NONCE_SALT',       'CcimG*&)uT9 >I0alU*F|)6t]M|UBxs -,-FkvP@|tmgPJz?nf5,Swjc(.RxHuo;');



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'wp_';



/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define('WP_DEBUG', true);
//define( 'WC_TEMPLATE_DEBUG_MODE', true );

/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

