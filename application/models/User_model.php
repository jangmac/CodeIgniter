<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * User 모델
 */
class User_model extends CI_Model
{
    function  __construct()
    {
        parent::__construct();
    }

    /**
     * 아이디 비밀번호 체크
     *
     * @param array $auth 폼 전송받은 아이디, 비밀번호
     * @return array
     */
    function login($auth) {
        $sql = "SELECT username, email FROM users WHERE username = '" . $auth['username'] . "' AND password = '" . $auth['password'] . "' ";

        $query = $this -> db -> query($sql);

        if ($query -> num_rows() > 0) {
            return $query -> row();
        } else {
            return FALSE;
        }
    }

    /*
     * 경영지원본부 그룹원 불러오기
     */
    function get_g_gs()
    {

        $sql = "SELECT * FROM g_gs where group_key ='gs'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    /*
     * 전산내용 가져오기
     */

    function get_g_view($user_idx) {

        //모니터 가져오기
        $sql = "SELECT * FROM g_moniter WHERE user_idx='" . $user_idx . "'";
        $query = $this->db->query($sql);
        $result = $query->row();

        //본체 가져오기
        //$sql = "SELECT * FROM g_pc WHERE user_idx='" . $user_idx . "'";
        //$query = $this->db->query($sql);
        //$result = $query->row();

        return $result;

    }

    /*
     * 경영지원본부 그룹원 등록
     */

    function insert_gs_user($user_name, $user_email, $user_group, $user_grade, $user_number, $group_key)
    {
        $sql = "INSERT INTO g_gs (
        user_name, user_email, user_group, user_grade, user_number, group_key
        ) 
        VALUES (
        '" . $user_name . "'
        , '" . $user_email . "'
        , '" . $user_group . "'
        , '" . $user_grade . "'
        , '" . $user_number . "'
        , '" . $group_key . "'
        )";
        $query = $this->db->query($sql);
    }

}