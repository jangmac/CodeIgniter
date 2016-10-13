<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->allow = array();
        $this->load->database();
        $this->load->model('user_model');
        $this->load->model('group_model');
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
     * 그룹원 등록
     */
    public function g_user_register()
    {
        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $user_name = $this->input->post('user_name', TRUE);
            $user_email = $this->input->post('user_email', TRUE);
            $user_group = $this->input->post('user_group', TRUE);
            $user_grade = $this->input->post('user_grade', TRUE);
            $user_number = $this->input->post('user_number', TRUE);
            $group_key = $this->input->post('group_key', TRUE);

            $this->user_model->insert_gs_user(
                $user_name, $user_email, $user_group, $user_grade, $user_number, $group_key
            );

            alert('게시물 등록 완료', '../g_gs/');

            exit;
        } else {
            $user_idx = $this->uri->segment(3);
            // 쓰기 폼 view 호출
            $this->load->view('list/computational/register/g_user_register');
        }
    }

    /*
     * 그룹원 수정
     */
    public function g_user_edit()
    {

        $this->load->helper('alert');
        $this->load->model('user_model');

        $idx = $this->uri->segment(3);
        $data['g_user'] = $this->user_model->view_gs_user($idx);

        $this->load->view('list/computational/g_edit', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $user_name = trim($this->input->post("user_name"));
            $user_email = trim($this->input->post("user_email"));
            $user_group = trim($this->input->post("user_group"));
            $user_grade = trim($this->input->post("user_grade"));
            $user_number = trim($this->input->post("user_number"));
            $group_key = trim($this->input->post("group_key"));

            $params = array(
                "user_name" => $user_name,
                "user_email" => $user_email,
                "user_group" => $user_group,
                "user_grade" => $user_grade,
                "user_number" => $user_number,
                "group_key" => $group_key,
                "idx" => $idx
            );

            $this->user_model->edit_gs_user($params);

            alert('그룹원 수정 완료');
            redirect(base_url() . 'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 삭제 (이전페이지이동처리 해야함)
     */
    public function g_user_delete()
    {
        $this->load->helper('alert');
        $this->load->model('user_model');
        // 번호에 해당하는 데이터 가져오기
        $table = 'g_gs';
        $idx = $this->uri->segment(3);
        $return = $this->user_model->delete_gs_user($table, $idx);

        if ($return) {
            alert('그룹원 삭제되었습니다.', '../g_gs');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.', 'group/g_gs');
            exit;
        }
    }

    /*
     * 경영지원본부 그룹원 불러오기
     */
    public function g_gs()
    {
        $data['g_gs'] = $this->user_model->get_g_gs();
        $this->load->view('list/computational/g_gs/g_list', $data);
    }

    /*
     * 광고1부 그룹원 불러오기
     */
    public function g_ad1()
    {
        $data['g_ad1'] = $this->user_model->get_g_ad1();
        $this->load->view('list/computational/g_ad1/g_ad1_list', $data);
    }

    /*
     * 광고2부 그룹원 불러오기
     */
    public function g_ad2()
    {
        $data['g_ad2'] = $this->user_model->get_g_ad2();
        $this->load->view('list/computational/g_ad2/g_ad2_list', $data);
    }

    /*
     * 리크루트 / 편집 그룹원 불러오기
     */
    public function g_em_edit()
    {
        $data['g_em_edit'] = $this->user_model->get_g_em_edit();
        $this->load->view('list/computational/g_em_edit/g_em_edit_list', $data);
    }

    /*
     * 여행사업팀 그룹원 불러오기
     */
    public function g_tv()
    {
        $data['g_tv'] = $this->user_model->get_g_tv();
        $this->load->view('list/computational/g_tv/g_tv_list', $data);
    }

    /*
     * 기타 그룹원 불러오기
     */
    public function g_etc()
    {
        $data['g_etc'] = $this->user_model->get_g_etc();
        $this->load->view('list/computational/g_etc/g_etc_list', $data);
    }

    /*
     * 전산기록 상세페이지
     */
    public function g_view()
    {
        $this->load->model('group_model');

        $user_idx = $this->uri->segment(3);
        //$data['g_view'] = $this->group_model->get_g_view($user_idx);
        $data['view_user'] = $this->group_model->get_view_user($user_idx);
        $data['view_moniter'] = $this->group_model->get_view_moniter($user_idx);
        $data['view_pc'] = $this->group_model->get_view_pc($user_idx);
        $data['view_keyboard'] = $this->group_model->get_view_keyboard($user_idx);
        $data['view_mouse'] = $this->group_model->get_view_mouse($user_idx);
        $data['view_headset'] = $this->group_model->get_view_headset($user_idx);
        $data['view_cell'] = $this->group_model->get_view_cell($user_idx);
        $data['view_window'] = $this->group_model->get_view_window($user_idx);
        $data['view_ms'] = $this->group_model->get_view_ms($user_idx);
        $data['view_hangul'] = $this->group_model->get_view_hangul($user_idx);
        $data['view_security'] = $this->group_model->get_view_security($user_idx);
        $data['view_quark'] = $this->group_model->get_view_quark($user_idx);
        $data['view_adobe'] = $this->group_model->get_view_adobe($user_idx);
        $data['view_font'] = $this->group_model->get_view_font($user_idx);
        $data['view_compress'] = $this->group_model->get_view_compress($user_idx);
        

        $this->load->view('list/computational/g_view', $data);
    }

    /*
     * 그룹원 전산 수정(추가) - 모니터
     */
    function g_moniter()
    {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);
        $data['views'] = $this->group_model->update_view_moniter($idx);

        // view 호출
        $this->load->view('list/computational/register/g_moniter', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $company = trim($this->input->post("company"));
            $product_name = trim($this->input->post("product_name"));
            $model_code = trim($this->input->post("model_code"));
            $model_name = trim($this->input->post("model_name"));
            $identify = trim($this->input->post("identify"));
            $produce_ym = trim($this->input->post("produce_ym"));
            $soft_num = trim($this->input->post("soft_num"));
            $gian_num = trim($this->input->post("gian_num"));
            $buy_day = trim($this->input->post("buy_day"));

            $params = array(
                "company" => $company,
                "product_name" => $product_name,
                "model_code" => $model_code,
                "model_name" => $model_name,
                "identify" => $identify,
                "produce_ym" => $produce_ym,
                "soft_num" => $soft_num,
                "gian_num" => $gian_num,
                "buy_day" => $buy_day,
                "idx" => $idx
            );

            $this->group_model->update_g_moniter($params);

            alert('게시물 수정 완료');
            redirect(base_url() . 'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - 본체
     */
    function g_pc()
    {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);
        $data['views'] = $this->group_model->update_view_pc($idx);
        // view 호출
        $this->load->view('list/computational/register/g_pc', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');
            $idx = trim($this->input->post("idx"));
            $company = trim($this->input->post("company"));
            $model_name = trim($this->input->post("model_name"));
            $model_code = trim($this->input->post("model_code"));
            $produce_number = trim($this->input->post("produce_number"));
            $product_code = trim($this->input->post("product_code"));
            $identify = trim($this->input->post("identify"));
            $produce_ym = trim($this->input->post("produce_ym"));
            $g_cpu = trim($this->input->post("g_cpu"));
            $g_ram = trim($this->input->post("g_ram"));
            $g_hdd_c = trim($this->input->post("g_hdd_c"));
            $g_hdd_d = trim($this->input->post("g_hdd_d"));
            $g_graphic = trim($this->input->post("g_graphic"));
            $gian_num = trim($this->input->post("gian_num"));
            $buy_day = trim($this->input->post("buy_day"));

            $params = array(
                "idx" => $idx,
                "company" => $company,
                "model_name" => $model_name,
                "model_code" => $model_code,
                "produce_number" => $produce_number,
                "product_code" => $product_code,
                "identify" => $identify,
                "produce_ym" => $produce_ym,
                "g_cpu" => $g_cpu,
                "g_ram" => $g_ram,
                "g_hdd_c" => $g_hdd_c,
                "g_hdd_d" => $g_hdd_d,
                "g_graphic" => $g_graphic,
                "gian_num" => $gian_num,
                "buy_day" => $buy_day
            );

            $this->group_model->update_g_pc($params);

            alert('게시물 수정 완료');
            redirect(base_url() . 'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - 키보드
     */
    function g_keyboard()
    {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->update_view_keyboard($idx);

        // view 호출
        $this->load->view('list/computational/register/g_keyboard', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $product_name = trim($this->input->post("product_name"));
            $identify = trim($this->input->post("identify"));
            $produce_ym = trim($this->input->post("produce_ym"));
            $gian_num = trim($this->input->post("gian_num"));
            $buy_day = trim($this->input->post("buy_day"));

            $params = array(
                "product_name" => $product_name,
                "identify" => $identify,
                "produce_ym" => $produce_ym,
                "gian_num" => $gian_num,
                "buy_day" => $buy_day,
                "idx" => $idx
            );

            $this->group_model->update_g_keyboard($params);

            alert('게시물 수정 완료');
            redirect(base_url() . 'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - 마우스
     */
    function g_mouse()
    {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->update_view_mouse($idx);

        // view 호출
        $this->load->view('list/computational/register/g_mouse', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $product_name = trim($this->input->post("product_name"));
            $identify = trim($this->input->post("identify"));
            $produce_ym = trim($this->input->post("produce_ym"));
            $gian_num = trim($this->input->post("gian_num"));
            $buy_day = trim($this->input->post("buy_day"));

            $params = array(
                "product_name" => $product_name,
                "identify" => $identify,
                "produce_ym" => $produce_ym,
                "gian_num" => $gian_num,
                "buy_day" => $buy_day,
                "idx" => $idx
            );

            $this->group_model->update_g_mouse($params);

            alert('게시물 수정 완료');
            redirect(base_url() . 'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - 헤드셋
     */
    function g_headset()
    {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->update_view_headset($idx);

        // view 호출
        $this->load->view('list/computational/register/g_headset', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $product_name = trim($this->input->post("product_name"));
            $identify = trim($this->input->post("identify"));
            $produce_ym = trim($this->input->post("produce_ym"));
            $gian_num = trim($this->input->post("gian_num"));
            $buy_day = trim($this->input->post("buy_day"));

            $params = array(
                "product_name" => $product_name,
                "identify" => $identify,
                "produce_ym" => $produce_ym,
                "gian_num" => $gian_num,
                "buy_day" => $buy_day,
                "idx" => $idx
            );

            $this->group_model->update_g_headset($params);

            alert('게시물 수정 완료');
            redirect(base_url() . 'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - 전화기
     */
    function g_cell()
    {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->update_view_cell($idx);

        // view 호출
        $this->load->view('list/computational/register/g_cell', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $product_name = trim($this->input->post("product_name"));
            $gian_num = trim($this->input->post("gian_num"));
            $buy_day = trim($this->input->post("buy_day"));

            $params = array(
                "product_name" => $product_name,
                "gian_num" => $gian_num,
                "buy_day" => $buy_day,
                "idx" => $idx
            );

            $this->group_model->update_g_cell($params);

            alert('게시물 수정 완료');
            redirect(base_url() . 'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - Window OS
     */
    function g_window()
    {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->update_view_window($idx);

        // view 호출
        $this->load->view('list/computational/register/g_window', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $product_number = trim($this->input->post("product_number"));
            $gian_num = trim($this->input->post("gian_num"));
            $duration = trim($this->input->post("duration"));

            $params = array(
                "product_number" => $product_number,
                "gian_num" => $gian_num,
                "duration" => $duration,
                "idx" => $idx
            );

            $this->group_model->update_g_window($params);

            alert('게시물 수정 완료');
            redirect(base_url() . 'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - MS-Office
     */
    function g_ms()
    {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->update_view_ms($idx);

        // view 호출
        $this->load->view('list/computational/register/g_ms', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $product_number = trim($this->input->post("product_number"));
            $gian_num = trim($this->input->post("gian_num"));
            $duration = trim($this->input->post("duration"));

            $params = array(
                "product_number" => $product_number,
                "gian_num" => $gian_num,
                "duration" => $duration,
                "idx" => $idx
            );

            $this->group_model->update_g_ms($params);

            alert('게시물 수정 완료');
            redirect(base_url() . 'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - 한글
     */
    function g_hangul()
    {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->update_view_hangul($idx);

        // view 호출
        $this->load->view('list/computational/register/g_hangul', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $product_number = trim($this->input->post("product_number"));
            $gian_num = trim($this->input->post("gian_num"));
            $duration = trim($this->input->post("duration"));

            $params = array(
                "product_number" => $product_number,
                "gian_num" => $gian_num,
                "duration" => $duration,
                "idx" => $idx
            );

            $this->group_model->update_g_hangul($params);

            alert('게시물 수정 완료');
            redirect(base_url() . 'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - 보안프로그램
     */
    function g_security()
    {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->update_view_security($idx);

        // view 호출
        $this->load->view('list/computational/register/g_security', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $product_number = trim($this->input->post("product_number"));
            $gian_num = trim($this->input->post("gian_num"));
            $duration = trim($this->input->post("duration"));

            $params = array(
                "product_number" => $product_number,
                "gian_num" => $gian_num,
                "duration" => $duration,
                "idx" => $idx
            );

            $this->group_model->update_g_security($params);

            alert('게시물 수정 완료');
            redirect(base_url() . 'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - Quark(쿽)
     */
    function g_quark()
    {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->update_view_quark($idx);

        // view 호출
        $this->load->view('list/computational/register/g_quark', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $product_number = trim($this->input->post("product_number"));
            $font = trim($this->input->post("font"));
            $gian_num = trim($this->input->post("gian_num"));
            $duration = trim($this->input->post("duration"));

            $params = array(
                "product_number" => $product_number,
                "font" => $font,
                "gian_num" => $gian_num,
                "duration" => $duration,
                "idx" => $idx
            );

            $this->group_model->update_g_quark($params);

            alert('게시물 수정 완료');
            redirect(base_url() . 'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - adobe
     */
    function g_adobe()
    {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->update_view_adobe($idx);

        // view 호출
        $this->load->view('list/computational/register/g_adobe', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');
            $adobe_product = trim($this->input->post("adobe_product"));
            //$photoshop = trim($this->input->post("photoshop"));
            //$illustrator = trim($this->input->post("illustrator"));
            //$acrobat = trim($this->input->post("acrobat"));
            $gian_num = trim($this->input->post("gian_num"));
            $duration = trim($this->input->post("duration"));
            $remarks = trim($this->input->post("remarks"));


            $params = array(
                "adobe_product" => $adobe_product,
                //"photoshop" => $photoshop,
                //"illustrator" => $illustrator,
                //"acrobat" => $acrobat,
                "gian_num" => $gian_num,
                "duration" => $duration,
                "remarks" => $remarks,
                "idx" => $idx
            );

            $this->group_model->update_g_adobe($params);

            alert('게시물 수정 완료');
            redirect(base_url() . 'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - font
     */
    function g_font()
    {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->update_view_font($idx);

        // view 호출
        $this->load->view('list/computational/register/g_font', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $asia = trim($this->input->post("asia"));
            $a_gian_num = trim($this->input->post("a_gian_num"));
            $a_duration = trim($this->input->post("a_duration"));
            $mukhyang = trim($this->input->post("mukhyang"));
            $m_gian_num = trim($this->input->post("m_gian_num"));
            $m_duration = trim($this->input->post("m_duration"));

            $params = array(
                "asia" => $asia,
                "a_gian_num" => $a_gian_num,
                "a_duration" => $a_duration,
                "mukhyang" => $mukhyang,
                "m_gian_num" => $m_gian_num,
                "m_duration" => $m_duration,
                "idx" => $idx
            );

            $this->group_model->update_g_font($params);

            alert('게시물 수정 완료');
            redirect(base_url() . 'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - 압축프로그램
     */
    function g_compress()
    {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->update_view_compress($idx);

        // view 호출
        $this->load->view('list/computational/register/g_compress', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

            $alzip = trim($this->input->post("alzip"));
            $gian_num = trim($this->input->post("gian_num"));
            $duration = trim($this->input->post("duration"));

            $params = array(
                "alzip" => $alzip,
                "gian_num" => $gian_num,
                "duration" => $duration,
                "idx" => $idx
            );

            $this->group_model->update_g_compress($params);

            alert('게시물 수정 완료');
            redirect(base_url() . 'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 전산기록부 항목 추가
     */
    public function g_add_option()
    {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');
            //radio버튼 value 테이블명 
            $table = $this->input->post('radioName', TRUE);

            //모니터
            if ($table == "g_moniter") {
                $m_company = $this->input->post('m_company', TRUE);
                $m_product_name = $this->input->post('m_product_name', TRUE);
                $m_model_code = $this->input->post('m_model_code', TRUE);
                $m_model_name = $this->input->post('m_model_name', TRUE);
                $m_identify = $this->input->post('m_identify', TRUE);
                $m_produce_ym = $this->input->post('m_produce_ym', TRUE);
                $m_soft_num = $this->input->post('m_soft_num', TRUE);
                $m_gian_num = $this->input->post('m_gian_num', TRUE);
                $m_buy_day = $this->input->post('m_buy_day', TRUE);

                $this->group_model->g_add_moniter(
                    $user_idx, $m_company, $m_product_name, $m_model_code, $m_model_name, $m_identify, $m_produce_ym, $m_soft_num, $m_gian_num, $m_buy_day

                );

            } else if ($table == "g_pc") {
                $p_company = $this->input->post('p_company', TRUE);
                $p_model_name = $this->input->post('p_model_name', TRUE);
                $p_model_code = $this->input->post('p_model_code', TRUE);
                $p_produce_number = $this->input->post('p_produce_number', TRUE);
                $p_product_code = $this->input->post('p_product_code', TRUE);
                $p_identify = $this->input->post('p_identify', TRUE);
                $p_produce_ym = $this->input->post('p_produce_ym', TRUE);
                $p_g_cpu = $this->input->post('p_g_cpu', TRUE);
                $p_g_ram = $this->input->post('p_g_ram', TRUE);
                $p_g_hdd_c = $this->input->post('p_g_hdd_c', TRUE);
                $p_g_hdd_d = $this->input->post('p_g_hdd_d', TRUE);
                $p_g_graphic = $this->input->post('p_g_graphic', TRUE);
                $p_gian_num = $this->input->post('p_gian_num', TRUE);
                $p_buy_day = $this->input->post('p_buy_day', TRUE);

                $this->group_model->g_add_pc(
                    $user_idx, $p_company, $p_model_name, $p_model_code, $p_produce_number, $p_product_code, $p_identify, $p_produce_ym,
                    $p_g_cpu, $p_g_ram, $p_g_hdd_c, $p_g_hdd_d, $p_g_hdd_d, $p_g_graphic, $p_gian_num, $p_buy_day
                );
            } else if ($table == "g_keyboard") {
                $k_product_name = $this->input->post('k_product_name', TRUE);
                $k_identify = $this->input->post('k_identify', TRUE);
                $k_produce_ym = $this->input->post('k_produce_ym', TRUE);
                $k_gian_num = $this->input->post('k_gian_num', TRUE);
                $k_buy_day = $this->input->post('k_buy_day', TRUE);

                $this->group_model->g_add_keyboard(
                    $user_idx, $k_product_name, $k_identify, $k_produce_ym, $k_gian_num, $k_buy_day
                );
            } else if ($table == "g_mouse") {
                $mu_product_name = $this->input->post('mu_product_name', TRUE);
                $mu_identify = $this->input->post('mu_identify', TRUE);
                $mu_produce_ym = $this->input->post('mu_produce_ym', TRUE);
                $mu_gian_num = $this->input->post('mu_gian_num', TRUE);
                $mu_buy_day = $this->input->post('mu_buy_day', TRUE);

                $this->group_model->g_add_mouse(
                    $user_idx, $mu_product_name, $mu_identify, $mu_produce_ym, $mu_gian_num, $mu_buy_day
                );
            } else if ($table == "g_headset") {
                $h_product_name = $this->input->post('h_product_name', TRUE);
                $h_gian_num = $this->input->post('h_gian_num', TRUE);
                $h_buy_day = $this->input->post('h_buy_day', TRUE);

                $this->group_model->g_add_headset(
                    $user_idx, $h_product_name, $h_gian_num, $h_buy_day
                );
            } else if ($table == "g_cell") {
                $c_product_name = $this->input->post('c_product_name', TRUE);
                $c_gian_num = $this->input->post('c_gian_num', TRUE);
                $c_buy_day = $this->input->post('c_buy_day', TRUE);

                $this->group_model->g_add_cell(
                    $user_idx, $c_product_name, $c_gian_num, $c_buy_day
                );
            } else if ($table == "g_window") {
                $win_product_number = $this->input->post('win_product_number', TRUE);
                $win_gian_num = $this->input->post('win_gian_num', TRUE);
                $win_duration = $this->input->post('win_duration', TRUE);

                $this->group_model->g_add_window(
                    $user_idx, $win_product_number, $win_gian_num, $win_duration
                );
            } else if ($table == "g_ms") {
                $ms_product_number = $this->input->post('ms_product_number', TRUE);
                $ms_gian_num = $this->input->post('ms_gian_num', TRUE);
                $ms_duration = $this->input->post('ms_duration', TRUE);

                $this->group_model->g_add_ms(
                    $user_idx, $ms_product_number, $ms_gian_num, $ms_duration
                );
            } else if ($table == "g_hangul") {
                $han_product_number = $this->input->post('han_product_number', TRUE);
                $han_gian_num = $this->input->post('han_gian_num', TRUE);
                $han_duration = $this->input->post('han_duration', TRUE);

                $this->group_model->g_add_hangul(
                    $user_idx, $han_product_number, $han_gian_num, $han_duration
                );
            } else if ($table == "g_security") {
                $security_product_number = $this->input->post('security_product_number', TRUE);
                $security_gian_num = $this->input->post('security_gian_num', TRUE);
                $security_duration = $this->input->post('security_duration', TRUE);

                $this->group_model->g_add_security(
                    $user_idx, $security_product_number, $security_gian_num, $security_duration
                );
            } else if ($table == "g_quark") {
                $quark_product_number = $this->input->post('quark_product_number', TRUE);
                $quark_font = $this->input->post('quark_font', TRUE);
                $quark_gian_num = $this->input->post('quark_gian_num', TRUE);
                $quark_duration = $this->input->post('quark_duration', TRUE);

                $this->group_model->g_add_quark(
                    $user_idx, $quark_product_number, $quark_font, $quark_gian_num, $quark_duration
                );
            } else if ($table == "g_adobe") {
                $adobe_product = $this->input->post('adobe_product', TRUE);
                $adobe_gian_num = $this->input->post('adobe_gian_num', TRUE);
                $adobe_duration = $this->input->post('adobe_duration', TRUE);
                $adobe_remarks = $this->input->post('adobe_remarks', TRUE);

                $this->group_model->g_add_adobe(
                    $user_idx, $adobe_product, $adobe_gian_num, $adobe_duration, $adobe_remarks
                );
            } else if ($table == "g_font") {
                $font_asia = $this->input->post('font_asia', TRUE);
                $font_a_gian_num = $this->input->post('font_a_gian_num', TRUE);
                $font_a_duration = $this->input->post('font_a_duration', TRUE);
                $font_mukhyang = $this->input->post('font_mukhyang', TRUE);
                $font_m_gian_num = $this->input->post('font_m_gian_num', TRUE);
                $font_m_duration = $this->input->post('font_m_duration', TRUE);

                $this->group_model->g_add_font(
                    $user_idx, $font_asia, $font_a_gian_num, $font_a_duration, $font_mukhyang, $font_m_gian_num, $font_m_duration
                );
            } else if ($table == "g_compress") {
                $compress_alzip = $this->input->post('compress_alzip', TRUE);
                $compress_gian_num = $this->input->post('compress_gian_num', TRUE);
                $compress_duration = $this->input->post('compress_duration', TRUE);

                $this->group_model->g_add_compress(
                    $user_idx, $compress_alzip, $compress_gian_num, $compress_duration
                );
            }
            

            alert('데이터 추가 완료');
            exit;

        } else {
            // 쓰기 폼 view 호출
            $this->load->view('list/computational/register/g_add_option');
        }

    }

    ### 전상항목 전산실 보관 ###

    public function jeonsan_keep_pc()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->add_keep_pc($idx);

        if ($return) {
            alert('데이터 보관되었습니다.');
            exit;
        } else {
            alert('보관 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    public function jeonsan_keep_moniter()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->add_keep_moniter($idx);

        if ($return) {
            alert('데이터 보관되었습니다.');
            exit;
        } else {
            alert('보관 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    public function jeonsan_keep_keyboard()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->add_keep_keyboard($idx);

        if ($return) {
            alert('데이터 보관되었습니다.');
            exit;
        } else {
            alert('보관 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    public function jeonsan_keep_mouse()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->add_keep_mouse($idx);

        if ($return) {
            alert('데이터 보관되었습니다.');
            exit;
        } else {
            alert('보관 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    ### 전산실 보관항목 삭제 ###

    public function jeonsan_moniter_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->delete_keep_moniter($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }
    public function jeonsan_pc_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->delete_keep_pc($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }


    ### 전산항목 삭제 ###

    public function part_moniter_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->delete_part_moniter($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    public function part_pc_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->delete_part_pc($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    public function part_keyboard_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->delete_part_keyboard($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    public function part_mouse_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->delete_part_mouse($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    public function part_headset_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->delete_part_headset($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    public function part_cell_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->delete_part_cell($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    public function part_window_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->delete_part_window($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    public function part_ms_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->delete_part_ms($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    public function part_hangul_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->delete_part_hangul($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    public function part_security_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->delete_part_security($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    public function part_quark_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->delete_part_quark($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    public function part_adobe_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->delete_part_adobe($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    public function part_font_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->delete_part_font($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }

    public function part_compress_delete()
    {
        $this->load->helper('alert');
        // 게시물 번호에 해당하는 게시물 삭제
        $idx = $this->uri->segment(3);
        $return = $this->group_model->delete_part_compress($idx);

        if ($return) {
            alert('데이터 삭제되었습니다.');
            exit;
        } else {
            alert('삭제 오류입니다. 관리자에게 문의해주세요.');
            exit;
        }
    }


    /*
     * 전산기록부로 엑셀 데이터 출력해본다
     */
    public function excel_print()
    {

        # PHPExcel 라이브러리 로드
        $this->load->library('PHPExcel');

        # 자료 가져오기
        $this->load->model('group_model');
        $user_idx = $this->uri->segment(3);
        //$data['g_view'] = $this->group_model->get_g_view($user_idx);
        $data['view_user'] = $this->group_model->get_view_user($user_idx);
        $data['view_moniter'] = $this->group_model->get_view_moniter($user_idx);
        $data['view_pc'] = $this->group_model->get_view_pc($user_idx);
        $data['view_keyboard'] = $this->group_model->get_view_keyboard($user_idx);
        $data['view_mouse'] = $this->group_model->get_view_mouse($user_idx);
        $data['view_headset'] = $this->group_model->get_view_headset($user_idx);
        $data['view_cell'] = $this->group_model->get_view_cell($user_idx);
        $data['view_window'] = $this->group_model->get_view_window($user_idx);
        $data['view_ms'] = $this->group_model->get_view_ms($user_idx);
        $data['view_hangul'] = $this->group_model->get_view_hangul($user_idx);
        $data['view_security'] = $this->group_model->get_view_security($user_idx);
        $data['view_quark'] = $this->group_model->get_view_quark($user_idx);
        $data['view_adobe'] = $this->group_model->get_view_adobe($user_idx);
        $data['view_font'] = $this->group_model->get_view_font($user_idx);
        $data['view_compress'] = $this->group_model->get_view_compress($user_idx);

        # 시트지정
        $this->phpexcel->setActiveSheetIndex(0);
        $this->phpexcel->getActiveSheet()->setTitle('Sheet1');

        # 테두리
        # 셀 전체(윤곽선 + 안쪽)
        $this->phpexcel->getActiveSheet()->getStyle('A1:C84')->getBorders()
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
            'A1:C81'
        );

        //개행문자처리
        $this->phpexcel->getActiveSheet()->getStyle('A1:C81')->getAlignment()->setWrapText(true);

        # cell 헤더 설정
        $this->phpexcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A1")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FF8200");
        $this->phpexcel->getActiveSheet()->setCellValue('A1', '전산기록부 - 개인');
        $this->phpexcel->getActiveSheet()->setCellValue('A2', '이름');
        $this->phpexcel->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A3")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFB937");
        $this->phpexcel->getActiveSheet()->setCellValue('A3', '모니터');
        $this->phpexcel->getActiveSheet()->getStyle('A13')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A13")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFB937");
        $this->phpexcel->getActiveSheet()->setCellValue('A13', '본체');
        $this->phpexcel->getActiveSheet()->getStyle('A28')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A28")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFB937");
        $this->phpexcel->getActiveSheet()->setCellValue('A28', '키보드');
        $this->phpexcel->getActiveSheet()->getStyle('A34')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A34")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFB937");
        $this->phpexcel->getActiveSheet()->setCellValue('A34', '마우스');
        $this->phpexcel->getActiveSheet()->getStyle('A40')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A40")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFB937");
        $this->phpexcel->getActiveSheet()->setCellValue('A40', '헤드셋');
        $this->phpexcel->getActiveSheet()->getStyle('A44')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A44")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFB937");
        $this->phpexcel->getActiveSheet()->setCellValue('A44', '전화기');
        $this->phpexcel->getActiveSheet()->getStyle('A48')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A48")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFB937");
        $this->phpexcel->getActiveSheet()->setCellValue('A48', 'Window OS');
        $this->phpexcel->getActiveSheet()->getStyle('A52')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A52")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFB937");
        $this->phpexcel->getActiveSheet()->setCellValue('A52', 'MS-OFFICE');
        $this->phpexcel->getActiveSheet()->getStyle('A56')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A56")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFB937");
        $this->phpexcel->getActiveSheet()->setCellValue('A56', '한글');
        $this->phpexcel->getActiveSheet()->getStyle('A60')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A60")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFB937");
        $this->phpexcel->getActiveSheet()->setCellValue('A60', '보안프로그램');
        $this->phpexcel->getActiveSheet()->getStyle('A64')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A64")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFB937");
        $this->phpexcel->getActiveSheet()->setCellValue('A64', 'Quark');
        $this->phpexcel->getActiveSheet()->getStyle('A69')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A69")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFB937");
        $this->phpexcel->getActiveSheet()->setCellValue('A69', 'Adobe');
        $this->phpexcel->getActiveSheet()->getStyle('A74')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A74")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFB937");
        $this->phpexcel->getActiveSheet()->setCellValue('A74', 'FONT');
        $this->phpexcel->getActiveSheet()->getStyle('A81')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->phpexcel->getActiveSheet()->getStyle("A81")->getFill()
            ->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB("FFB937");
        $this->phpexcel->getActiveSheet()->setCellValue('A81', '압축프로그램');

        // 글자 진하게
        $this->phpexcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
        $this->phpexcel->getActiveSheet()->getStyle('A3')->getFont()->setBold(true);
        $this->phpexcel->getActiveSheet()->getStyle('A13')->getFont()->setBold(true);
        $this->phpexcel->getActiveSheet()->getStyle('A28')->getFont()->setBold(true);
        $this->phpexcel->getActiveSheet()->getStyle('A34')->getFont()->setBold(true);
        $this->phpexcel->getActiveSheet()->getStyle('A40')->getFont()->setBold(true);
        $this->phpexcel->getActiveSheet()->getStyle('A44')->getFont()->setBold(true);
        $this->phpexcel->getActiveSheet()->getStyle('A48')->getFont()->setBold(true);
        $this->phpexcel->getActiveSheet()->getStyle('A52')->getFont()->setBold(true);
        $this->phpexcel->getActiveSheet()->getStyle('A56')->getFont()->setBold(true);
        $this->phpexcel->getActiveSheet()->getStyle('A60')->getFont()->setBold(true);
        $this->phpexcel->getActiveSheet()->getStyle('A64')->getFont()->setBold(true);
        $this->phpexcel->getActiveSheet()->getStyle('A69')->getFont()->setBold(true);
        $this->phpexcel->getActiveSheet()->getStyle('A74')->getFont()->setBold(true);
        $this->phpexcel->getActiveSheet()->getStyle('A81')->getFont()->setBold(true);

        /*
         * cell 헤더 병합
         */
        $this->phpexcel->getActiveSheet()->mergeCells('A1:C1');
        $this->phpexcel->getActiveSheet()->mergeCells('B2:C2');
        $this->phpexcel->getActiveSheet()->mergeCells('A3:C3');
        $this->phpexcel->getActiveSheet()->mergeCells('A13:C13');
        $this->phpexcel->getActiveSheet()->mergeCells('A28:C28');
        $this->phpexcel->getActiveSheet()->mergeCells('A34:C34');
        $this->phpexcel->getActiveSheet()->mergeCells('A40:C40');
        $this->phpexcel->getActiveSheet()->mergeCells('A44:C44');
        $this->phpexcel->getActiveSheet()->mergeCells('A48:C48');
        $this->phpexcel->getActiveSheet()->mergeCells('A52:C52');
        $this->phpexcel->getActiveSheet()->mergeCells('A56:C56');
        $this->phpexcel->getActiveSheet()->mergeCells('A60:C60');
        $this->phpexcel->getActiveSheet()->mergeCells('A64:C64');
        $this->phpexcel->getActiveSheet()->mergeCells('A69:C69');
        $this->phpexcel->getActiveSheet()->mergeCells('A74:C74');
        $this->phpexcel->getActiveSheet()->mergeCells('A81:C81');

        /*
         * cell 헤더 출력
         */
        // 개인정보
        $this->phpexcel->getActiveSheet()->setCellValue('B2', '' . $data['view_user']->user_name . '');

        //모니터
        $this->phpexcel->getActiveSheet()->setCellValue('A4', '제조사');
        $this->phpexcel->getActiveSheet()->setCellValue('A5', '제품명');
        $this->phpexcel->getActiveSheet()->setCellValue('A6', '모델코드');
        $this->phpexcel->getActiveSheet()->setCellValue('A7', '모델명');
        $this->phpexcel->getActiveSheet()->setCellValue('A8', '식별부호');
        $this->phpexcel->getActiveSheet()->setCellValue('A9', '제조년월');
        $this->phpexcel->getActiveSheet()->setCellValue('A10', 'S/N');
        $this->phpexcel->getActiveSheet()->setCellValue('A11', '기안문서번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A12', '구매일');

        //본체
        $this->phpexcel->getActiveSheet()->setCellValue('A14', '제조사');
        $this->phpexcel->getActiveSheet()->setCellValue('A15', '모델명');
        $this->phpexcel->getActiveSheet()->setCellValue('A16', '모델코드');
        $this->phpexcel->getActiveSheet()->setCellValue('A17', '제조번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A18', '제품코드');
        $this->phpexcel->getActiveSheet()->setCellValue('A19', '식별부호');
        $this->phpexcel->getActiveSheet()->setCellValue('A20', '제조년월');
        $this->phpexcel->getActiveSheet()->setCellValue('A21', 'CPU');
        $this->phpexcel->getActiveSheet()->setCellValue('A22', 'RAM');
        $this->phpexcel->getActiveSheet()->setCellValue('A23', 'HDD(C:)');
        $this->phpexcel->getActiveSheet()->setCellValue('A24', 'HDD(D:)');
        $this->phpexcel->getActiveSheet()->setCellValue('A25', '그래픽카드');
        $this->phpexcel->getActiveSheet()->setCellValue('A26', '기안문서번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A27', '구매일');

        //키보드
        $this->phpexcel->getActiveSheet()->setCellValue('A29', '제조사');
        $this->phpexcel->getActiveSheet()->setCellValue('A30', '모델명');
        $this->phpexcel->getActiveSheet()->setCellValue('A31', '모델코드');
        $this->phpexcel->getActiveSheet()->setCellValue('A32', '제조번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A33', '제품코드');

        //마우스
        $this->phpexcel->getActiveSheet()->setCellValue('A35', '제조사');
        $this->phpexcel->getActiveSheet()->setCellValue('A36', '모델명');
        $this->phpexcel->getActiveSheet()->setCellValue('A37', '모델코드');
        $this->phpexcel->getActiveSheet()->setCellValue('A38', '제조번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A39', '제품코드');

        //헤드셋
        $this->phpexcel->getActiveSheet()->setCellValue('A41', '제조사');
        $this->phpexcel->getActiveSheet()->setCellValue('A42', '모델명');
        $this->phpexcel->getActiveSheet()->setCellValue('A43', '모델코드');

        //전화기
        $this->phpexcel->getActiveSheet()->setCellValue('A45', '제조사');
        $this->phpexcel->getActiveSheet()->setCellValue('A46', '모델명');
        $this->phpexcel->getActiveSheet()->setCellValue('A47', '모델코드');

        //WINDOW OS
        $this->phpexcel->getActiveSheet()->setCellValue('A49', '제품번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A50', '기안문서번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A51', '사용기간');

        //MS-OFFICE
        $this->phpexcel->getActiveSheet()->setCellValue('A53', '제품번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A54', '기안문서번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A55', '사용기간');

        //한글
        $this->phpexcel->getActiveSheet()->setCellValue('A57', '제품번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A58', '기안문서번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A59', '사용기간');

        //보안프로그램
        $this->phpexcel->getActiveSheet()->setCellValue('A61', '제품번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A62', '기안문서번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A63', '사용기간');

        //QUARK
        $this->phpexcel->getActiveSheet()->setCellValue('A65', '제품번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A66', 'font');
        $this->phpexcel->getActiveSheet()->setCellValue('A67', '기안문서번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A68', '사용기간');

        //ADOBE
        $this->phpexcel->getActiveSheet()->setCellValue('A70', '제품명');
        $this->phpexcel->getActiveSheet()->setCellValue('A71', '기안문서번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A72', '사용기간');
        $this->phpexcel->getActiveSheet()->setCellValue('A73', '비고');

        //FONT
        $this->phpexcel->getActiveSheet()->setCellValue('A75', 'Asia');
        $this->phpexcel->getActiveSheet()->setCellValue('A76', '기안문서번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A77', '사용기간');
        $this->phpexcel->getActiveSheet()->setCellValue('A78', '묵향');
        $this->phpexcel->getActiveSheet()->setCellValue('A79', '기안문서번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A80', '사용기간');

        //압축프로그램
        $this->phpexcel->getActiveSheet()->setCellValue('A82', '알집');
        $this->phpexcel->getActiveSheet()->setCellValue('A83', '기안문서번호');
        $this->phpexcel->getActiveSheet()->setCellValue('A84', '사용기간');

        # CELL 크기 지정
        $this->phpexcel->getActiveSheet()->getColumnDimension('A')->setWidth(14);
        $this->phpexcel->getActiveSheet()->getColumnDimension('B')->setWidth(60);
        $this->phpexcel->getActiveSheet()->getColumnDimension('C')->setWidth(60);

        # CELL 열 넓이 자동조절 - 전체
        //for ($col = 'B'; $col !== 'H'; $col++){
        //    $this->phpexcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
        //}

        /*
         * cell 데이터 출력
         */
        // 모니터
        $col='B';
        foreach ($data['view_moniter'] as $lt):
            $this->phpexcel->getActiveSheet()->setCellValue($col.'4', $lt->company);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'5', $lt->product_name);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'6', $lt->model_code);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'7', $lt->model_name);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'8', $lt->identify);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'9', $lt->produce_ym);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'10', $lt->soft_num);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'11', $lt->gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'12', $lt->buy_day);
            $col++;
        endforeach;

        // 본체
        $col='B';
        foreach ($data['view_pc'] as $lt):
            $this->phpexcel->getActiveSheet()->setCellValue($col.'14', $lt->company);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'15', $lt->model_name);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'16', $lt->model_code);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'17', $lt->produce_number);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'18', $lt->product_code);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'19', $lt->identify);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'20', $lt->produce_ym);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'21', $lt->g_cpu);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'22', $lt->g_ram);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'23', $lt->g_hdd_c);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'24', $lt->g_hdd_d);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'25', $lt->g_graphic);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'26', $lt->gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'27', $lt->buy_day);
            $col++;
        endforeach;

        // 키보드
        $col='B';
        foreach ($data['view_keyboard'] as $lt):
            $this->phpexcel->getActiveSheet()->setCellValue($col.'29', $lt->product_name);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'30', $lt->identify);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'31', $lt->produce_ym);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'32', $lt->gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'33', $lt->buy_day);
            $col++;
        endforeach;

        // 마우스
        $col='B';
        foreach ($data['view_mouse'] as $lt):
            $this->phpexcel->getActiveSheet()->setCellValue($col.'35', $lt->product_name);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'36', $lt->identify);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'37', $lt->produce_ym);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'38', $lt->gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'39', $lt->buy_day);
            $col++;
        endforeach;

        // 헤드셋
        $col='B';
        foreach ($data['view_headset'] as $lt):
            $this->phpexcel->getActiveSheet()->setCellValue($col.'41', $lt->product_name);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'42', $lt->gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'43', $lt->buy_day);
            $col++;
        endforeach;

        // 전화기
        $col='B';
        foreach ($data['view_cell'] as $lt):
            $this->phpexcel->getActiveSheet()->setCellValue($col.'45', $lt->product_name);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'46', $lt->gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'47', $lt->buy_day);
            $col++;
        endforeach;

        // Window OS
        $col='B';
        foreach ($data['view_window'] as $lt):
            $this->phpexcel->getActiveSheet()->setCellValue($col.'49', $lt->product_number);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'50', $lt->gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'51', $lt->duration);
            $col++;
        endforeach;

        // MS-Office
        $col='B';
        foreach ($data['view_ms'] as $lt):
            $this->phpexcel->getActiveSheet()->setCellValue($col.'53', $lt->product_number);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'54', $lt->gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'55', $lt->duration);
            $col++;
        endforeach;

        // 한글
        $col='B';
        foreach ($data['view_hangul'] as $lt):
            $this->phpexcel->getActiveSheet()->setCellValue($col.'57', $lt->product_number);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'58', $lt->gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'59', $lt->duration);
            $col++;
        endforeach;

        // 보안프로그램
        $col='B';
        foreach ($data['view_security'] as $lt):
            $this->phpexcel->getActiveSheet()->setCellValue($col.'61', $lt->product_number);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'62', $lt->gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'63', $lt->duration);
            $col++;
        endforeach;

        // Quark
        $col='B';
        foreach ($data['view_quark'] as $lt):
            $this->phpexcel->getActiveSheet()->setCellValue($col.'65', $lt->product_number);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'66', $lt->font);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'67', $lt->gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'68', $lt->duration);
            $col++;
        endforeach;

        // Adobe
        $col='B';
        foreach ($data['view_adobe'] as $lt):
            $this->phpexcel->getActiveSheet()->setCellValue($col.'70', $lt->adobe_product);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'71', $lt->gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'72', $lt->duration);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'73', $lt->remarks);
            $col++;
        endforeach;

        // FONT(폰트)
        $col='B';
        foreach ($data['view_font'] as $lt):
            $this->phpexcel->getActiveSheet()->setCellValue($col.'75', $lt->asia);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'76', $lt->a_gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'77', $lt->a_duration);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'78', $lt->mukhyang);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'79', $lt->m_gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'80', $lt->m_duration);
            $col++;
        endforeach;

        // 압축프로그램
        $col='B';
        foreach ($data['view_compress'] as $lt):
            $this->phpexcel->getActiveSheet()->setCellValue($col.'82', $lt->alzip);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'83', $lt->gian_num);
            $this->phpexcel->getActiveSheet()->setCellValue($col.'84', $lt->duration);
            $col++;
        endforeach;

        # 파일로 내보낸다. 파일명은 'filename.xls' 이다.
        $filename = '' . $data['view_user']->user_name . '_전산기록부_' . date('Ymd') . '.xls';
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














