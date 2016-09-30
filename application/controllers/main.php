<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->allow=array();
		$this->load->database();
		$this->load->model('main_model');
		$this->load->helper(array('url', 'date'));
	}

	/*
	 *헤더 푸터 불러오기
	 */
	public function _remap($method) {
		// 헤더 include
		$this -> load -> view('header');

		if (method_exists($this, $method)) {
			$this -> {"{$method}"}();
		}

		// 푸터 include
		$this -> load -> view('footer');
	}

	public function index()
	{
		$data= array();
		//$data['views'] = $this->main_model->get_count();

		$counter = $this->main_model->get_count();
		$data['counter'] = $counter;

		$this->load->view('index', $data);
	}
}














