<?php
// ** MySQL settings ** //
define('DB_NAME', 'thespot_0');    // The name of the database
define('DB_USER', 'wordpress_1');     // Your MySQL username
define('DB_PASSWORD', 'Nov42008'); // ...and password
define('DB_HOST', 'localhost');    // 99% chance you won't need to change this value
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Change each KEY to a different unique phrase.  You won't have to remember the phrases later,
// so make them long and complicated.  You can visit http://api.wordpress.org/secret-key/1.1/
// to get keys generated for you, or just make something up.  Each key should have a different phrase.
define('AUTH_KEY', '=Y;~E[oV2Ph}{iY!E1j!g5&c,c=FlU.\":\"_\\$>O#rm6b`/97+1ot;NE+#?>gShE7'); // Change this to a unique phrase.
define('SECURE_AUTH_KEY', 'S+sWp<mD1q&cM+[l\\GAn) ;u27mk(2=rSK|7)cw}|d8<S\\@cG&S,k5CLA1^y#(5h'); // Change this to a unique phrase.
define('LOGGED_IN_KEY', 'g?;5!iI2~xyZmg,cBEAzDg;W)e^xh+z fHd:]p6VlDxd&@c=W(*xm{\\jrTM*j^mM'); // Change this to a unique phrase.

// You can have multiple installations in one database if you give each a unique prefix
$table_prefix  = 'wp_';   // Only numbers, letters, and underscores please!

// Change this to localize WordPress.  A corresponding MO file for the
// chosen language must be installed to wp-content/languages.
// For example, install de.mo to wp-content/languages and set WPLANG to 'de'
// to enable German language support.
define ('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');
?>
