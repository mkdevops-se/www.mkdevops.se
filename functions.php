<?php
// правильный способ подключить стили и скрипты (correct way to include styles and scripts)
add_action( 'wp_enqueue_scripts', 'theme_name_style' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний (you can use this hook it is later)

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method(){
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'scripts', get_template_directory_uri() .'assets/js/scripts.js', array(), '1.0', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() .'assets/js/scripts.js.map', array(), '1.0', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() .'assets/js/secondary.js', array(), '1.0', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() .'assets/js/secondary.js.map', array(), '1.0', true );
}

function theme_name_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_theme_support('custom-logo');


add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов. (Adds SVG to the list of files allowed for uploading.)
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов. (Fix MIME type for SVG files.)
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его (mime type has been reset, fix it)
	// а также проверим право пользователя (and also check the user right)
	if( $dosvg ){

		// разрешим (let's resolve)
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим (ban)
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

?>
