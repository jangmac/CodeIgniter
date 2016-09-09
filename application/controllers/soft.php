<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soft extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->allow=array();
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

    /*
     * softmanage 목록
     */
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
     *  softmanage 등록
     */
    public function write()
    {
        if ( $_POST )
        {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');
            
            $product_name = $this->input->post('product_name', TRUE);
            $version = $this->input->post('version', TRUE);
            $company = $this->input->post('company', TRUE);
            $purpose = $this->input->post('purpose', TRUE);
            $target = $this->input->post('target', TRUE);
            $compatibility = $this->input->post('compatibility', TRUE);
            $sirial_num = $this->input->post('sirial_num', TRUE);
            $package = $this->input->post('package', TRUE);
            $license_numb = $this->input->post('license_numb', TRUE);
            $keep_place = $this->input->post('keep_place', TRUE);
            $use_num = $this->input->post('use_num', TRUE);
            $remarks = $this->input->post('remarks', TRUE);

            $this->soft_model->insert_soft(
                $product_name, $version, $company,$purpose,$target,$compatibility,$sirial_num,
                $package,$license_numb,$keep_place,$use_num,$remarks
            );

            alert('게시물 등록 완료');
            redirect(base_url().'soft/progress_list/');

            exit;
        }
        else
        {
            // 쓰기 폼 view 호출
            $this->load->view('list/soft_write');
        }
    }

    public function modify()
    {


        if ( $_POST )
        {

            $this->load->helper('alert');

            $product_name = $this->input->post('product_name', TRUE);
            $version = $this->input->post('version', TRUE);
            $company = $this->input->post('company', TRUE);
            $purpose = $this->input->post('purpose', TRUE);

            $data['views'] = $this -> soft_model -> modify_soft();
            $this->soft_model->modify_soft($product_name, $version, $company,$purpose);

            alert('게시물 수정 완료');
            redirect(base_url().'soft/progress_list/');

            exit;
        }
        else
        {
            // 쓰기 폼 view 호출
            $this->load->view('list/soft_modify');
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














