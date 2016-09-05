<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('soft_model');
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
		$this->load->view('index');
	}

	/*
	 * 로그인후 메인페이지
	 */
	public function lists()
	{
		$data['list'] = $this->soft_model->get_list();
		$this->load->view('list/soft_list', $data);
	}
}














