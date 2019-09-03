<?php

$entity = elgg_extract('entity', $vars);

$download_url = $entity->getDownloadURL();

echo elgg_view('output/url', [
	'text' => substr($entity->getFileName(), 14),
	'href' => $download_url,
]);

echo ' [' . $entity->simpletype . ' : ' . $entity->mimetype . '] ';

echo elgg_view('output/url', [
	'text' => elgg_view_icon('delete'),
	'href' => 'action/entity/delete?guid=' . $entity->guid,
	'confirm' => true,
]);

echo '<br />';

echo '<div class="elgg-subtext"><b>Inline url:</b> ' . $entity->getInlineURL() . '</div>';
echo '<div class="elgg-subtext"><b>Download url:</b> ' . $download_url . '</div>';
