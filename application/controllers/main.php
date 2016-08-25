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
	 * softmanage 목록
	 */
	public function lists()
	{
		$data['list'] = $this->soft_model->get_list();
		$this->load->view('list/soft_list', $data);
	}

	public function progress_list()
	{
		$data['progress_list'] = $this -> soft_model -> get_progress_list();
		$this->load->view('list/soft_progress', $data);
	}

	public function keep_list()
	{
		$data['keep_list'] = $this -> soft_model -> get_keep_list();
		$this->load->view('list/soft_keep', $data);
	}

	public function stop_list()
	{
		$data['stop_list'] = $this -> soft_model -> get_stop_list();
		$this->load->view('list/soft_stop', $data);
	}

	public function kaspersky()
	{
		$data['kaspersky'] = $this -> soft_model -> get_kaspersky_list();
		$this->load->view('list/kaspersky', $data);
	}

	public function printer()
	{
		$data['printer'] = $this -> soft_model -> get_printer_list();
		$this->load->view('list/printer', $data);
	}
	
	public function software()
	{
		$data['software'] = $this -> soft_model -> get_software_list();
		$this->load->view('list/software', $data);
	}

	public function xp_down()
	{
		$data['xp_down'] = $this -> soft_model -> get_xpdown_list();
		$this->load->view('list/xp_down', $data);
	}

	public function ms_up()
	{
		$data['ms_up'] = $this -> soft_model -> get_ms_up_list();
		$this->load->view('list/ms_up', $data);
	}

	public function quark_up()
	{
		$data['quark_up'] = $this -> soft_model -> get_quark_up_list();
		$this->load->view('list/quark_up', $data);
	}

	public function asiafont_up()
	{
		$data['asiafont_up'] = $this -> soft_model -> get_asiafont_up_list();
		$this->load->view('list/asiafont_up', $data);
	}

	public function soft_account()
	{
		$data['soft_account'] = $this -> soft_model -> get_soft_account_list();
		$this->load->view('list/soft_account', $data);
	}

	/*
	 * softmanage 조회
	 */
	public function view()
	{
		$id = $this->uri->segment(3);
		$data['views'] = $this->soft_model->get_view($id);
		
		// view 호출
		$this->load->view('list/soft_view', $data);
	}
	
	/*
	 *  softmanage 등록
	 */
	public function write()
	{
		if ( $_POST )
		{
			// 글쓰기 POST 전송 시

			$content = $this->input->post('content', TRUE);
			$created_on = $this->input->post('created_on', TRUE);
			$due_date = $this->input->post('due_date', TRUE);

			$this->soft_model->insert_soft($content, $created_on, $due_date);

			redirect(base_url().'main/lists/');

			exit;
		}
		else
		{
			// 쓰기 폼 view 호출
			$this->load->view('list/soft_write');
		}
	}

	/*
	 * softmanage 삭제
	 */
	public function delete()
	{
		// 게시물 번호에 해당하는 게시물 삭제
		$id = $this->uri->segment(3);

		$this->soft_model->delete_soft($id);

		redirect(base_url().'main/lists/');
	}


}














