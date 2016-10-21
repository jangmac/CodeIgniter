<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * 사용자 인증 컨트롤러
 */

class User extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('form');
    }

    public function  index() {
        $this -> login();
    }

    public function _remap($method) {
        // 헤더 include
        $this -> load -> view('user/u_header');

        if (method_exists($this, $method)) {
            $this -> {"{$method}"}();
        }

        // 푸터 include
        $this -> load -> view('user/u_footer');
    }

    /*
     * 로그인 처리
     */
    public function login() {
        // Form validation 라이브러리 로드 ( 폼 검증 라이브러리 로드)
        $this -> load -> library('form_validation');

        // Alert 라이브러리 로드(메시지)
        $this -> load -> helper('alert');

        // 폼 검증 필드와 규칙 사전 정의
        $this -> form_validation -> set_rules(md5('username'), '아이디', 'required|alpha_numeric');
        $this -> form_validation -> set_rules(md5('password'), '비밀번호', 'required');

        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';

        if ($this -> form_validation -> run() == TRUE) {
            $auth_data = array(
                'username' => $this -> input -> post('username', TRUE),
                'password' => $this -> input -> post('password', TRUE)
            );

            $result = $this -> user_model -> login($auth_data);

            if ($result) {
                $newdata = array(
                    'username' => $result -> username,
                    //'email' => $result -> email,
                    'logged_in' => TRUE
                );

                $this -> session -> set_userdata($newdata);

                alert('로그인 되었습니다.', '/index.php');
                exit;
            } else {
                alert('아이디와 비밀번호를 확인해 주세요.', '/user');
                exit;
            }
        } else {
            $this -> load -> view('user/user_login');
        }
    }

    /*
     * 로그아웃 처리
     */

    public function logout() {

        $this -> load -> helper('alert');

        // 현재 세션을 버림.
        $this -> session -> sess_destroy();

        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
        alert('로그아웃 되었습니다.', 'index');
        exit;

    }
    
    public function user_register() {
        $this -> load -> view('user/user_register_form');
    }
}














