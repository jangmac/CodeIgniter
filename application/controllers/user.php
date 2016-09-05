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
        $this -> load -> view('header');

        if (method_exists($this, $method)) {
            $this -> {"{$method}"}();
        }

        // 푸터 include
        $this -> load -> view('footer');
    }

    /*
     * 로그인 처리
     */
    public function login() {
        $this -> load -> library('form_validation');

        $this -> load -> helper('alert');

        $this -> form_validation -> set_rules('username', '아이디', 'required|alpha_numeric');
        $this -> form_validation -> set_rules('password', '비밀번호', 'required');

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
                    'email' => $result -> email,
                    'logged_in' => TRUE
                );

                $this -> session -> set_userdata($newdata);

                alert('로그인 되었습니다.', '/main/lists');
                exit;
            } else {
                alert('아이디나 비밀번호를 확인해 주세요.', '/user');
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

        $this -> session -> sess_destroy();

        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
        alert('로그아웃 되었습니다.', 'index');
        exit;

    }
    
    public function user_register() {
        $this -> load -> view('user/user_register_form');
    }
}














