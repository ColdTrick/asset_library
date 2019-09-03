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
	
	/**
	 * {@inheritDoc}
	 */
	public function getDownloadURL($use_cookie = true, $expires = '+2 hours') {
		$file_svc = new \Elgg\FileService\File();
		$file_svc->setFile($this);
		$file_svc->setDisposition('attachment');
		$file_svc->bindSession(false);
		return $file_svc->getURL();
	}
	
	/**
	 * {@inheritDoc}
	 */
	public function getInlineURL($use_cookie = false, $expires = '') {
		return parent::getInlineURL(false, '');
	}
}