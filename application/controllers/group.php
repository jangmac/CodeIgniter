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
        $data['g_view'] = $this->group_model->get_g_view($user_idx);

        $this->load->view('list/computational/g_view', $data);
    }

    /*
     * 그룹원 전산 수정(추가) - 모니터
     */
    function g_moniter()
    {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);
        $data['views'] = $this->group_model->get_g_view($user_idx);

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
                "user_idx" => $user_idx
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
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->get_g_view($user_idx);

        // view 호출
        $this->load->view('list/computational/register/g_pc', $data);

        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');

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
                "buy_day" => $buy_day,
                "user_idx" => $user_idx
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
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->get_g_view($user_idx);

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
                "user_idx" => $user_idx
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
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->get_g_view($user_idx);

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
                "user_idx" => $user_idx
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
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->get_g_view($user_idx);

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
                "user_idx" => $user_idx
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
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->get_g_view($user_idx);

        // view 호출
        $this->load->view('list/computational/register/g_cell', $data);

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
                "user_idx" => $user_idx
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
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->get_g_view($user_idx);

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
                "user_idx" => $user_idx
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
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->get_g_view($user_idx);

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
                "user_idx" => $user_idx
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
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->get_g_view($user_idx);

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
                "user_idx" => $user_idx
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
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->get_g_view($user_idx);

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
                "user_idx" => $user_idx
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
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->get_g_view($user_idx);

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
                "user_idx" => $user_idx
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
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->get_g_view($user_idx);

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
                "user_idx" => $user_idx
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
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->get_g_view($user_idx);

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
                "user_idx" => $user_idx
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
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this->group_model->get_g_view($user_idx);

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
                "user_idx" => $user_idx
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
    public function g_add_option() {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);
        
        if ($_POST) {
            // 글쓰기 POST 전송 시

            $this->load->helper('alert');
            //radio버튼 value 테이블명 
            $table = $this->input->post('radioName', TRUE);
            
            //모니터
            if ($table=="g_moniter"){
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
            } else if ($table=="g_pc") {
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
            }

            alert('게시물 등록 완료', '../g_gs/');

            exit;
        } else {
            // 쓰기 폼 view 호출
            $this->load->view('list/computational/register/g_add_option');
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
        $data['g_view'] = $this->group_model->get_g_view($user_idx);

        # 시트지정
        $this->phpexcel->setActiveSheetIndex(0);
        $this->phpexcel->getActiveSheet()->setTitle('Sheet1');

        # 테두리
        # 셀 전체(윤곽선 + 안쪽)
        $this->phpexcel->getActiveSheet()->getStyle('A1:B84')->getBorders()
            ->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

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
        $this->phpexcel->getActiveSheet()->mergeCells('A1:B1');
        $this->phpexcel->getActiveSheet()->mergeCells('A3:B3');
        $this->phpexcel->getActiveSheet()->mergeCells('A13:B13');
        $this->phpexcel->getActiveSheet()->mergeCells('A28:B28');
        $this->phpexcel->getActiveSheet()->mergeCells('A34:B34');
        $this->phpexcel->getActiveSheet()->mergeCells('A40:B40');
        $this->phpexcel->getActiveSheet()->mergeCells('A44:B44');
        $this->phpexcel->getActiveSheet()->mergeCells('A48:B48');
        $this->phpexcel->getActiveSheet()->mergeCells('A52:B52');
        $this->phpexcel->getActiveSheet()->mergeCells('A56:B56');
        $this->phpexcel->getActiveSheet()->mergeCells('A60:B60');
        $this->phpexcel->getActiveSheet()->mergeCells('A64:B64');
        $this->phpexcel->getActiveSheet()->mergeCells('A69:B69');
        $this->phpexcel->getActiveSheet()->mergeCells('A74:B74');
        $this->phpexcel->getActiveSheet()->mergeCells('A81:B81');

        /*
         * cell 헤더 출력
         */
        // 개인정보
        $this->phpexcel->getActiveSheet()->setCellValue('B2', '' . $data['g_view']->user_name . '');

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
        $this->phpexcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $this->phpexcel->getActiveSheet()->getColumnDimension('B')->setWidth(100);

        # CELL 열 넓이 자동조절 - 전체
        //for ($col = 'B'; $col !== 'H'; $col++){
        //    $this->phpexcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
        //}

        /*
         * cell 데이터 출력
         */
        // 모니터
        $this->phpexcel->getActiveSheet()->setCellValue('B4', $data['g_view']->m_company);
        $this->phpexcel->getActiveSheet()->setCellValue('B5', $data['g_view']->m_product_name);
        $this->phpexcel->getActiveSheet()->setCellValue('B6', $data['g_view']->m_model_code);
        $this->phpexcel->getActiveSheet()->setCellValue('B7', $data['g_view']->m_model_name);
        $this->phpexcel->getActiveSheet()->setCellValue('B8', $data['g_view']->m_identify);
        $this->phpexcel->getActiveSheet()->setCellValue('B9', $data['g_view']->m_produce_ym);
        $this->phpexcel->getActiveSheet()->setCellValue('B10', $data['g_view']->m_soft_num);
        $this->phpexcel->getActiveSheet()->setCellValue('B11', $data['g_view']->m_gian_num);
        $this->phpexcel->getActiveSheet()->setCellValue('B12', $data['g_view']->m_buy_day);

        // 본체
        $this->phpexcel->getActiveSheet()->setCellValue('B14', $data['g_view']->p_company);
        $this->phpexcel->getActiveSheet()->setCellValue('B15', $data['g_view']->p_model_name);
        $this->phpexcel->getActiveSheet()->setCellValue('B16', $data['g_view']->p_model_code);
        $this->phpexcel->getActiveSheet()->setCellValue('B17', $data['g_view']->p_produce_number);
        $this->phpexcel->getActiveSheet()->setCellValue('B18', $data['g_view']->p_product_code);
        $this->phpexcel->getActiveSheet()->setCellValue('B19', $data['g_view']->p_identify);
        $this->phpexcel->getActiveSheet()->setCellValue('B20', $data['g_view']->p_produce_ym);
        $this->phpexcel->getActiveSheet()->setCellValue('B21', $data['g_view']->p_g_cpu);
        $this->phpexcel->getActiveSheet()->setCellValue('B22', $data['g_view']->p_g_ram);
        $this->phpexcel->getActiveSheet()->setCellValue('B23', $data['g_view']->p_g_hdd_c);
        $this->phpexcel->getActiveSheet()->setCellValue('B24', $data['g_view']->p_g_hdd_d);
        $this->phpexcel->getActiveSheet()->setCellValue('B25', $data['g_view']->p_g_graphic);
        $this->phpexcel->getActiveSheet()->setCellValue('B26', $data['g_view']->p_gian_num);
        $this->phpexcel->getActiveSheet()->setCellValue('B27', $data['g_view']->p_buy_day);

        // 키보드
        $this->phpexcel->getActiveSheet()->setCellValue('B29', $data['g_view']->k_product_name);
        $this->phpexcel->getActiveSheet()->setCellValue('B30', $data['g_view']->k_identify);
        $this->phpexcel->getActiveSheet()->setCellValue('B31', $data['g_view']->k_produce_ym);
        $this->phpexcel->getActiveSheet()->setCellValue('B32', $data['g_view']->k_gian_num);
        $this->phpexcel->getActiveSheet()->setCellValue('B33', $data['g_view']->k_buy_day);

        // 마우스
        $this->phpexcel->getActiveSheet()->setCellValue('B35', $data['g_view']->mu_product_name);
        $this->phpexcel->getActiveSheet()->setCellValue('B36', $data['g_view']->mu_identify);
        $this->phpexcel->getActiveSheet()->setCellValue('B37', $data['g_view']->mu_produce_ym);
        $this->phpexcel->getActiveSheet()->setCellValue('B38', $data['g_view']->mu_gian_num);
        $this->phpexcel->getActiveSheet()->setCellValue('B39', $data['g_view']->mu_buy_day);

        // 헤드셋
        $this->phpexcel->getActiveSheet()->setCellValue('B41', $data['g_view']->h_product_name);
        $this->phpexcel->getActiveSheet()->setCellValue('B42', $data['g_view']->h_gian_num);
        $this->phpexcel->getActiveSheet()->setCellValue('B43', $data['g_view']->h_buy_day);

        // 전화기
        $this->phpexcel->getActiveSheet()->setCellValue('B45', $data['g_view']->c_product_name);
        $this->phpexcel->getActiveSheet()->setCellValue('B46', $data['g_view']->c_gian_num);
        $this->phpexcel->getActiveSheet()->setCellValue('B47', $data['g_view']->c_buy_day);

        // Window OS
        $this->phpexcel->getActiveSheet()->setCellValue('B49', nl2br($data['g_view']->win_product_number));
        $this->phpexcel->getActiveSheet()->setCellValue('B50', $data['g_view']->win_gian_num);
        $this->phpexcel->getActiveSheet()->setCellValue('B51', $data['g_view']->win_duration);

        // MS-OFFICE
        $this->phpexcel->getActiveSheet()->setCellValue('B53', nl2br($data['g_view']->ms_product_number));
        $this->phpexcel->getActiveSheet()->setCellValue('B54', $data['g_view']->ms_gian_num);
        $this->phpexcel->getActiveSheet()->setCellValue('B55', $data['g_view']->ms_duration);

        // 한글
        $this->phpexcel->getActiveSheet()->setCellValue('B57', nl2br($data['g_view']->han_product_number));
        $this->phpexcel->getActiveSheet()->setCellValue('B58', $data['g_view']->han_gian_num);
        $this->phpexcel->getActiveSheet()->setCellValue('B59', $data['g_view']->han_duration);

        // 보안프로그램
        $this->phpexcel->getActiveSheet()->setCellValue('B61', nl2br($data['g_view']->security_product_number));
        $this->phpexcel->getActiveSheet()->setCellValue('B62', $data['g_view']->security_gian_num);
        $this->phpexcel->getActiveSheet()->setCellValue('B63', $data['g_view']->security_duration);

        // QUARK
        $this->phpexcel->getActiveSheet()->setCellValue('B65', $data['g_view']->quark_product_number);
        $this->phpexcel->getActiveSheet()->setCellValue('B66', $data['g_view']->quark_font);
        $this->phpexcel->getActiveSheet()->setCellValue('B67', $data['g_view']->quark_gian_num);
        $this->phpexcel->getActiveSheet()->setCellValue('B68', $data['g_view']->quark_duration);

        // ADOBE
        $this->phpexcel->getActiveSheet()->setCellValue('B70', nl2br($data['g_view']->adobe_product));
        $this->phpexcel->getActiveSheet()->setCellValue('B71', $data['g_view']->adobe_gian_num);
        $this->phpexcel->getActiveSheet()->setCellValue('B72', $data['g_view']->adobe_duration);
        $this->phpexcel->getActiveSheet()->setCellValue('B73', $data['g_view']->adobe_remarks);

        // FONT
        $this->phpexcel->getActiveSheet()->setCellValue('B75', $data['g_view']->font_asia);
        $this->phpexcel->getActiveSheet()->setCellValue('B76', $data['g_view']->font_a_gian_num);
        $this->phpexcel->getActiveSheet()->setCellValue('B77', $data['g_view']->font_a_duration);
        $this->phpexcel->getActiveSheet()->setCellValue('B78', $data['g_view']->font_mukhyang);
        $this->phpexcel->getActiveSheet()->setCellValue('B79', $data['g_view']->font_m_gian_num);
        $this->phpexcel->getActiveSheet()->setCellValue('B80', $data['g_view']->font_m_duration);

        // 압축프로그램
        $this->phpexcel->getActiveSheet()->setCellValue('B82', $data['g_view']->compress_alzip);
        $this->phpexcel->getActiveSheet()->setCellValue('B83', $data['g_view']->compress_gian_num);
        $this->phpexcel->getActiveSheet()->setCellValue('B84', $data['g_view']->compress_duration);
        


        # 파일로 내보낸다. 파일명은 'filename.xls' 이다.
        $filename = '' . $data['g_view']->user_name . '_전산기록부_' . date('Ymd') . '.xls';
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














