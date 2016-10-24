<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soft extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->allow = array();
        $this->load->database();
        $this->load->model('soft_model');
        $this->load->helper(array('url', 'date'));
    }

    /*
     *헤더 푸터 불러오기
     */
    public function _remap($method)
    {
        // 헤더 include
        $this->load->view('header');

        if (method_exists($this, $method)) {
            $this->{"{$method}"}();
        }

        // 푸터 include
        $this->load->view('footer');
    }

    /*
     * softmanage 목록
     */
    public function progress_list()
    {
        $data['progress_list'] = $this->soft_model->get_progress_list();

        $this->load->view('list/soft_progress/soft_progress', $data);
    }

    public function progress_list_window()
    {
        $data['progress_list'] = $this->soft_model->get_progress_window_list();

        $this->load->view('list/soft_progress/soft_progress', $data);
    }

    public function progress_list_ms()
    {
        $data['progress_list'] = $this->soft_model->get_progress_ms_list();

        $this->load->view('list/soft_progress/soft_progress', $data);
    }

    public function progress_list_hangul()
    {
        $data['progress_list'] = $this->soft_model->get_progress_hangul_list();

        $this->load->view('list/soft_progress/soft_progress', $data);
    }

    public function progress_list_etc()
    {
        $data['progress_list'] = $this->soft_model->get_progress_etc_list();

        $this->load->view('list/soft_progress/soft_progress', $data);
    }

    public function keep_list()
    {
        $data['keep_list'] = $this->soft_model->get_keep_list();
        $this->load->view('list/soft_keep/soft_keep', $data);
    }

    public function stop_list()
    {
        $data['stop_list'] = $this->soft_model->get_stop_list();
        $this->load->view('list/soft_stop/soft_stop', $data);
    }

    public function kaspersky()
    {
        $data['kaspersky'] = $this->soft_model->get_kaspersky_list();
        $this->load->view('list/kaspersky/kaspersky', $data);
    }

    public function printer()
    {
        $data['printer'] = $this->soft_model->get_printer_list();
        $this->load->view('list/printer/printer', $data);
    }

    public function software()
    {
        $data['software'] = $this->soft_model->get_software_list();
        $this->load->view('list/software/software', $data);
    }

    public function xp_down()
    {
        $data['xp_down'] = $this->soft_model->get_xpdown_list();
        $this->load->view('list/xp/xp_down', $data);
    }

    public function ms_up()
    {
        $data['ms_up'] = $this->soft_model->get_ms_up_list();
        $this->load->view('list/ms/ms_up', $data);
    }

    public function quark_up()
    {
        $data['quark_up'] = $this->soft_model->get_quark_up_list();
        $this->load->view('list/quark/quark_up', $data);
    }

    public function asiafont_up()
    {
        $data['asiafont_up'] = $this->soft_model->get_asiafont_up_list();
        $this->load->view('list/asiafont/asiafont_up', $data);
    }

    public function use_moniter()
    {
        $data['use_moniter'] = $this->soft_model->get_use_moniter_list();
        $this->load->view('list/computational/using_soft/use_moniter', $data);
    }

    public function use_pc()
    {
        $data['use_pc'] = $this->soft_model->get_use_pc_list();
        $this->load->view('list/computational/using_soft/use_pc', $data);
    }

    public function use_keyboard()
    {
        $data['use_keyboard'] = $this->soft_model->get_use_keyboard_list();
        $this->load->view('list/computational/using_soft/use_keyboard', $data);
    }

    public function use_mouse()
    {
        $data['use_mouse'] = $this->soft_model->get_use_mouse_list();
        $this->load->view('list/computational/using_soft/use_mouse', $data);
    }

    public function use_headset()
    {
        $data['use_headset'] = $this->soft_model->get_use_headset_list();
        $this->load->view('list/computational/using_soft/use_headset', $data);
    }

    public function use_cell()
    {
        $data['use_cell'] = $this->soft_model->get_use_cell_list();
        $this->load->view('list/computational/using_soft/use_cell', $data);
    }
    
    public function use_window()
    {
        $data['use_window'] = $this->soft_model->get_use_window_list();
        $this->load->view('list/computational/using_soft/use_window', $data);
    }
    
    public function use_ms()
    {
        $data['use_ms'] = $this->soft_model->get_use_ms_list();
        $this->load->view('list/computational/using_soft/use_ms', $data);
    }
    
    public function use_hangul()
    {
        $data['use_hangul'] = $this->soft_model->get_use_hangul_list();
        $this->load->view('list/computational/using_soft/use_hangul', $data);
    }
    
    
    /*
     * 전산실 목록불러오기
     * PC,모니터,키보드,마우스
     */

    public function keep_pc()
    {
        $data['keep_pc'] = $this->soft_model->get_keep_pc();
        $this->load->view('list/jeonsan/j_item_pc', $data);
    }

    public function keep_moniter()
    {
        $data['keep_moniter'] = $this->soft_model->get_keep_moniter();
        $this->load->view('list/jeonsan/j_item_moniter', $data);
    }

    public function keep_keyboard()
    {
        $data['keep_keyboard'] = $this->soft_model->get_keep_keyboard();
        $this->load->view('list/jeonsan/j_item_keyboard', $data);
    }

    public function keep_mouse()
    {
        $data['keep_mouse'] = $this->soft_model->get_keep_mouse();
        $this->load->view('list/jeonsan/j_item_mouse', $data);
    }

    public function keep_headset()
    {
        $data['keep_headset'] = $this->soft_model->get_keep_headset();
        $this->load->view('list/jeonsan/j_item_headset', $data);
    }

    public function keep_cell()
    {
        $data['keep_cell'] = $this->soft_model->get_keep_cell();
        $this->load->view('list/jeonsan/j_item_cell', $data);
    }

    /*
     *  soft_progress 등록
     */
    public function write_progress()
    {
        if ($_POST) {
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
                $product_name, $version, $company, $purpose, $target, $compatibility, $sirial_num,
                $package, $license_numb, $keep_place, $use_num, $remarks
            );

            alert('게시물 등록 완료', '../progress_list/');

            exit;
        } else {
            // 쓰기 폼 view 호출
            $this->load->view('list/soft_progress/progress_write');
        }
    }

    /**
     * soft_progress 데이터 수정
     */
    function view_progress()
    {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->soft_model->get_view_progress($idx);

        // view 호출
        $this->load->view('list/soft_progress/progress_detail', $data);


        if ($_POST) {
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

            alert('게시물 수정 완료', '../progress_list');

            exit;
        }
    }

    /*
     * soft_progress 데이터 삭제
     */
    public function soft_progress_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->soft_model->delete_soft_progress($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.', '../progress_list');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.', '../progress_list');
            exit;
        }
    }

    /*
     *  soft_keep 등록
     */
    public function write_keep()
    {
        if ($_POST) {
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
                $product_name, $version, $company, $purpose, $target, $compatibility, $sirial_num,
                $package, $license_numb, $keep_place, $remarks
            );

            alert('게시물 등록 완료', '../keep_list/');

            exit;
        } else {
            // 쓰기 폼 view 호출
            $this->load->view('list/soft_keep/keep_write');
        }
    }

    /**
     * soft_keep 데이터 수정
     */
    function view_keep()
    {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->soft_model->get_view_keep($idx);

        // view 호출
        $this->load->view('list/soft_keep/keep_detail', $data);

        if ($_POST) {
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

            alert('게시물 수정 완료', '../keep_list/');

            exit;
        }
    }

    /*
     * soft_keep 데이터 삭제
     */
    public function soft_keep_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->soft_model->delete_soft_keep($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.', '../keep_list');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.', '../keep_list');
            exit;
        }
    }

    /*
     *  soft_stop 등록
     */
    public function write_stop()
    {
        if ($_POST) {
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
                $product_name, $version, $company, $purpose, $target, $compatibility, $sirial_num,
                $package, $license_numb, $keep_place, $remarks
            );

            alert('게시물 등록 완료', '../stop_list/');

            exit;
        } else {
            // 쓰기 폼 view 호출
            $this->load->view('list/soft_stop/stop_write');
        }
    }

    /**
     * soft_stop 데이터 수정
     */
    function view_stop()
    {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->soft_model->get_view_stop($idx);

        // view 호출
        $this->load->view('list/soft_stop/stop_detail', $data);

        if ($_POST) {
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

            alert('게시물 수정 완료', '../stop_list/');

            exit;
        }
    }

    /*
     * soft_stop 데이터 삭제
     */
    public function soft_stop_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->soft_model->delete_soft_stop($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.', '../stop_list');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.', '../stop_list');
            exit;
        }
    }

    /*
     *  kaspersky 등록
     */
    public function write_kaspersky()
    {
        if ($_POST) {
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
                $product_name, $version, $company, $purpose, $compatibility, $duration, $sirial_num,
                $package, $license_numb, $keep_place, $remarks
            );

            alert('게시물 등록 완료', '../kaspersky/');

            exit;
        } else {
            // 쓰기 폼 view 호출
            $this->load->view('list/kaspersky/kaspersky_write');
        }
    }

    /**
     * kaspersky 데이터 수정
     */
    function view_kaspersky()
    {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->soft_model->get_view_kaspersky($idx);

        // view 호출
        $this->load->view('list/kaspersky/kaspersky_detail', $data);

        if ($_POST) {
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

            alert('게시물 수정 완료', '../kaspersky/');

            exit;
        }
    }

    /*
     * kaspersky 데이터 삭제
     */
    public function kaspersky_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->soft_model->delete_kaspersky($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.', '../kaspersky');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.', '../kaspersky');
            exit;
        }
    }

    /*
     *  printer 등록
     */
    public function write_printer()
    {
        if ($_POST) {
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
                $product_name, $use_place, $term, $cost, $color_a4, $color_a3, $black_a4, $black_a3
            );

            alert('게시물 등록 완료', '../printer/');

            exit;
        } else {
            // 쓰기 폼 view 호출
            $this->load->view('list/printer/printer_write');
        }
    }

    /**
     * printer 데이터 수정
     */
    function view_printer()
    {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->soft_model->get_view_printer($idx);

        // view 호출
        $this->load->view('list/printer/printer_detail', $data);

        if ($_POST) {
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

            alert('게시물 수정 완료', '../printer/');

            exit;
        }
    }

    /*
     * printer 데이터 삭제
     */
    public function printer_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->soft_model->delete_printer($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.', '../printer');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.', '../printer');
            exit;
        }
    }

    /*
     *  xp_down 등록
     */
    public function write_xp_down()
    {
        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $window7 = $this->input->post('window7', TRUE);

            $this->soft_model->insert_xp_down(
                $window7
            );

            alert('게시물 등록 완료', '../xp_down/');

            exit;
        } else {
            // 쓰기 폼 view 호출
            $this->load->view('list/xp/xp_down_write');
        }
    }

    /**
     * xp_down 데이터 수정
     */
    function view_xp_down()
    {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->soft_model->get_view_xp_down($idx);

        // view 호출
        $this->load->view('list/xp/xp_down_detail', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $window7 = trim($this->input->post("window7"));

            $params = array(
                "window7" => $window7,
                "idx" => $idx
            );

            $this->soft_model->modify_xp_down($params);

            alert('게시물 수정 완료', '../xp_down/');

            exit;
        }
    }

    /*
     * xp_down 데이터 삭제
     */
    public function xp_down_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->soft_model->delete_xp_down($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.', '../xp_down');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.', '../xp_down');
            exit;
        }
    }

    /*
     * ms_up 등록
     */
    public function write_ms_up()
    {
        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $office2003_pro = $this->input->post('office2003_pro', TRUE);
            $office2007_pro = $this->input->post('office2007_pro', TRUE);

            $this->soft_model->insert_ms_up(
                $office2003_pro,
                $office2007_pro
            );

            alert('게시물 등록 완료', '../ms_up/');

            exit;
        } else {
            // 쓰기 폼 view 호출
            $this->load->view('list/ms/ms_up_write');
        }
    }

    /**
     * ms_up 데이터 수정
     */
    function view_ms_up()
    {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->soft_model->get_view_ms_up($idx);

        // view 호출
        $this->load->view('list/ms/ms_up_detail', $data);

        if ($_POST) {
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

            alert('게시물 수정 완료', '../ms_up/');

            exit;
        }
    }

    /*
     * ms_up 데이터 삭제
     */
    public function ms_up_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->soft_model->delete_ms_up($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.', '../ms_up');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.', '../ms_up');
            exit;
        }
    }

    /*
     *  quark_up 등록
     */
    public function write_quark_up()
    {
        if ($_POST) {
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

            alert('게시물 등록 완료', '../quark_up/');

            exit;
        } else {
            // 쓰기 폼 view 호출
            $this->load->view('list/quark/quark_up_write');
        }
    }

    /**
     * quark_up 데이터 수정
     */
    function view_quark_up()
    {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->soft_model->get_view_quark_up($idx);

        // view 호출
        $this->load->view('list/quark/quark_up_detail', $data);

        if ($_POST) {
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

            alert('게시물 수정 완료', '../quark_up/');

            exit;
        }
    }

    /*
     * quark_up 데이터 삭제
     */
    public function quark_up_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->soft_model->delete_quark_up($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.', '../quark_up');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.', '../quark_up');
            exit;
        }
    }

    /*
     *  asiafont_up 등록
     */
    public function write_asiafont_up()
    {
        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $asiafont2008 = $this->input->post('asiafont2008', TRUE);
            $integrated_Package = $this->input->post('integrated_Package', TRUE);

            $this->soft_model->insert_asiafont_up(
                $asiafont2008,
                $integrated_Package
            );

            alert('게시물 등록 완료', '../asiafont_up/');

            exit;
        } else {
            // 쓰기 폼 view 호출
            $this->load->view('list/asiafont/asiafont_up_write');
        }
    }

    /**
     * asiafont_up 데이터 수정
     */
    function view_asiafont_up()
    {
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->soft_model->get_view_asiafont_up($idx);

        // view 호출
        $this->load->view('list/asiafont/asiafont_up_detail', $data);

        if ($_POST) {
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

            alert('게시물 수정 완료', '../asiafont_up/');

            exit;
        }
    }

    /*
     * asiafont_up 데이터 삭제
     */
    public function asiafont_up_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->soft_model->delete_asiafont_up($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.', '../asiafont_up');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.', '../asiafont_up');
            exit;
        }
    }

    /*
     * 데이터 엑셀 출력 - 모니터 사용리스트
     */

    public function print_moniter_list()
    {
        # PHPExcel 라이브러리 로드
        $this->load->library('PHPExcel');

        # 자료 가져오기
        $this->load->model('soft_model');
        $data['use_moniter_list'] = $this->soft_model->get_use_moniter_list();

        # 시트지정
        $this->phpexcel->setActiveSheetIndex(0);
        $this->phpexcel->getActiveSheet()->setTitle('Sheet1');

        # 테두리
        # 셀 전체(윤곽선 + 안쪽)
        $this->phpexcel->getActiveSheet()->getStyle('A1:J60')->getBorders()
            ->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

        # 전체 폰트 및 텍스트정렬 설정
        $this->phpexcel->getActiveSheet()->duplicateStyleArray(
            array(
                'font' => array(
                    'size' => 11
                ),
                'alignment' => array(
                    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
                    'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER
                )
            ),
            'A1:J60'
        );

        //개행문자처리
        $this->phpexcel->getActiveSheet()->getStyle('A1:J60')->getAlignment()->setWrapText(true);

        # cell 헤더 설정
        $this->phpexcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A1")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFE400");
        $this->phpexcel->getActiveSheet()->setCellValue('A1', '모니터 현재사용내역');
        $this->phpexcel->getActiveSheet()->getStyle('A2:J2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle('A')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A2:J2")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFE400");
        $this->phpexcel->getActiveSheet()->setCellValue('A2', '사용자');
        $this->phpexcel->getActiveSheet()->setCellValue('B2', '제조사');
        $this->phpexcel->getActiveSheet()->setCellValue('C2', '제품명');
        $this->phpexcel->getActiveSheet()->setCellValue('D2', '모델코드');
        $this->phpexcel->getActiveSheet()->setCellValue('E2', '모델명');
        $this->phpexcel->getActiveSheet()->setCellValue('F2', '식별부호');
        $this->phpexcel->getActiveSheet()->setCellValue('G2', '제조년월');
        $this->phpexcel->getActiveSheet()->setCellValue('H2', 'S/N');
        $this->phpexcel->getActiveSheet()->setCellValue('I2', '기안문서번호');
        $this->phpexcel->getActiveSheet()->setCellValue('J2', '구매일');

        // 글자 진하게
        $this->phpexcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);

        /*
         * cell 헤더 병합
         */
        $this->phpexcel->getActiveSheet()->mergeCells('A1:J1');

        /*
         * cell 크기 지정
         */
        $this->phpexcel->getActiveSheet()->getColumnDimension('A')->setWidth(14);
        $this->phpexcel->getActiveSheet()->getColumnDimension('B')->setWidth(12);
        $this->phpexcel->getActiveSheet()->getColumnDimension('C')->setWidth(12);
        $this->phpexcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        $this->phpexcel->getActiveSheet()->getColumnDimension('E')->setWidth(11);
        $this->phpexcel->getActiveSheet()->getColumnDimension('F')->setWidth(24);
        $this->phpexcel->getActiveSheet()->getColumnDimension('G')->setWidth(10);
        $this->phpexcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
        $this->phpexcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
        $this->phpexcel->getActiveSheet()->getColumnDimension('J')->setWidth(11);

        /*
         * cell 데이터 출력
         */
        $num='3';
        foreach ($data['use_moniter_list'] as $lt):
            $this->phpexcel->getActiveSheet()->setCellValue('A'.$num, $lt->user_name);
            $this->phpexcel->getActiveSheet()->setCellValue('B'.$num, $lt->company);
            $this->phpexcel->getActiveSheet()->setCellValue('C'.$num, $lt->product_name);
            $this->phpexcel->getActiveSheet()->setCellValue('D'.$num, $lt->model_code);
            $this->phpexcel->getActiveSheet()->setCellValue('E'.$num, $lt->model_name);
            $this->phpexcel->getActiveSheet()->setCellValue('F'.$num, $lt->identify);
            $this->phpexcel->getActiveSheet()->setCellValue('G'.$num, $lt->produce_ym);
            $this->phpexcel->getActiveSheet()->setCellValue('H'.$num, $lt->soft_num);
            $this->phpexcel->getActiveSheet()->setCellValue('I'.$num, $lt->gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue('J'.$num, $lt->buy_day);
            $num++;
        endforeach;


        # 파일로 내보낸다. 파일명은 'filename.xls' 이다.
        $filename = '모니터현재사용내역_' . date('Ymd') . '.xls';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        # Excel5 포맷(excel 2003 .XLS file)으로 저장한다.
        # 두 번째 매개변수를 'Excel2007'로 바꾸면 Excel 2007 .XLSX 포맷으로 저장한다.
        $objWriter = PHPExcel_IOFactory::createWriter($this->phpexcel, 'Excel5');
        # 이용자가 다운로드하여 컴퓨터 HD에 저장하도록 강제한다.
        $objWriter->save('php://output');
    }

    /*
     * 데이터 엑셀 출력 - 본체(PC) 사용리스트
     */

    public function print_pc_list()
    {
        # PHPExcel 라이브러리 로드
        $this->load->library('PHPExcel');

        # 자료 가져오기
        $this->load->model('soft_model');
        $data['use_pc_list'] = $this->soft_model->get_use_pc_list();

        # 시트지정
        $this->phpexcel->setActiveSheetIndex(0);
        $this->phpexcel->getActiveSheet()->setTitle('Sheet1');

        # 테두리
        # 셀 전체(윤곽선 + 안쪽)
        $this->phpexcel->getActiveSheet()->getStyle('A1:O60')->getBorders()
            ->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

        # 전체 폰트 및 텍스트정렬 설정
        $this->phpexcel->getActiveSheet()->duplicateStyleArray(
            array(
                'font' => array(
                    'size' => 11
                ),
                'alignment' => array(
                    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
                    'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER
                )
            ),
            'A1:O60'
        );

        //개행문자처리
        $this->phpexcel->getActiveSheet()->getStyle('A1:O60')->getAlignment()->setWrapText(true);

        # cell 헤더 설정
        $this->phpexcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A1")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFE400");
        $this->phpexcel->getActiveSheet()->setCellValue('A1', '본체(PC) 현재사용내역');
        $this->phpexcel->getActiveSheet()->getStyle('A2:O2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle('A')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A2:O2")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFE400");
        $this->phpexcel->getActiveSheet()->setCellValue('A2', '사용자');
        $this->phpexcel->getActiveSheet()->setCellValue('B2', '제조사');
        $this->phpexcel->getActiveSheet()->setCellValue('C2', '모델명');
        $this->phpexcel->getActiveSheet()->setCellValue('D2', '모델코드');
        $this->phpexcel->getActiveSheet()->setCellValue('E2', '제조번호');
        $this->phpexcel->getActiveSheet()->setCellValue('F2', '제품코드');
        $this->phpexcel->getActiveSheet()->setCellValue('G2', '식별부호');
        $this->phpexcel->getActiveSheet()->setCellValue('H2', '제조년월');
        $this->phpexcel->getActiveSheet()->setCellValue('I2', 'CPU');
        $this->phpexcel->getActiveSheet()->setCellValue('J2', 'RAM');
        $this->phpexcel->getActiveSheet()->setCellValue('K2', 'HDD(C:)');
        $this->phpexcel->getActiveSheet()->setCellValue('L2', 'HDD(D:)');
        $this->phpexcel->getActiveSheet()->setCellValue('M2', '그래픽카드');
        $this->phpexcel->getActiveSheet()->setCellValue('N2', '기안문서번호');
        $this->phpexcel->getActiveSheet()->setCellValue('O2', '구매일');

        // 글자 진하게
        $this->phpexcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);

        /*
         * cell 헤더 병합
         */
        $this->phpexcel->getActiveSheet()->mergeCells('A1:O1');

        /*
         * cell 크기 지정
         */
        $this->phpexcel->getActiveSheet()->getColumnDimension('A')->setWidth(14);
        $this->phpexcel->getActiveSheet()->getColumnDimension('B')->setWidth(12);
        $this->phpexcel->getActiveSheet()->getColumnDimension('C')->setWidth(11);
        $this->phpexcel->getActiveSheet()->getColumnDimension('D')->setWidth(18);
        $this->phpexcel->getActiveSheet()->getColumnDimension('E')->setWidth(19);
        $this->phpexcel->getActiveSheet()->getColumnDimension('F')->setWidth(19);
        $this->phpexcel->getActiveSheet()->getColumnDimension('G')->setWidth(25);
        $this->phpexcel->getActiveSheet()->getColumnDimension('H')->setWidth(12);
        $this->phpexcel->getActiveSheet()->getColumnDimension('I')->setWidth(43);
        $this->phpexcel->getActiveSheet()->getColumnDimension('J')->setWidth(8);
        $this->phpexcel->getActiveSheet()->getColumnDimension('K')->setWidth(11);
        $this->phpexcel->getActiveSheet()->getColumnDimension('L')->setWidth(11);
        $this->phpexcel->getActiveSheet()->getColumnDimension('M')->setWidth(14);
        $this->phpexcel->getActiveSheet()->getColumnDimension('N')->setWidth(20);
        $this->phpexcel->getActiveSheet()->getColumnDimension('O')->setWidth(19);

        /*
         * cell 데이터 출력
         */
        $num='3';
        foreach ($data['use_pc_list'] as $lt):
            $this->phpexcel->getActiveSheet()->setCellValue('A'.$num, $lt->user_name);
            $this->phpexcel->getActiveSheet()->setCellValue('B'.$num, $lt->company);
            $this->phpexcel->getActiveSheet()->setCellValue('C'.$num, $lt->model_name);
            $this->phpexcel->getActiveSheet()->setCellValue('D'.$num, $lt->model_code);
            $this->phpexcel->getActiveSheet()->setCellValue('E'.$num, $lt->produce_number);
            $this->phpexcel->getActiveSheet()->setCellValue('F'.$num, $lt->product_code);
            $this->phpexcel->getActiveSheet()->setCellValue('G'.$num, $lt->identify);
            $this->phpexcel->getActiveSheet()->setCellValue('H'.$num, $lt->produce_ym);
            $this->phpexcel->getActiveSheet()->setCellValue('I'.$num, $lt->g_cpu);
            $this->phpexcel->getActiveSheet()->setCellValue('J'.$num, $lt->g_ram);
            $this->phpexcel->getActiveSheet()->setCellValue('K'.$num, $lt->g_hdd_c);
            $this->phpexcel->getActiveSheet()->setCellValue('L'.$num, $lt->g_hdd_d);
            $this->phpexcel->getActiveSheet()->setCellValue('M'.$num, $lt->g_graphic);
            $this->phpexcel->getActiveSheet()->setCellValue('N'.$num, $lt->gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue('O'.$num, $lt->buy_day);
            $num++;
        endforeach;


        # 파일로 내보낸다. 파일명은 'filename.xls' 이다.
        $filename = '본체(PC)현재사용내역_' . date('Ymd') . '.xls';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        # Excel5 포맷(excel 2003 .XLS file)으로 저장한다.
        # 두 번째 매개변수를 'Excel2007'로 바꾸면 Excel 2007 .XLSX 포맷으로 저장한다.
        $objWriter = PHPExcel_IOFactory::createWriter($this->phpexcel, 'Excel5');
        # 이용자가 다운로드하여 컴퓨터 HD에 저장하도록 강제한다.
        $objWriter->save('php://output');
    }

}

