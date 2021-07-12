<?php

add_shortcode('button', 'no_button_function' );

function no_button_function( $atts)
{
	ob_start();
	extract(
		shortcode_atts(
			array(
				'type' => 'coloured',
				'textcolour' => '#ffffff',
				'buttoncolour' => '#dd1742',
				'url' => '#',
				'label' => 'no label added',
				'external' => '0'
			),
		$atts
		)
	);
	$_button_options__style = $type;
	$_button_options__text_colour = $textcolour;
	$_button_options__button_colour = $buttoncolour;
	$_button_options__url = $url;
	$_button_options__label = $label;
	$_button_options__external = $external;
	$_button_pseudo = 'false';
	include(__DIR__ . '/../templates/components/button/_button.php' );
	$_buttonvar = ob_get_clean();
	return $_buttonvar;
}

?>
