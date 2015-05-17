<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH."/controllers/xcontroller.php");

class Home extends xcontroller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
    }
	
	public function index(){
		$data['news'] = $this->news_model->get_news();
		$news = $data['news'];
		foreach($news as $new){
			echo $new['title'];
		}
	}
	
	public function view($slug = NULL)
	{
		$data['news_item'] = $this->news_model->get_news($slug);
	}
	
}
