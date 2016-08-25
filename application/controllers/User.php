<?php

class User extends CI_Controller
{
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

    public function member_login()

    {
        $this->load->view('user/member_login.php');
    }

    public function member_register_form()
    {
        $this->load->view('user/member_register_form');
    }
}