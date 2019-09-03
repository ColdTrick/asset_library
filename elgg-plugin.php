<?php

return [

	'entities' => [
		[
			'type' => 'object',
			'subtype' => 'asset_file',
			'class' => '\AssetFile',
		],
	],
	'actions' => [
		'asset_library/upload' => ['access' => 'admin'],
	],
	'hooks' => [
		'register' => [
			'menu:page' => [
				'\ColdTrick\AssetLibrary\Menus::registerAdmin' => [],
			],
		],
	],
];
