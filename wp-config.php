<?php
// ** MySQL settings ** //
define( 'DB_NAME', 'your_database_name' );
define( 'DB_USER', 'your_database_user' );
define( 'DB_PASSWORD', 'your_database_password' );
define( 'DB_HOST', 'localhost' );

// ** Security keys ** //
define('AUTH_KEY',         'your_unique_phrase');
define('SECURE_AUTH_KEY',  'your_unique_phrase');
define('LOGGED_IN_KEY',    'your_unique_phrase');
define('NONCE_KEY',        'your_unique_phrase');
define('AUTH_SALT',        'your_unique_phrase');
define('SECURE_AUTH_SALT', 'your_unique_phrase');
define('LOGGED_IN_SALT',   'your_unique_phrase');
define('NONCE_SALT',       'your_unique_phrase');

// ** Database table prefix ** //
$table_prefix  = 'pw_';

// ** Move wp-config.php up one directory (optional) ** //
// If you move this file up a directory, you don't need to specify anything here

// ** Disable file editing in the admin dashboard for security ** //
define('DISALLOW_FILE_EDIT', true);

// ** Disable the WordPress default RSS feeds (optional) ** //
define('DISABLE_WP_CRON', true);

// ** Turn off WordPress version info ** //
remove_action('wp_head', 'wp_generator');

// ** Set WP to use object cache (optional) ** //
define('WP_CACHE', true);

// ** Performance: Set higher PHP memory limit (optional) ** //
define('WP_MEMORY_LIMIT', '256M');

// ** Disable XML-RPC if not used ** //
define('XMLRPC_REQUEST', false);

// ** Debugging (optional, for development only) ** //
define('WP_DEBUG', false); // Change to true if you want to debug errors

/* That's all, stop editing! Happy publishing. */

// ** Absolute path to WordPress directory. **
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

// ** Sets up WordPress vars and included files. **
require_once(ABSPATH . 'wp-settings.php');
