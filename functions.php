<?php
/**
 * Mirror Glaze Lite — theme bootstrap.
 *
 * The free edition of Mirror Glaze, made by tools/build-lite.mjs from the paid
 * build. Edit the generator, not this file.
 *
 * @package mirror-glaze-lite
 */

defined( 'ABSPATH' ) || exit;

define( 'MIRROR_GLAZE_LITE_VERSION', '1.1.0' );
define( 'MIRROR_GLAZE_LITE_DIR', get_template_directory() );
define( 'MIRROR_GLAZE_LITE_URI', get_template_directory_uri() );

require MIRROR_GLAZE_LITE_DIR . '/inc/setup.php';
require MIRROR_GLAZE_LITE_DIR . '/inc/media.php';
require MIRROR_GLAZE_LITE_DIR . '/inc/food.php';
require MIRROR_GLAZE_LITE_DIR . '/inc/lite.php';
require MIRROR_GLAZE_LITE_DIR . '/inc/updater.php';
