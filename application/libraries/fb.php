<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require_once 'facebook-php-sdk/src/facebook.php';

class fb extends Facebook {

	private $config = array(
		'appId' => '599535443458840',
		'secret' => '61e6578c042ccce513f7016a3aea4362',
		'fileUpload' => false,
		'allowSignedRequest' => false
	);

	private $fb;

	function __construct() {
		parent::__construct($this->config);
	}

}