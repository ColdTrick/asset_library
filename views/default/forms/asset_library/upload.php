<?php

echo elgg_view_field([
	'#type' => 'file',
	'name' => 'file',
	'required' => true,
]);

$footer = elgg_view_field([
	'#type' => 'submit',
	'value' => elgg_echo('upload'),
]);
elgg_set_form_footer($footer);
