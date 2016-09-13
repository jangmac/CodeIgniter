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
        $this->load->view('list/soft_progress/soft_progress', $data);
    }

    public function keep_list()
    {
        $data['keep_list'] = $this -> soft_model -> get_keep_list();
        $this->load->view('list/soft_keep/soft_keep', $data);
    }

    public function stop_list()
    {
        $data['stop_list'] = $this -> soft_model -> get_stop_list();
        $this->load->view('list/soft_stop/soft_stop', $data);
    }

    public function kaspersky()
    {
        $data['kaspersky'] = $this -> soft_model -> get_kaspersky_list();
        $this->load->view('list/kaspersky/kaspersky', $data);
    }

    public function printer()
    {
        $data['printer'] = $this -> soft_model -> get_printer_list();
        $this->load->view('list/printer/printer', $data);
    }

    public function software()
    {
        $data['software'] = $this -> soft_model -> get_software_list();
        $this->load->view('list/software/software', $data);
    }

    public function xp_down()
    {
        $data['xp_down'] = $this -> soft_model -> get_xpdown_list();
        $this->load->view('list/xp/xp_down', $data);
    }

    public function ms_up()
    {
        $data['ms_up'] = $this -> soft_model -> get_ms_up_list();
        $this->load->view('list/ms/ms_up', $data);
    }

    public function quark_up()
    {
        $data['quark_up'] = $this -> soft_model -> get_quark_up_list();
        $this->load->view('list/quark/quark_up', $data);
    }

    public function asiafont_up()
    {
        $data['asiafont_up'] = $this -> soft_model -> get_asiafont_up_list();
        $this->load->view('list/asiafont/asiafont_up', $data);
    }

    public function soft_account()
    {
        $data['soft_account'] = $this -> soft_model -> get_soft_account_list();
        $this->load->view('list/account/soft_account', $data);
    }

    /*
     *  soft_progress 등록
     */
    public function write_progress()
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

            $this->soft_model->insert_soft_progress(
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
            $this->load->view('list/soft_progress/progress_write');
        }
    }

    /**
     * soft_progress 데이터 수정
     */
    function view_progress() {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this -> soft_model -> get_view_progress($idx);

        // view 호출
        $this -> load -> view('list/soft_progress/progress_detail', $data);

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
     * softmanage 삭제
     */
    public function delete()
    {
        // 게시물 번호에 해당하는 게시물 삭제
        $id = $this->uri->segment(3);

        $this->soft_model->delete_soft($id);

        redirect(base_url().'main/lists/');
    }

    /*
     *  soft_keep 등록
     */
    public function write_keep()
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
            $remarks = $this->input->post('remarks', TRUE);

            $this->soft_model->insert_soft_keep(
                $product_name, $version, $company,$purpose,$target,$compatibility,$sirial_num,
                $package,$license_numb,$keep_place,$remarks
            );

            alert('게시물 등록 완료');
            redirect(base_url().'soft/keep_list/');

            exit;
        }
        else
        {
            // 쓰기 폼 view 호출
            $this->load->view('list/soft_keep/keep_write');
        }
    }

    /**
     * soft_keep 데이터 수정
     */
    function view_keep() {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this -> soft_model -> get_view_keep($idx);

        // view 호출
        $this -> load -> view('list/soft_keep/keep_detail', $data);

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
                "remarks" => $remarks,
                "idx" => $idx
            );

            $this->soft_model->modify_soft_keep($params);

            alert('게시물 수정 완료');
            redirect(base_url().'soft/keep_list/');

            exit;
        }
    }

    /*
     *  soft_stop 등록
     */
    public function write_stop()
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
            $remarks = $this->input->post('remarks', TRUE);

            $this->soft_model->insert_soft_stop(
                $product_name, $version, $company,$purpose,$target,$compatibility,$sirial_num,
                $package,$license_numb,$keep_place,$remarks
            );

            alert('게시물 등록 완료');
            redirect(base_url().'soft/stop_list/');

            exit;
        }
        else
        {
            // 쓰기 폼 view 호출
            $this->load->view('list/soft_stop/stop_write');
        }
    }

    /**
     * soft_stop 데이터 수정
     */
    function view_stop() {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this -> soft_model -> get_view_stop($idx);

        // view 호출
        $this -> load -> view('list/soft_stop/stop_detail', $data);

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
                "remarks" => $remarks,
                "idx" => $idx
            );

            $this->soft_model->modify_soft_stop($params);

            alert('게시물 수정 완료');
            redirect(base_url().'soft/stop_list/');

            exit;
        }
    }

    /*
     *  kaspersky 등록
     */
    public function write_kaspersky()
    {
        if ( $_POST )
        {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $product_name = $this->input->post('product_name', TRUE);
            $version = $this->input->post('version', TRUE);
            $company = $this->input->post('company', TRUE);
            $purpose = $this->input->post('purpose', TRUE);
            $compatibility = $this->input->post('compatibility', TRUE);
            $duration = $this->input->post('duration', TRUE);
            $sirial_num = $this->input->post('sirial_num', TRUE);
            $package = $this->input->post('package', TRUE);
            $license_numb = $this->input->post('license_numb', TRUE);
            $keep_place = $this->input->post('keep_place', TRUE);
            $remarks = $this->input->post('remarks', TRUE);

            $this->soft_model->insert_kaspersky(
                $product_name, $version, $company,$purpose,$compatibility,$duration,$sirial_num,
                $package,$license_numb,$keep_place,$remarks
            );

            alert('게시물 등록 완료');
            redirect(base_url().'soft/kaspersky/');

            exit;
        }
        else
        {
            // 쓰기 폼 view 호출
            $this->load->view('list/kaspersky/kaspersky_write');
        }
    }

    /**
     * kaspersky 데이터 수정
     */
    function view_kaspersky() {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this -> soft_model -> get_view_kaspersky($idx);

        // view 호출
        $this -> load -> view('list/kaspersky/kaspersky_detail', $data);

        if ( $_POST )
        {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $product_name = trim($this->input->post("product_name"));
            $version = trim($this->input->post("version"));
            $company = trim($this->input->post("company"));
            $purpose = trim($this->input->post("purpose"));
            $compatibility = trim($this->input->post("compatibility"));
            $duration = trim($this->input->post("duration"));
            $sirial_num = trim($this->input->post("sirial_num"));
            $package = trim($this->input->post("package"));
            $license_numb = trim($this->input->post("license_numb"));
            $keep_place = trim($this->input->post("keep_place"));
            $remarks = trim($this->input->post("remarks"));

            $params = array(
                "product_name" => $product_name,
                "version" => $version,
                "company" => $company,
                "purpose" => $purpose,
                "compatibility" => $compatibility,
                "duration" => $duration,
                "sirial_num" => $sirial_num,
                "package" => $package,
                "license_numb" => $license_numb,
                "keep_place" => $keep_place,
                "remarks" => $remarks,
                "idx" => $idx
            );

            $this->soft_model->modify_kaspersky($params);

            alert('게시물 수정 완료');
            redirect(base_url().'soft/kaspersky/');

            exit;
        }
    }

    /*
     *  printer 등록
     */
    public function write_printer()
    {
        if ( $_POST )
        {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $product_name = $this->input->post('product_name', TRUE);
            $use_place = $this->input->post('use_place', TRUE);
            $term = $this->input->post('term', TRUE);
            $cost = $this->input->post('cost', TRUE);
            $color_a4 = $this->input->post('color_a4', TRUE);
            $color_a3 = $this->input->post('color_a3', TRUE);
            $black_a4 = $this->input->post('black_a4', TRUE);
            $black_a3 = $this->input->post('black_a3', TRUE);

            $this->soft_model->insert_printer(
                $product_name, $use_place, $term,$cost,$color_a4,$color_a3,$black_a4, $black_a3
            );

            alert('게시물 등록 완료');
            redirect(base_url().'soft/printer/');

            exit;
        }
        else
        {
            // 쓰기 폼 view 호출
            $this->load->view('list/printer/printer_write');
        }
    }

    /**
     * printer 데이터 수정
     */
    function view_printer() {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this -> soft_model -> get_view_printer($idx);

        // view 호출
        $this -> load -> view('list/printer/printer_detail', $data);

        if ( $_POST )
        {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $product_name = trim($this->input->post("product_name"));
            $use_place = trim($this->input->post("use_place"));
            $term = trim($this->input->post("term"));
            $cost = trim($this->input->post("cost"));
            $color_a4 = trim($this->input->post("color_a4"));
            $color_a3 = trim($this->input->post("color_a3"));
            $black_a4 = trim($this->input->post("black_a4"));
            $black_a3 = trim($this->input->post("black_a3"));

            $params = array(
                "product_name" => $product_name,
                "use_place" => $use_place,
                "term" => $term,
                "cost" => $cost,
                "color_a4" => $color_a4,
                "color_a3" => $color_a3,
                "black_a4" => $black_a4,
                "black_a3" => $black_a3,
                "idx" => $idx
            );

            $this->soft_model->modify_printer($params);

            alert('게시물 수정 완료');
            redirect(base_url().'soft/printer/');

            exit;
        }
    }

    /*
     *  xp_down 등록
     */
    public function write_xp_down()
    {
        if ( $_POST )
        {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $window7 = $this->input->post('window7', TRUE);

            $this->soft_model->insert_xp_down(
                $window7
            );

            alert('게시물 등록 완료');
            redirect(base_url().'soft/xp_down/');

            exit;
        }
        else
        {
            // 쓰기 폼 view 호출
            $this->load->view('list/xp/xp_down_write');
        }
    }

    /**
     * xp_down 데이터 수정
     */
    function view_xp_down() {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this -> soft_model -> get_view_xp_down($idx);

        // view 호출
        $this -> load -> view('list/xp/xp_down_detail', $data);

        if ( $_POST )
        {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $window7 = trim($this->input->post("window7"));

            $params = array(
                "window7" => $window7,
                "idx" => $idx
            );

            $this->soft_model->modify_xp_down($params);

            alert('게시물 수정 완료');
            redirect(base_url().'soft/xp_down/');

            exit;
        }
    }

    
    /*
         *  ms_up 등록
         */
    public function write_ms_up()
    {
        if ( $_POST )
        {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $office2003_pro = $this->input->post('office2003_pro', TRUE);
            $office2007_pro = $this->input->post('office2007_pro', TRUE);

            $this->soft_model->insert_ms_up(
                $office2003_pro,
                $office2007_pro
            );

            alert('게시물 등록 완료');
            redirect(base_url().'soft/ms_up/');

            exit;
        }
        else
        {
            // 쓰기 폼 view 호출
            $this->load->view('list/ms/ms_up_write');
        }
    }

    /**
     * ms_up 데이터 수정
     */
    function view_ms_up() {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this -> soft_model -> get_view_ms_up($idx);

        // view 호출
        $this -> load -> view('list/ms/ms_up_detail', $data);

        if ( $_POST )
        {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $office2003_pro = trim($this->input->post("office2003_pro"));
            $office2007_pro = trim($this->input->post("office2007_pro"));

            $params = array(
                "office2003_pro" => $office2003_pro,
                "office2007_pro" => $office2007_pro,
                "idx" => $idx
            );

            $this->soft_model->modify_ms_up($params);

            alert('게시물 수정 완료');
            redirect(base_url().'soft/ms_up/');

            exit;
        }
    }
    
    /*
     *  quark_up 등록
     */
    public function write_quark_up()
    {
        if ( $_POST )
        {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $quark3 = $this->input->post('quark3', TRUE);
            $quark4 = $this->input->post('quark4', TRUE);
            $quark8 = $this->input->post('quark8', TRUE);
            $quark9 = $this->input->post('quark9', TRUE);
            $quark2015 = $this->input->post('quark2015', TRUE);
            $quark2015_serial = $this->input->post('quark2015_serial', TRUE);
            $sejong_font = $this->input->post('sejong_font', TRUE);
            $user = $this->input->post('user', TRUE);

            $this->soft_model->insert_quark_up(
                $quark3,
                $quark4,
                $quark8,
                $quark9,
                $quark2015,
                $quark2015_serial,
                $sejong_font,
                $user
            );

            alert('게시물 등록 완료');
            redirect(base_url().'soft/quark_up/');

            exit;
        }
        else
        {
            // 쓰기 폼 view 호출
            $this->load->view('list/quark/quark_up_write');
        }
    }

    /**
     * quark_up 데이터 수정
     */
    function view_quark_up() {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this -> soft_model -> get_view_quark_up($idx);

        // view 호출
        $this -> load -> view('list/quark/quark_up_detail', $data);

        if ( $_POST )
        {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $quark3 = trim($this->input->post("quark3"));
            $quark4 = trim($this->input->post("quark4"));
            $quark8 = trim($this->input->post("quark8"));
            $quark9 = trim($this->input->post("quark9"));
            $quark2015 = trim($this->input->post("quark2015"));
            $quark2015_serial = trim($this->input->post("quark2015_serial"));
            $sejong_font = trim($this->input->post("sejong_font"));
            $user = trim($this->input->post("user"));

            $params = array(
                "quark3" => $quark3,
                "quark4" => $quark4,
                "quark8" => $quark8,
                "quark9" => $quark9,
                "quark2015" => $quark2015,
                "quark2015_serial" => $quark2015_serial,
                "sejong_font" => $sejong_font,
                "user" => $user,
                "idx" => $idx
            );

            $this->soft_model->modify_quark_up($params);

            alert('게시물 수정 완료');
            redirect(base_url().'soft/quark_up/');

            exit;
        }
    }

    /*
     *  asiafont_up 등록
     */
    public function write_asiafont_up()
    {
        if ( $_POST )
        {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $asiafont2008 = $this->input->post('asiafont2008', TRUE);
            $integrated_Package = $this->input->post('integrated_Package', TRUE);

            $this->soft_model->insert_asiafont_up(
                $asiafont2008,
                $integrated_Package
            );

            alert('게시물 등록 완료');
            redirect(base_url().'soft/asiafont_up/');

            exit;
        }
        else
        {
            // 쓰기 폼 view 호출
            $this->load->view('list/asiafont/asiafont_up_write');
        }
    }

    /**
     * asiafont_up 데이터 수정
     */
    function view_asiafont_up() {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this -> soft_model -> get_view_asiafont_up($idx);

        // view 호출
        $this -> load -> view('list/asiafont/asiafont_up_detail', $data);

        if ( $_POST )
        {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $asiafont2008 = trim($this->input->post("asiafont2008"));
            $integrated_Package = trim($this->input->post("integrated_Package"));

            $params = array(
                "asiafont2008" => $asiafont2008,
                "integrated_Package" => $integrated_Package,
                "idx" => $idx
            );

            $this->soft_model->modify_asiafont_up($params);

            alert('게시물 수정 완료');
            redirect(base_url().'soft/asiafont_up/');

            exit;
        }
    }
    
}














