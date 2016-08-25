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

    function get_list() {
        $sql = "SELECT * FROM items3";

        $query = $this -> db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_progress_list($type = '', $offset = '', $limit = '') {
        $limit_query = '';

        if ($limit != '' OR $offset != '') {
            // 페이징이 있을 경우 처리
            $limit_query = ' LIMIT ' . $offset . ', ' . $limit;
        }
        $sql = "SELECT * FROM soft_progress ORDER BY idx DESC " . $limit_query;
        $query = $this -> db->query($sql);

        if ($type == 'count') {
            $result = $query -> num_rows();
        } else {
            $result = $query -> result();
        }


        return $result;
    }
    
    /*
     * 게시글 view
     */

    function  get_view($id) {
        $sql = "SELECT * FROM items3 WHERE id='$id'";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }
    
    /*
     *
     */

    function insert_soft($content, $created_on, $due_date) {
        $sql = "INSERT INTO items3 (content, created_on, due_date) VALUES ('" . $content . "', '" . $created_on . "', '" . $due_date . "')";

        $query = $this -> db -> query($sql);
    }

    function delete_soft($id)
    {
        $sql = "DELETE FROM items3 WHERE id = '".$id."'";

        $this->db->query($sql);
    }
}