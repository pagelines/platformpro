<?php
/*
	Section: TwitterBar
	Author: Simon Prosser
	Author URI: http://www.pagelines.com
	Description: Loads twitter feed into the site morefoor area.
	Version: 1.5.2.1
*/

class PageLinesTwitterBar extends PageLinesSection {

   function __construct( $registered_settings = array() ) {
	
		$name = __('Twitter Bar', 'pagelines');
		$id = 'twitterbar';
	
		
		$default_settings = array(
			'type' 			=> 'standard',
			'description' 	=> 'Displays your latest twitter post.',
			'workswith' 	=> array('morefoot'),
			'folder' 		=> '', 
			'init_file' 	=> 'twitterbar.php',
			'icon'			=> PL_ADMIN_ICONS . '/twitter.png',
			'version'		=> 'pro'
		);
		
		$settings = wp_parse_args( $registered_settings, $default_settings );
		
		parent::__construct($name, $id, $settings);    
   }

	function section_template() {}
}
/*
	End of section class
*/
