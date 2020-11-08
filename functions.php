<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// Register Custom Post Types
add_action('init', 'custom_post_type_najave');
function custom_post_type_najave() {
    // Register Products
    $najave_labels = array(
        'name'               => 'najave',
        'singular_name'      => 'Najava',
        'menu_name'          => 'Najave',
		'add_new_item'       => 'Dodaj novu najavu'
    );
    $najave_args = array(
        'labels'             => $najave_labels,
        'public'             => true,
        'capability_type'    => 'post',
		'menu_icon'           => 'dashicons-list-view',
		'menu_position'       => 5,
        'has_archive'        => true,
        'supports'           => array( 'title', 'editor' )
    );
    register_post_type('najave', $najave_args);
}  

/**********************************************************************************
 * The custom meta boxes za najave
 *********************************************************************************/

add_action('add_meta_boxes', 'najave_add_custom_box');

function najave_add_custom_box() {
    add_meta_box('najava_datum_id', 'Datum i vrijeme', 'najava_datum_box', 'najave','side');
    }

function najava_datum_box() {
    $datum = '';
    if ( isset($_REQUEST['post']) ) {
        $datum = get_post_meta((int)$_REQUEST['post'],'najava_datum',true);
    }

/* ?>
<label for="najava_datum">Ovdje upisati datum najave:</label> */ ?>
<input id="najava_datum" class="widefat" name="najava_datum" size="20" type="text" value="<?php echo $datum; ?>">
</input></p>
<?php
}

add_action('save_post','najava_save_meta');

function najava_save_meta($postID) {
    if ( is_admin() ) {
        if ( isset($_POST['najava_datum']) ) {
            update_post_meta($postID,'najava_datum',
                                $_POST['najava_datum']);

       }
    }
}	