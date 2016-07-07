<?php

if (get_subtype_id('object', 'asset_file')) {
	update_subtype('object', 'asset_file', 'AssetFile');
} else {
	add_subtype('object', 'asset_file', 'AssetFile');
}
