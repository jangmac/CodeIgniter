<?php

class User extends CI_Controller
{

    public function member_login()

    {
        $this->load->view('header.php');
        $this->load->view('user/member_login.php');
        $this->load->view('footer.php');
    }

    public function member_register_form()
    {
        $this->load->view('header.php');
        $this->load->view('user/member_register_form');
        $this->load->view('footer.php');
    }
}