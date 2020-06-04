<?php

// Show the current template in use
// To use, add ?show-template to URL

add_action('wp_head', 'show_template_filename');
function show_template_filename() {
    if ( isset($_GET['show-template']) ) {
        global $template;
        echo '<span style="background-color: #ooo;color: #fff;">';
        print_r($template);
        echo '</span>';
    }
	
}
