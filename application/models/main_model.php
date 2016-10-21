<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * dashboard - list(소프트웨어 진행~아시아폰트) 목록별 row 카운트
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
        
        ## 전산등록인원 ##
        //전체
        $sql = "SELECT count(*) as cnt FROM g_gs";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["g_total" => $result[0]['cnt']];
        //경영지원본부
        $sql = "SELECT count(*) as cnt FROM g_gs WHERE group_key='gs'";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["g_gs" => $result[0]['cnt']];

        $sql = "SELECT count(*) as cnt FROM g_gs WHERE group_key='ad1'";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["g_ad1" => $result[0]['cnt']];

        $sql = "SELECT count(*) as cnt FROM g_gs WHERE group_key='ad2'";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["g_ad2" => $result[0]['cnt']];

        $sql = "SELECT count(*) as cnt FROM g_gs WHERE group_key='em_edit'";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["g_em_edit" => $result[0]['cnt']];

        $sql = "SELECT count(*) as cnt FROM g_gs WHERE group_key='tv'";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["g_tv" => $result[0]['cnt']];

        ## PC 사용현황 ##
        //모니터
        $sql = "SELECT count(*) as cnt FROM g_moniter";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["g_moniter" => $result[0]['cnt']];
        //본체
        $sql = "SELECT count(*) as cnt FROM g_pc";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["g_pc" => $result[0]['cnt']];
        //키보드
        $sql = "SELECT count(*) as cnt FROM g_keyboard";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["g_keyboard" => $result[0]['cnt']];
        //마우스
        $sql = "SELECT count(*) as cnt FROM g_mouse";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["g_mouse" => $result[0]['cnt']];
        //헤드셋
        $sql = "SELECT count(*) as cnt FROM g_headset";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["g_headset" => $result[0]['cnt']];
        //전화기
        $sql = "SELECT count(*) as cnt FROM g_cell";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["g_cell" => $result[0]['cnt']];

        ## 전산 소프트웨어 현재사용내역 ##
        // WINDOW 사용내역
        $sql = "SELECT count(*) AS cnt FROM g_window WHERE product_number LIKE \"%Window%\"";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["win" => $result[0]['cnt']];

        // MS-OFFICE 사용내역
        $sql = "SELECT count(*) AS cnt FROM g_ms WHERE product_number LIKE \"%MS-Office%\"";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["ms" => $result[0]['cnt']];

        // 한글제품 사용내역
        $sql = "SELECT count(*) AS cnt FROM g_hangul WHERE product_number LIKE \"%한글%\"";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["hangul" => $result[0]['cnt']];

        ## 전산실 보관 ##
        //모니터
        $sql = "SELECT count(*) as cnt FROM jeonsan_moniter";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["jeonsan_moniter" => $result[0]['cnt']];
        //본체
        $sql = "SELECT count(*) as cnt FROM jeonsan_pc";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["jeonsan_pc" => $result[0]['cnt']];
        //키보드
        $sql = "SELECT count(*) as cnt FROM jeonsan_keyboard";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["jeonsan_keyboard" => $result[0]['cnt']];
        //마우스
        $sql = "SELECT count(*) as cnt FROM jeonsan_mouse";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["jeonsan_mouse" => $result[0]['cnt']];
        //헤드셋
        $sql = "SELECT count(*) as cnt FROM jeonsan_headset";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["jeonsan_headset" => $result[0]['cnt']];
        //전화기
        $sql = "SELECT count(*) as cnt FROM jeonsan_cell";
        $result = $this->db->query($sql)->result_array();
        $dash_count += ["jeonsan_cell" => $result[0]['cnt']];
        
        return $dash_count;
        
    }
}
