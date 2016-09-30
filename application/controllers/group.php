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

            alert('게시물 등록 완료','../g_gs/');

            exit;
        }
        else
        {
            $user_idx = $this->uri->segment(3);
            // 쓰기 폼 view 호출
            $this->load->view('list/computational/g_gs/g_user_register');
        }
    }

    /*
     * 광고1부 그룹원 등록
     */
    public function ad1_user_register()
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

            alert('게시물 등록 완료','../g_ad1/');

            exit;
        }
        else
        {
            $user_idx = $this->uri->segment(3);
            // 쓰기 폼 view 호출
            $this->load->view('list/computational/g_ad1/g_user_register');
        }
    }

    /*
     * 광고2부 그룹원 등록
     */
    public function ad2_user_register()
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

            alert('게시물 등록 완료','../g_ad2/');

            exit;
        }
        else
        {
            $user_idx = $this->uri->segment(3);
            // 쓰기 폼 view 호출
            $this->load->view('list/computational/g_ad2/g_user_register');
        }
    }

    /*
     * 리크루트/편집 그룹원 등록
     */
    public function em_edit_user_register()
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

            alert('게시물 등록 완료','../g_em_edit/');

            exit;
        }
        else
        {
            $user_idx = $this->uri->segment(3);
            // 쓰기 폼 view 호출
            $this->load->view('list/computational/g_em_edit/g_user_register');
        }
    }

    /*
     * 여행사업팀 그룹원 등록
     */
    public function tv_user_register()
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

            alert('게시물 등록 완료','../g_tv/');

            exit;
        }
        else
        {
            $user_idx = $this->uri->segment(3);
            // 쓰기 폼 view 호출
            $this->load->view('list/computational/g_tv/g_user_register');
        }
    }

    /*
     * 기타 그룹원 등록
     */
    public function etc_user_register()
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

            alert('게시물 등록 완료','../g_etc/');

            exit;
        }
        else
        {
            $user_idx = $this->uri->segment(3);
            // 쓰기 폼 view 호출
            $this->load->view('list/computational/g_etc/g_user_register');
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
        $return = $this->user_model->delete_gs_user($table,$idx);

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
        $data['g_gs'] = $this -> user_model -> get_g_gs();
        $this->load->view('list/computational/g_gs/g_list', $data);
    }

    /*
     * 광고1부 그룹원 불러오기
     */
    public function g_ad1()
    {
        $data['g_ad1'] = $this -> user_model -> get_g_ad1();
        $this->load->view('list/computational/g_ad1/g_ad1_list', $data);
    }

    /*
     * 광고2부 그룹원 불러오기
     */
    public function g_ad2()
    {
        $data['g_ad2'] = $this -> user_model -> get_g_ad2();
        $this->load->view('list/computational/g_ad2/g_ad2_list', $data);
    }

    /*
     * 리크루트 / 편집 그룹원 불러오기
     */
    public function g_em_edit()
    {
        $data['g_em_edit'] = $this -> user_model -> get_g_em_edit();
        $this->load->view('list/computational/g_em_edit/g_em_edit_list', $data);
    }

    /*
     * 여행사업팀 그룹원 불러오기
     */
    public function g_tv()
    {
        $data['g_tv'] = $this -> user_model -> get_g_tv();
        $this->load->view('list/computational/g_tv/g_tv_list', $data);
    }

    /*
     * 기타 그룹원 불러오기
     */
    public function g_etc()
    {
        $data['g_etc'] = $this -> user_model -> get_g_etc();
        $this->load->view('list/computational/g_etc/g_etc_list', $data);
    }
    
    /*
     * 전산기록 상세페이지
     */
    public function g_view()
    {
        $this->load->model('group_model');

        $user_idx = $this->uri->segment(3);
        $data['g_view'] = $this -> group_model -> get_g_view($user_idx);

        $this->load->view('list/computational/g_gs/g_view', $data);
    }
    /*
     * 그룹원 전산 수정(추가) - 모니터
     */
    function g_moniter() {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);
        $data['views'] = $this -> group_model -> get_g_view($user_idx);

        // view 호출
        $this -> load -> view('list/computational/register/g_moniter', $data);

        if ( $_POST )
        {
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
            redirect(base_url().'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - 본체
     */
    function g_pc() {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this -> group_model -> get_g_view($user_idx);

        // view 호출
        $this -> load -> view('list/computational/register/g_pc', $data);

        if ( $_POST )
        {
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
            redirect(base_url().'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - 키보드
     */
    function g_keyboard() {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this -> group_model -> get_g_view($user_idx);

        // view 호출
        $this -> load -> view('list/computational/register/g_keyboard', $data);

        if ( $_POST )
        {
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
            redirect(base_url().'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - 마우스
     */
    function g_mouse() {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this -> group_model -> get_g_view($user_idx);

        // view 호출
        $this -> load -> view('list/computational/register/g_mouse', $data);

        if ( $_POST )
        {
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
            redirect(base_url().'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - 헤드셋
     */
    function g_headset() {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this -> group_model -> get_g_view($user_idx);

        // view 호출
        $this -> load -> view('list/computational/register/g_headset', $data);

        if ( $_POST )
        {
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
            redirect(base_url().'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - 전화기
     */
    function g_cell() {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this -> group_model -> get_g_view($user_idx);

        // view 호출
        $this -> load -> view('list/computational/register/g_cell', $data);

        if ( $_POST )
        {
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
            redirect(base_url().'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - Window OS
     */
    function g_window() {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this -> group_model -> get_g_view($user_idx);

        // view 호출
        $this -> load -> view('list/computational/register/g_window', $data);

        if ( $_POST )
        {
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
            redirect(base_url().'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - MS-Office
     */
    function g_ms() {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this -> group_model -> get_g_view($user_idx);

        // view 호출
        $this -> load -> view('list/computational/register/g_ms', $data);

        if ( $_POST )
        {
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
            redirect(base_url().'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - 한글
     */
    function g_hangul() {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this -> group_model -> get_g_view($user_idx);

        // view 호출
        $this -> load -> view('list/computational/register/g_hangul', $data);

        if ( $_POST )
        {
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
            redirect(base_url().'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - 보안프로그램
     */
    function g_security() {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this -> group_model -> get_g_view($user_idx);

        // view 호출
        $this -> load -> view('list/computational/register/g_security', $data);

        if ( $_POST )
        {
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
            redirect(base_url().'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - Quark(쿽)
     */
    function g_quark() {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this -> group_model -> get_g_view($user_idx);

        // view 호출
        $this -> load -> view('list/computational/register/g_quark', $data);

        if ( $_POST )
        {
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
            redirect(base_url().'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - adobe
     */
    function g_adobe() {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this -> group_model -> get_g_view($user_idx);

        // view 호출
        $this -> load -> view('list/computational/register/g_adobe', $data);

        if ( $_POST )
        {
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
                "adobe_product" =>$adobe_product,
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
            redirect(base_url().'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - font
     */
    function g_font() {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this -> group_model -> get_g_view($user_idx);

        // view 호출
        $this -> load -> view('list/computational/register/g_font', $data);

        if ( $_POST )
        {
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
            redirect(base_url().'list/computational/g_gs/');

            exit;
        }
    }

    /*
     * 그룹원 전산 수정(추가) - 압축프로그램
     */
    function g_compress() {

        $this->load->model('group_model');
        // 번호에 해당하는 데이터 가져오기
        $user_idx = $this->uri->segment(3);

        $data['views'] = $this -> group_model -> get_g_view($user_idx);

        // view 호출
        $this -> load -> view('list/computational/register/g_compress', $data);

        if ( $_POST )
        {
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
            redirect(base_url().'list/computational/g_gs/');

            exit;
        }
    }


}














