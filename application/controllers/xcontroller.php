<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class xController extends CI_Controller {

	var $data = NULL;
	function __construct() {
		parent::__construct();
		
		//$this->load->helper('date');
		
		$this->data["header"] = "partials/header";
		$this->data["footer"] = "partials/footer";
		$this->data["l_content"] = "partials/l_content";
		$this->data["r_content"] = "partials/r_content";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */