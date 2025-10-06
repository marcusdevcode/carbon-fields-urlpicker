<?php
use Carbon_Fields\Carbon_Fields;
use MarcusDevCode_Carbon_Field_UrlPicker\UrlPicker_Field;

if (!function_exists('add_action')) {
    return;
}
if(!defined("MarcusDevCode_Carbon_Field_UrlPicker\\DIR")){
	define('MarcusDevCode_Carbon_Field_UrlPicker\\DIR', __DIR__);
}

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php' ;
}
add_action('after_setup_theme', function () {
	Carbon_Fields::extend(UrlPicker_Field::class, function ($container) {
		return new UrlPicker_Field( $container['arguments']['type'], $container['arguments']['name'], $container['arguments']['label'] );
	});
}, 99);
