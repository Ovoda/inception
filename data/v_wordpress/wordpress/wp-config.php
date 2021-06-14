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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'DN*%&.%+PwGS:QeR.gwOxN.@x69QF#Hl0Y&ma|hFJ^,|KjvnOtbSB5HWODUn$a&k');
define('SECURE_AUTH_KEY',  '8/GXlLli1i|Ts+ZA3IiOT3}7pdbrm1kZ?NCJD#x8v(y&f{k{xsQ^66y]~-=pSBRQ');
define('LOGGED_IN_KEY',    'Z&g5s+B2pwV|<{$V(U)||Q@0l|*Ka%igusd9XO@MJdUj<Gcb=*tGoV~+|mAX>rrY');
define('NONCE_KEY',        'IT_U?2[*|5U&/Q_6t@0vr{4gX+@k&Jj0a.);5K,<.l{Km;G4v-AYuS{3te0Dk91o');
define('AUTH_SALT',        'f?)^NIpWr|T5X1|z9@llbru<,/qpkF*W6G+es/b{.C+3gwANBh`oN45dfs,,zroE');
define('SECURE_AUTH_SALT', 'I39Z@m=}B*K9)>8Q~WY>Gtw!1tE+b)*<~Lzbj@R|5z!?L^Z?V1E}`A5%3Nwc|>Kv');
define('LOGGED_IN_SALT',   'HQYPW;K>Uy*+:JQerOc<,z+nfI|2(X#|^N:%6|-k|hw!e1Y#hCC{}VAf#0h:*0Jr');
define('NONCE_SALT',       'hnl4>9Xtlgh>Nj5ZE+[6)0axi3ItmubrWm.a~e-1){,{]E07uQ^0,/fDR:~ASZS1');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
