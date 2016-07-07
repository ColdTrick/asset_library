<?php

echo elgg_view_input('file', [
	'name' => 'file',
	'required' => true,
]);

echo elgg_view('input/submit', [
	'value' => elgg_echo('upload'),
]);