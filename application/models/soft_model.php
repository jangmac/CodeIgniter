<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * soft 모델
 */

class Soft_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * 리스트가져오기
     */

    function get_list()
    {
        $sql = "SELECT * FROM items3";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_progress_list()
    {

        $sql = "SELECT * FROM soft_progress";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_keep_list()
    {
        $sql = "SELECT * FROM soft_keep";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_stop_list()
    {
        $sql = "SELECT * FROM soft_stop";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_kaspersky_list()
    {
        $sql = "SELECT * FROM kaspersky";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_printer_list()
    {
        $sql = "SELECT * FROM printer";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_software_list()
    {
        $sql = "SELECT * FROM software";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_xpdown_list()
    {
        $sql = "SELECT * FROM xp_down";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_ms_up_list()
    {
        $sql = "SELECT * FROM ms_up";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_quark_up_list()
    {
        $sql = "SELECT * FROM quark_up";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_asiafont_up_list()
    {
        $sql = "SELECT * FROM asiafont_up";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_soft_account_list()
    {
        $sql = "SELECT * FROM soft_account";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    /*
     * 게시글 상세페이지
     */

    function get_view($id)
    {
        $sql = "SELECT * FROM items3 WHERE id='$id'";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }

    /*
     * 등록
     */

    function insert_soft($product_name, $version, $company, $purpose, $target, $compatibility, $sirial_num, $package, $license_numb, $keep_place, $use_num, $remarks)
    {
        $sql = "INSERT INTO soft_progress (
        product_name, version, company, purpose, target, compatibility, sirial_num, package, license_numb, keep_place, use_num, remarks
        ) 
        VALUES (
        '" . $product_name . "'
        , '" . $version . "'
        , '" . $company . "'
        , '" . $purpose . "'
        , '" . $target . "'
        , '" . $compatibility . "'
        , '" . $sirial_num . "'
        , '" . $package . "'
        , '" . $license_numb . "'
        , '" . $keep_place . "'
        , '" . $use_num . "'
        , '" . $remarks . "'
        )";
        $query = $this->db->query($sql);
    }

    /*
     * 수정
     */
    function modify_soft($idx)
    {

        $sql = "SELECT * FROM soft_progress WHERE idx = '" . $idx . "'";
        $query = $this -> db -> query($sql);

        // 게시물 내용 반환
        $result = $query -> row();

        return $result;
    }

    function delete_soft($id)
    {
        $sql = "DELETE FROM items3 WHERE id = '" . $id . "'";

        $this->db->query($sql);
    }
}