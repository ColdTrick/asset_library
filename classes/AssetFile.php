<?php

class AssetFile extends \ElggFile {
	
	const SUBTYPE = 'asset_file';
	
	/**
	 * (non-PHPdoc)
	 * @see ElggObject::initializeAttributes()
	 */
	protected function initializeAttributes() {
		parent::initializeAttributes();
		
		$this->attributes['subtype'] = self::SUBTYPE;
		$this->attributes['owner_guid'] = elgg_get_site_entity()->guid;
		$this->attributes['container_guid'] = elgg_get_site_entity()->guid;
		$this->attributes['access_id'] = ACCESS_PUBLIC;
	}
	
	public function getDownloadURL() {
		$file_svc = new \Elgg\FileService\File();
		$file_svc->setFile($this);
		$file_svc->setDisposition('attachment');
		$file_svc->bindSession(false);
		return $file_svc->getURL();
	}
	
	public function getInlineURL() {
		return elgg_get_inline_url($this, false, false);
	}
}