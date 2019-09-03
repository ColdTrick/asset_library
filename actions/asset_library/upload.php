<?php

$upload = elgg_get_uploaded_file('file');
if (!$upload->isValid()) {
	$error = elgg_get_friendly_upload_error($uploaded_file->getError());
	return elgg_error_response($error);
}

$file = new \AssetFile();
$file->setFilename('asset_library/' . $upload->getClientOriginalName());
$file->open('write');
$file->write(file_get_contents($upload->getPathname()));
$file->close();

$file->save();

$file->mimetype = $file->getSimpleType() ;
$file->simpletype = elgg_get_file_simple_type($file->mimetype);

$file->save();

return elgg_ok_response();
