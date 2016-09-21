<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * soft 모델
 */

class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * dashboard - 목록별 row 카운트
     */

    function get_count()
    {
        $dash_count = array();
        $sql="";
        
        // 소프트웨어(진행) 건수
        $sql = "SELECT count(*) as cnt FROM soft_progress";
        //$query=$this->db->query($sql);
        //$result = $query->row();
        //return $result;
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["soft_progress" => $result[0]['cnt']];

        // 소프트웨어(보관) 건수
        $sql = "SELECT count(*) as cnt FROM soft_keep";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["soft_keep" => $result[0]['cnt']];

        // 소프트웨어(사용불가) 건수
        $sql = "SELECT count(*) as cnt FROM soft_stop";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["soft_stop" => $result[0]['cnt']];

        // 카스퍼스키 건수
        $sql = "SELECT count(*) as cnt FROM kaspersky";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["kaspersky" => $result[0]['cnt']];

        // 프린터 건수
        $sql = "SELECT count(*) as cnt FROM printer";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["printer" => $result[0]['cnt']];

        // xp 업/다운그레이드 건수
        $sql = "SELECT count(*) as cnt FROM xp_down";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["xp_down" => $result[0]['cnt']];

        // ms-office 건수
        $sql = "SELECT count(*) as cnt FROM ms_up";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["ms_up" => $result[0]['cnt']];

        // quark 건수
        $sql = "SELECT count(*) as cnt FROM quark_up";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["quark_up" => $result[0]['cnt']];

        // 아시아폰트 건수
        $sql = "SELECT count(*) as cnt FROM asiafont_up";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["asiafont_up" => $result[0]['cnt']];
        
        
        return $dash_count;
        
    }
}