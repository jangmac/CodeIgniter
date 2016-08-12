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
     * User 목록 가져오기
     */

    function  get_list()
    {
        $sql = "SELECT * FROM user";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }
}