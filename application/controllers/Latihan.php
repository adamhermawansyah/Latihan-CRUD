<?php 
/**
 * 
 */
class Latihan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['content'] = 'template/latihan';
		$this->load->view('template/content', $data);
	}
}
?>