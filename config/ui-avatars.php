<?php
return [

	'provider'         => 'local',
	'length'           => 2,
	'image_size'       => 48,
	'font_size'        => 0.5,
	'rounded'          => false,
	'smooth_rounding'  => true,
	'uppercase'        => true,
	'background_color' => '#a0a0a0',
	'font_color'       => '#222',
	'providers'        => [
		'api'   => Rackbeat\UIAvatars\Generators\ApiGenerator::class,
		'local' => Rackbeat\UIAvatars\Generators\LocalGenerator::class,
	],
];