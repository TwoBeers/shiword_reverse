<?php 

add_action( "admin_print_styles-appearance_page_device-color" , 'shiword_reverse_css_includes', 11 );
add_action( "admin_print_styles-appearance_page_custom-background" , 'shiword_reverse_css_includes', 11 );

if ( !function_exists( 'shiword_reverse_css_includes' ) ) {
	function shiword_reverse_css_includes() {
		wp_enqueue_style( 'shi_rev_cdcpanel_style', get_stylesheet_directory_uri() . '/css/admin-color.css', false, '', 'screen' );
	}
}

?>