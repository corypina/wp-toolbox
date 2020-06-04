<?php
/*
Plugin Name: WP Toolbox
Description: Utilities I use, like, all the time.
Version: 0.1.1
Author: Cory Piña
Author URI: http://thisiscory.com
*/

// HOW TO USE THIS

// Any file in a folder will automatically be included in the plugin code.
// Folders and files can be excluded by add an underscore ('_') before 
// the file or folder's name.

// EXAMPLES

// The directory 'library' will be included.
// The directory '_library' will NOT be included.
// The file 'library/template.php' will be included.
// The file 'library/_template.php' will NOT be included.
// The file '_library/template.php' will NOT be included.

// Global Config
// Call config properites with $config->key
$config = (object) array(
    'key' => 'value',
);

// Get the directory of this plugin
$dir = plugin_dir_path(__FILE__);

// Get the list of folders
// and include all PHP files
$folders = array_filter(glob("{$dir}[!_]*"), 'is_dir');

if ( !empty( $folders ) ) :
	foreach ( $folders as $f ) :
		foreach ( glob( "{$f}/[!_]*.php" ) as $file ) :
			include $file;
		endforeach;
	endforeach;
endif;
