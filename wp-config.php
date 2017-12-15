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
define('DB_NAME', 'test_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '0P]u>F:B0ZHx)CYRQ|8J)%VoI~Ekqx& o:1A$zRltcyTPL*:U CJla#s8v?&EGZN');
define('SECURE_AUTH_KEY',  '$<MnMt(n3FBm`+lZ__Ze540u+?@$Io!7AGM!`[R&X;-0V#&2Z]w|I9B}tis)ZmxD');
define('LOGGED_IN_KEY',    '+$Q_/_0=yBcqk7Coeb%+@m#wc?IfNHhlmzT&K|WS9II b7vLv4`x2[?#Z!V:>9np');
define('NONCE_KEY',        'lrbxmk_~8[ely>||QFMM#siRw+8@@LWH pdOA`T-hY8aU4*v/bBL9$l#q ^:Q^IA');
define('AUTH_SALT',        ',>1}n?1iR;vi.T7H5>~:+;s1f@{XQ=5C)v-sGIaefHYE6+)s{@)2#H_+m,f*#B%#');
define('SECURE_AUTH_SALT', '_.^Aa&D jG},up1RX-9ZGz,[NrP2?g40 .KzowV:>N{:7|+(&WHBmv^q-e4Esy]2');
define('LOGGED_IN_SALT',   '733k8E)VR<iM|%?Z`)<t4+ ]}$tB@M(cVDj)|tl0Iwi7HYA)j/P3GBKDEj@KZ6vw');
define('NONCE_SALT',       '3PTT{Rk<3at%C57g{2A``P%NWeCjM#T#H(;x}AEn6)p(Vv)n|~CArn9+9HUM$OuH');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
