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

    /*
     * 아이디 비밀번호 체크
     *
     * @param array $auth 폼 전송받은 아이디, 비밀번호
     * @return array
     */
    function login($auth) {
        $sql = "SELECT username FROM users WHERE username = '" . $auth['username'] . "' AND password = '" . $auth['password'] . "' ";

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
     * 광고1부 그룹원 불러오기
     */
    function get_g_ad1()
    {

        $sql = "SELECT * FROM g_gs where group_key ='ad1'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    /*
     * 광고2부 그룹원 불러오기
     */
    function get_g_ad2()
    {

        $sql = "SELECT * FROM g_gs where group_key ='ad2'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    /*
     * 리크루트 그룹원 불러오기
     */
    function get_g_em_edit()
    {

        $sql = "SELECT * FROM g_gs where group_key ='em_edit'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    /*
     * 여행사업팀 그룹원 불러오기
     */
    function get_g_tv()
    {

        $sql = "SELECT * FROM g_gs where group_key ='tv'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    /*
     * 기타 그룹원 불러오기
     */
    function get_g_etc()
    {

        $sql = "SELECT * FROM g_gs where group_key ='etc'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }
    

    /*
     * 그룹원 등록
     * g_gs가 전체 그룹원 테이블임.
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

        // 그룹원 개인별로 전산기록부 user_idx 값을 받는다. 값은 g_gs insert하면서 최대 idx값으로 한다.
        // 공통된값을 넣으므로써 전산기록부에서 데이터를 가져올때 user_idx로 불러오면 각 그룹원의 개인 전산기록을 가져올수있다.

        $sql = "insert into g_moniter(user_idx) (select max(idx) from g_gs)";
        $query = $this->db->query($sql);

        $sql = "insert into g_pc(user_idx) (select max(idx) from g_gs)";
        $query = $this->db->query($sql);

        $sql = "insert into g_keyboard(user_idx) (select max(idx) from g_gs)";
        $query = $this->db->query($sql);

        $sql = "insert into g_mouse(user_idx) (select max(idx) from g_gs)";
        $query = $this->db->query($sql);

        $sql = "insert into g_headset(user_idx) (select max(idx) from g_gs)";
        $query = $this->db->query($sql);

        $sql = "insert into g_cell(user_idx) (select max(idx) from g_gs)";
        $query = $this->db->query($sql);

        $sql = "insert into g_window(user_idx) (select max(idx) from g_gs)";
        $query = $this->db->query($sql);

        $sql = "insert into g_ms(user_idx) (select max(idx) from g_gs)";
        $query = $this->db->query($sql);

        $sql = "insert into g_hangul(user_idx) (select max(idx) from g_gs)";
        $query = $this->db->query($sql);

        $sql = "insert into g_security(user_idx) (select max(idx) from g_gs)";
        $query = $this->db->query($sql);

        $sql = "insert into g_quark(user_idx) (select max(idx) from g_gs)";
        $query = $this->db->query($sql);

        $sql = "insert into g_adobe(user_idx) (select max(idx) from g_gs)";
        $query = $this->db->query($sql);

        $sql = "insert into g_font(user_idx) (select max(idx) from g_gs)";
        $query = $this->db->query($sql);

        $sql = "insert into g_compress(user_idx) (select max(idx) from g_gs)";
        $query = $this->db->query($sql);

    }

    /*
     * 그룹원 수정
     */
    public function view_gs_user($idx)
    {
        $sql = "SELECT * FROM g_gs WHERE idx=$idx";
        $query = $this->db->query($sql);
        $result = $query->row();
        return $result;

    }

    /*
     * 그룹원 삭제
     */

    public function delete_gs_user($table, $idx)
    {
        $delete_array = array(
            'idx' => $idx
        );

        $result = $this->db->delete($table, $delete_array);

        return $result;
    }

}