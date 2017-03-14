<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tool extends CI_Controller {

	public function __construct()
 	{
 		parent::__construct();
 		$this->load->library('slice');
    $this->load->model('toolModel');
 	}

	public function index()	{
    $result = $this->toolModel->getAllTool();

		$this->slice ->with('toollist', $result)
					       ->view('toolList');
	}

	public function detail($id){
		$result = $this->toolModel->getDetail($id);

		$this->slice ->with('detail', $result)
								 ->view('toolDetail');
	}

}
