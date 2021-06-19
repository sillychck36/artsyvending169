<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stoke435_ebookcentral' );

/** MySQL database username */
define( 'DB_USER', 'stoke435_ebook' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ebookc' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '0wtcxqhvzuppoditno5dkfnd6g9egygumfbpls97u5glndpvsqylkxrikzt2ynxr');
define('SECURE_AUTH_KEY',  'ggwukvfdjp6eccjq53o0s4qpzysjdor7ebxlzfl9b9dwxygagavm0gnm1kjodq7m');
define('LOGGED_IN_KEY',    'jjidbgpnrr3c1zpbxbihbftkg0vd8ocbbb5kk8fdh2hsrhgdxfuy30hryvtxjudf');
define('NONCE_KEY',        'mjbr6l8rneqf71eu7iehdafkjgw3mbaxfoedpkjw8gsn98vqrdv34k8oyoiusmzd');
define('AUTH_SALT',        'ywmjngmkhtueoczz54xvhnbnwr2y84txviejdgvefzpp7jgeh1eeqvdqyluj3aqk');
define('SECURE_AUTH_SALT', 'iskljcohq60rljflkje43xri1mhvq0cs4rxadepo59hhapqtpt9cucyq70eqchah');
define('LOGGED_IN_SALT',   'fl16gymdmghzsfamvrnk0kzsj0kmf5cchjj5ydnjxvrhssbx4wusl50ow07shs58');
define('NONCE_SALT',       '8ctfdodmnr5gjh5vgxjhqed61p7yvcfj2dzpj21op7p3ryhouhsm4r2o8fya9q9l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '64M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
