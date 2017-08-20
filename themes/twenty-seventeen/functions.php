<?php
/**
 * Mike Annibale - Twenty Seventeen functions and definitions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * @package Mike Annibale - Twenty Seventeen
 * @since 0.1.0
 */

# Useful global constants.
define( 'MIKEANNIBALE_COM_VERSION', '0.1.0' );
define( 'MIKEANNIBALE_COM_TEMPLATE_URL', get_template_directory_uri() );
define( 'MIKEANNIBALE_COM_PATH', get_template_directory() . '/' );
define( 'MIKEANNIBALE_COM_INC', MIKEANNIBALE_COM_PATH . 'includes/' );

# Include compartmentalized functions.
require_once MIKEANNIBALE_COM_INC . 'functions/core.php';

# Run the setup functions.
MikeAnnibale\Functions\Core\setup();
