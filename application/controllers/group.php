<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->allow=array();
        $this->load->database();
        $this->load->model('user_model');
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

    /*
     * 경영지원본부 불러오기
     */
    public function g_gs()
    {
        $data['g_gs'] = $this -> user_model -> get_g_gs();
        $this->load->view('list/computational/g_gs/g_list', $data);
    }
    /*
     * 경영지원본부 전산기록 상세페이지
     */
    public function g_view()
    {
        $user_idx = $this->uri->segment(3);
        $data['g_view'] = $this -> user_model -> get_g_view($user_idx);

        $this->load->view('list/computational/g_gs/g_view', $data);
    }
    /*
     * 그룹원 전산 수정(추가)
     */
    function g_register() {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this -> soft_model -> get_view_progress($idx);

        // view 호출
        $this -> load -> view('list/computational/g_gs/g_register', $data);

        if ( $_POST )
        {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $product_name = trim($this->input->post("product_name"));
            $version = trim($this->input->post("version"));
            $company = trim($this->input->post("company"));
            $purpose = trim($this->input->post("purpose"));
            $target = trim($this->input->post("target"));
            $compatibility = trim($this->input->post("compatibility"));
            $sirial_num = trim($this->input->post("sirial_num"));
            $package = trim($this->input->post("package"));
            $license_numb = trim($this->input->post("license_numb"));
            $keep_place = trim($this->input->post("keep_place"));
            $use_num = trim($this->input->post("use_num"));
            $remarks = trim($this->input->post("remarks"));

            $params = array(
                "product_name" => $product_name,
                "version" => $version,
                "company" => $company,
                "purpose" => $purpose,
                "target" => $target,
                "compatibility" => $compatibility,
                "sirial_num" => $sirial_num,
                "package" => $package,
                "license_numb" => $license_numb,
                "keep_place" => $keep_place,
                "use_num" => $use_num,
                "remarks" => $remarks,
                "idx" => $idx
            );

            $this->soft_model->modify_soft_progress($params);

            alert('게시물 수정 완료');
            redirect(base_url().'soft/progress_list/');

            exit;
        }
    }

    /*
     * 경영지원본부 그룹원 등록
     */
    public function g_user_register()
    {
        if ( $_POST )
        {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $user_name = $this->input->post('user_name', TRUE);
            $user_email = $this->input->post('user_email', TRUE);
            $user_group = $this->input->post('user_group', TRUE);
            $user_grade = $this->input->post('user_grade', TRUE);
            $user_number = $this->input->post('user_number', TRUE);
            $group_key = $this->input->post('group_key', TRUE);

            $this->user_model->insert_gs_user(
                $user_name, $user_email, $user_group,$user_grade,$user_number,$group_key
            );

            alert('게시물 등록 완료');
            redirect(base_url().'group/g_gs/');

            exit;
        }
        else
        {
            $user_idx = $this->uri->segment(3);
            // 쓰기 폼 view 호출
            $this->load->view('list/computational/g_gs/g_user_register');
        }
    }

}














