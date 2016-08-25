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
		$this -> load -> library('pagination');

		// 페이지 네이션 설정
		//$config['base_url'] = 'http://www.soft.com';
		// 페이징 주소
		$config['total_rows'] = $this -> soft_model -> get_progress_list($this -> uri -> segment(3), 'count');
		// 게시물 전체 개수
		$config['per_page'] = 5;
		// 한 페이지에 표시할 게시물 수
		$config['uri_segment'] = 5;
		// 페이지 번호가 위치한 세그먼트

		// 페이지네이션 초기화
		$this -> pagination -> initialize($config);
		// 페이지 링크를 생성하여 view에서 사용하 변수에 할당
		$data['pagination'] = $this -> pagination -> create_links();

		// 게시물 목록을 불러오기 위한 offset, limit 값 가져오기
		$page = $this -> uri -> segment(5, 1);

		if ($page > 1) {
			$start = (($page / $config['per_page'])) * $config['per_page'];
		} else {
			$start = ($page - 1) * $config['per_page'];
		}

		$limit = $config['per_page'];

		$data['progress_list'] = $this -> soft_model -> get_progress_list($this -> uri -> segment(3), '', $start, $limit);
		$this->load->view('list/soft_progress', $data);
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














