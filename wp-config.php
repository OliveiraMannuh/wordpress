<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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

/** Instalação sem precisar passar pelo FTP  */
define('FS_METHOD','direct');

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
define( 'AUTH_KEY',         '}<CKN}RDl-t }j<? :% G!m#ZmkQw$/<-m:CnZQI0-lz:u6~7$zXbVw r?g~s3+S' );
define( 'SECURE_AUTH_KEY',  'w`]~lb/F;X60iWcxdA1&G rs[+GIh(*J/>mB/QeB0KQf_%OS_dN|dL[]|E(RRA,I' );
define( 'LOGGED_IN_KEY',    'e6WUC>5:eykF9dBo>sT^f3isWI7+&563:,[c;?Thq|*(SAt!9>7rLhmi0sU?Po|F' );
define( 'NONCE_KEY',        'Z2_s[fQ@6+90UrMJ(MyCtduYq3XWfm@ _P7_adftLNkVQ8x&AZ}NxCw<673@.^Jg' );
define( 'AUTH_SALT',        'Hiq!hy&OCoR%[.se8m]wPNZ1DQ{&ad iNMrxL/Z1u:.J4c0a$v*X;[+K}Q<|}Uu4' );
define( 'SECURE_AUTH_SALT', ']ut~:rC&u]o5!y[^AypVgF*#(opuWl5c%dx@15)R$H,C tXEw)FW Jmee{NCDBmC' );
define( 'LOGGED_IN_SALT',   'J=P@oQg_-@$$o]Ym@$8D={jbeh3hZ4SF~Z.^>8v/b7XE_e%HrOWG~HJfKyeu]%nt' );
define( 'NONCE_SALT',       'XF|=~5uADYL-^`LKuW EP3=1I[ !:oldXnt,^eH&]Pxx*k}shau;y#=~rxK@.eHO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
