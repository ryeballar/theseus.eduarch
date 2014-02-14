<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'sdk/facebook-php/src/facebook.php';

class fb extends Facebook {

	private $config = array(
		'appId' => '599535443458840',
	    'secret' => '61e6578c042ccce513f7016a3aea4362',
	    'cookie' => true,
	    'fileUpload' => false,
	    'allowSignedRequest' => false // optional but should be set to false for non-canvas 
	);

	function __construct() {
		parent::__construct($this->config);
	}

	protected function getCode() {
		$server_info = array_merge($_GET, $_POST, $_COOKIE);
		if (!isset($server_info['code']) || !isset($server_info['state'])) {
	      return false;
	    }
	    if ($this->state === $server_info['state']) {
	        // CSRF state has done its job, so clear it
	        $this->state = null;
	        $this->clearPersistentData('state');
	        return $server_info['code'];
	    }
	    self::errorLog('CSRF state token does not match one provided.');

	    return false;
	}

}