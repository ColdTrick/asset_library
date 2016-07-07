<?php

$file_input = elgg_extract('file', $_FILES);

$filename = $file_input['name'];

if (empty($filename) || (elgg_extract('error', $file_input) !== 0)) {
	register_error(elgg_echo('upload:error:unknown'));
	forward(REFERER);
}

$file = new \AssetFile();
$file->setFilename('asset_library/' . $filename);
$file->open('write');
$file->write(get_uploaded_file('file'));
$file->close();

$file->save();

$file->mimetype = (new \Elgg\Filesystem\MimeTypeDetector())->getType($file->getFilenameOnFilestore(), $file->getMimeType());
$file->simpletype = elgg_get_file_simple_type($file->mimetype);

$file->save();

forward(REFERER);