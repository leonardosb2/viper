<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'viper_lsb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/:aXR4Qzxu3-Vz07cn~,YP*$IQ)>;+Bn`[s o8~GZ6H;e@Ob/wr<eGb/R`Y2+|5j' );
define( 'SECURE_AUTH_KEY',  'b!3K[KTpl(p[]lg@757 ~1rm&l2v{6.8K,Iq~zkR^8nC>jJb$&(phu}S%e_;&R*]' );
define( 'LOGGED_IN_KEY',    'J:gJLwHM%[@zWdu~8OwiwS^#519nV3har%j]|PO(sJgRc?V&evER|MbIf!Z`X#Ia' );
define( 'NONCE_KEY',        'k( =[cC^4]XZ~yiRzh=9ya[>{*x_(G*1fkj:ZJ,I=mMQ;*H2x-~>m>nUrv;1*~AO' );
define( 'AUTH_SALT',        'Ia:{5`g(%,fQt~<{<=>N!E-?zeN4{`-j)q#XQ7t${6Fj~=C@N:p.M0W x|`YHid6' );
define( 'SECURE_AUTH_SALT', ']>fX<M$mxQ[FJJ2h,,%&8^|HOGhwUm750` q.A5P|_R[eJhJhtYQXB}%$XGz`$RZ' );
define( 'LOGGED_IN_SALT',   'k3m~1{a|`G$Td!dr@91*elAJ/x?,XC-{BqTlWJ7%_[f2<e6+@#t k<m1Rj&W7+PO' );
define( 'NONCE_SALT',       '~ UvL#i:1<ZhAi(jt4YS?7RXwaFV^*r)XId{GX)kcG|0+(ocI*5h}s.~{$HDBe?5' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
