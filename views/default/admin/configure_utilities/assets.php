<?php
echo elgg_echo('asset_library:admin:info');

$list = elgg_list_entities([
	'type' => 'object',
	'subtype' => 'asset_file',
	'limit' => false,
	'no_results' => elgg_echo('notfound'),
]);

echo elgg_view_module('info', elgg_echo('asset_library:admin:assets:list'), $list);

echo elgg_view_module('info', elgg_echo('asset_library:forms:upload:file:label'), elgg_view_form('asset_library/upload'));
