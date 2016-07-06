<?php
echo elgg_echo('asset_library:admin:info');

echo elgg_list_entities([
	'type' => 'object',
	'subtype' => 'asset_file',
	'limit' => false,
]);

echo elgg_view_form('asset_library/upload', ['class' => 'mtl']);