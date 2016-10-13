<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * soft 모델
 */

class Group_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * 전산내용 가져오기 - join으로 해본다
     */

    function get_g_view($user_idx)
    {
        $sql = "SELECT
        g_moniter.idx as m_idx,
        g_moniter.user_idx as m_user_idx,
        g_moniter.company as m_company,
        g_moniter.product_name as m_product_name,
        g_moniter.model_code as m_model_code,
        g_moniter.model_name as m_model_name,
        g_moniter.identify as m_identify,
        g_moniter.produce_ym as m_produce_ym,
        g_moniter.soft_num as m_soft_num,
        g_moniter.gian_num as m_gian_num,
        g_moniter.buy_day as m_buy_day,
        
        g_pc.idx as p_idx,
        g_pc.company as p_company,
        g_pc.model_name as p_model_name,
        g_pc.model_code as p_model_code,
        g_pc.produce_number as p_produce_number,
        g_pc.product_code as p_product_code,
        g_pc.identify as p_identify,
        g_pc.produce_ym as p_produce_ym,
        g_pc.g_cpu as p_g_cpu,
        g_pc.g_ram as p_g_ram,
        g_pc.g_hdd_c as p_g_hdd_c,
        g_pc.g_hdd_d as p_g_hdd_d,
        g_pc.g_graphic as p_g_graphic,
        g_pc.gian_num as p_gian_num,
        g_pc.buy_day as p_buy_day,
        
        g_keyboard.product_name as k_product_name,
        g_keyboard.identify as k_identify,
        g_keyboard.produce_ym as k_produce_ym,
        g_keyboard.gian_num as k_gian_num,
        g_keyboard.buy_day as k_buy_day,
        
        g_mouse.product_name as mu_product_name,
        g_mouse.identify as mu_identify,
        g_mouse.produce_ym as mu_produce_ym,
        g_mouse.gian_num as mu_gian_num,
        g_mouse.buy_day as mu_buy_day,
        
        g_headset.product_name as h_product_name,
        g_headset.gian_num as h_gian_num,
        g_headset.buy_day as h_buy_day,
        
        g_cell.product_name as c_product_name,
        g_cell.gian_num as c_gian_num,
        g_cell.buy_day as c_buy_day,
        
        g_window.product_number as win_product_number,
        g_window.gian_num as win_gian_num,
        g_window.duration as win_duration,
        
        g_ms.product_number as ms_product_number,
        g_ms.gian_num as ms_gian_num,
        g_ms.duration as ms_duration,
        
        g_hangul.product_number as han_product_number,
        g_hangul.gian_num as han_gian_num,
        g_hangul.duration as han_duration,
        
        g_security.product_number as security_product_number,
        g_security.gian_num as security_gian_num,
        g_security.duration as security_duration,
        
        g_quark.product_number as quark_product_number,
        g_quark.font as quark_font,
        g_quark.gian_num as quark_gian_num,
        g_quark.duration as quark_duration,
        
        g_adobe.photoshop as adobe_photoshop,
        g_adobe.illustrator as adobe_illustrator,
        g_adobe.acrobat as adobe_acrobat,
        g_adobe.gian_num as adobe_gian_num,
        g_adobe.duration as adobe_duration,
        g_adobe.remarks as adobe_remarks,
        g_adobe.adobe_product as adobe_product,
        
        g_font.asia as font_asia,
        g_font.a_gian_num as font_a_gian_num,
        g_font.a_duration as font_a_duration,
        g_font.mukhyang as font_mukhyang,
        g_font.m_gian_num as font_m_gian_num,
        g_font.m_duration as font_m_duration,
        
        g_compress.alzip as compress_alzip,
        g_compress.gian_num as compress_gian_num,
        g_compress.duration as compress_duration,
        
        g_gs.user_name as user_name,
        g_gs.user_group as user_group,
        g_gs.user_grade as user_grade
        
        FROM 
        g_moniter LEFT JOIN g_pc ON 
        g_moniter.user_idx= g_pc.user_idx
        JOIN g_keyboard ON g_moniter.user_idx=g_keyboard.user_idx
        JOIN g_mouse ON g_moniter.user_idx=g_mouse.user_idx
        JOIN g_headset ON g_moniter.user_idx=g_headset.user_idx
        JOIN g_cell ON g_moniter.user_idx=g_cell.user_idx
        JOIN g_window ON g_moniter.user_idx=g_window.user_idx
        JOIN g_ms ON g_moniter.user_idx=g_ms.user_idx
        JOIN g_hangul ON g_moniter.user_idx=g_hangul.user_idx
        JOIN g_security ON g_moniter.user_idx=g_security.user_idx
        JOIN g_quark ON g_moniter.user_idx=g_quark.user_idx
        JOIN g_adobe ON g_moniter.user_idx=g_adobe.user_idx
        JOIN g_font ON g_moniter.user_idx=g_font.user_idx
        JOIN g_compress ON g_moniter.user_idx=g_compress.user_idx
        JOIN g_gs on g_gs.idx=$user_idx
        WHERE g_moniter.user_idx=$user_idx";
        $query = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }

    function get_view_moniter($user_idx)
    {
        $sql = "SELECT * FROM g_moniter WHERE user_idx='$user_idx'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }
    
    function get_view_pc($user_idx)
    {
        $sql = "SELECT * FROM g_pc WHERE user_idx='$user_idx'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_view_keyboard($user_idx)
    {
        $sql = "SELECT * FROM g_keyboard WHERE user_idx='$user_idx'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_view_mouse($user_idx)
    {
        $sql = "SELECT * FROM g_mouse WHERE user_idx='$user_idx'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_view_headset($user_idx)
    {
        $sql = "SELECT * FROM g_headset WHERE user_idx='$user_idx'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_view_cell($user_idx)
    {
        $sql = "SELECT * FROM g_cell WHERE user_idx='$user_idx'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_view_window($user_idx)
    {
        $sql = "SELECT * FROM g_window WHERE user_idx='$user_idx'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_view_ms($user_idx)
    {
        $sql = "SELECT * FROM g_ms WHERE user_idx='$user_idx'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_view_hangul($user_idx)
    {
        $sql = "SELECT * FROM g_hangul WHERE user_idx='$user_idx'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_view_security($user_idx)
    {
        $sql = "SELECT * FROM g_security WHERE user_idx='$user_idx'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_view_quark($user_idx)
    {
        $sql = "SELECT * FROM g_quark WHERE user_idx='$user_idx'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_view_adobe($user_idx)
    {
        $sql = "SELECT * FROM g_adobe WHERE user_idx='$user_idx'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_view_font($user_idx)
    {
        $sql = "SELECT * FROM g_font WHERE user_idx='$user_idx'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_view_compress($user_idx)
    {
        $sql = "SELECT * FROM g_compress WHERE user_idx='$user_idx'";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_view_user($user_idx)
    {
        $sql = "SELECT * FROM g_gs WHERE idx='$user_idx'";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }

    function update_view_moniter($idx)
    {
        $sql = "SELECT * FROM g_moniter WHERE idx=$idx";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }

    function update_view_pc($idx)
    {
        $sql = "SELECT * FROM g_pc WHERE idx=$idx";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }

    function update_view_keyboard($idx)
    {
        $sql = "SELECT * FROM g_keyboard WHERE idx=$idx";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }

    function update_view_mouse($idx)
    {
        $sql = "SELECT * FROM g_mouse WHERE idx=$idx";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }

    function update_view_headset($idx)
    {
        $sql = "SELECT * FROM g_headset WHERE idx=$idx";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }

    function update_view_cell($idx)
    {
        $sql = "SELECT * FROM g_cell WHERE idx=$idx";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }

    function update_view_window($idx)
    {
        $sql = "SELECT * FROM g_window WHERE idx=$idx";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }

    function update_view_ms($idx)
    {
        $sql = "SELECT * FROM g_ms WHERE idx=$idx";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }


    function update_view_hangul($idx)
    {
        $sql = "SELECT * FROM g_hangul WHERE idx=$idx";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }


    function update_view_security($idx)
    {
        $sql = "SELECT * FROM g_security WHERE idx=$idx";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }

    function update_view_quark($idx)
    {
        $sql = "SELECT * FROM g_quark WHERE idx=$idx";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }

    function update_view_adobe($idx)
    {
        $sql = "SELECT * FROM g_adobe WHERE idx=$idx";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }

    function update_view_font($idx)
    {
        $sql = "SELECT * FROM g_font WHERE idx=$idx";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }

    function update_view_compress($idx)
    {
        $sql = "SELECT * FROM g_compress WHERE idx=$idx";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;
    }


    /*
     * 전산내용 가져오기 - 모니터

    function get_g_view($user_idx) {
        $sql = "SELECT * FROM g_moniter WHERE user_idx='" . $user_idx . "'";
        $query = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
    */

    /*
     * 전산내용수정 - 모니터
     */
    function update_g_moniter($params)
    {

        $sql = "
			UPDATE  g_moniter  
			SET company =?, product_name =?, model_code =?, model_name =?, identify =?,
			 produce_ym =?, soft_num =?, gian_num =?, buy_day =?
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['company'],
            $params['product_name'],
            $params['model_code'],
            $params['model_name'],
            $params['identify'],
            $params['produce_ym'],
            $params['soft_num'],
            $params['gian_num'],
            $params['buy_day'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * 전산내용수정 - 본체
     */
    function update_g_pc($params)
    {

        $sql = "
			UPDATE g_pc  
			SET company =?, model_name =?, model_code =?, produce_number =?, product_code =?,
			 identify =?, produce_ym =?, g_cpu =?, g_ram =?, g_hdd_c =?, g_hdd_d =?, g_graphic =?, gian_num =?, buy_day =?
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['company'],
            $params['model_name'],
            $params['model_code'],
            $params['produce_number'],
            $params['product_code'],
            $params['identify'],
            $params['produce_ym'],
            $params['g_cpu'],
            $params['g_ram'],
            $params['g_hdd_c'],
            $params['g_hdd_d'],
            $params['g_graphic'],
            $params['gian_num'],
            $params['buy_day'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * 전산내용수정 - 키보드
     */
    function update_g_keyboard($params)
    {

        $sql = "
			UPDATE  g_keyboard  
			SET product_name =?, identify =?, produce_ym =?, gian_num =?, buy_day =?			 
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_name'],
            $params['identify'],
            $params['produce_ym'],
            $params['gian_num'],
            $params['buy_day'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * 전산내용수정 - 마우스
     */
    function update_g_mouse($params)
    {

        $sql = "
			UPDATE  g_mouse  
			SET product_name =?, identify =?, produce_ym =?, gian_num =?, buy_day =?			 
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_name'],
            $params['identify'],
            $params['produce_ym'],
            $params['gian_num'],
            $params['buy_day'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * 전산내용수정 - 헤드셋
     */
    function update_g_headset($params)
    {

        $sql = "
			UPDATE  g_headset  
			SET product_name =?, identify =?, produce_ym =?, gian_num =?, buy_day =?			 
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_name'],
            $params['identify'],
            $params['produce_ym'],
            $params['gian_num'],
            $params['buy_day'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * 전산내용수정 - 전화기
     */
    function update_g_cell($params)
    {

        $sql = "
			UPDATE  g_cell  
			SET product_name =?, gian_num =?, buy_day =?			 
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_name'],
            $params['gian_num'],
            $params['buy_day'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * 전산내용수정 - Window OS
     */
    function update_g_window($params)
    {

        $sql = "
			UPDATE  g_window  
			SET product_number =?, gian_num =?, duration =?			 
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_number'],
            $params['gian_num'],
            $params['duration'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * 전산내용수정 - MS-Office
     */
    function update_g_ms($params)
    {

        $sql = "
			UPDATE  g_ms  
			SET product_number =?, gian_num =?, duration =?			 
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_number'],
            $params['gian_num'],
            $params['duration'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * 전산내용수정 - 한글
     */
    function update_g_hangul($params)
    {

        $sql = "
			UPDATE  g_hangul  
			SET product_number =?, gian_num =?, duration =?			 
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_number'],
            $params['gian_num'],
            $params['duration'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * 전산내용수정 - 보안프로그램
     */
    function update_g_security($params)
    {

        $sql = "
			UPDATE  g_security  
			SET product_number =?, gian_num =?, duration =?			 
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_number'],
            $params['gian_num'],
            $params['duration'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * 전산내용수정 - Quark
     */
    function update_g_quark($params)
    {

        $sql = "
			UPDATE  g_quark  
			SET product_number =?, font =?, gian_num =?, duration =?			 
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_number'],
            $params['font'],
            $params['gian_num'],
            $params['duration'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * 전산내용수정 - adobe
     */
    function update_g_adobe($params)
    {

        $sql = "
			UPDATE  g_adobe  
			SET adobe_product =?, gian_num =?, duration =?, remarks =?		 
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['adobe_product'],
            $params['gian_num'],
            $params['duration'],
            $params['remarks'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * 전산내용수정 - font
     */
    function update_g_font($params)
    {

        $sql = "
			UPDATE  g_font  
			SET asia =?, a_gian_num =?, a_duration =?, mukhyang =?, m_gian_num =?, m_duration =?		 
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['asia'],
            $params['a_gian_num'],
            $params['a_duration'],
            $params['mukhyang'],
            $params['m_gian_num'],
            $params['m_duration'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * 전산내용수정 - 압축프로그램
     */
    function update_g_compress($params)
    {

        $sql = "
			UPDATE  g_compress  
			SET alzip =?, gian_num =?, duration =?		 
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['alzip'],
            $params['gian_num'],
            $params['duration'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * 전산 항목 부분추가(ADD)
     */

    function g_add_moniter(
        $user_idx, $m_company, $m_product_name, $m_model_code,
        $m_model_name, $m_identify, $m_produce_ym, $m_soft_num, $m_gian_num, $m_buy_day)
    {
        $sql = "INSERT INTO g_moniter (
        user_idx, company, product_name, model_code, model_name, identify, produce_ym ,soft_num, gian_num, buy_day
        ) 
        VALUES (
        '" . $user_idx . "',
        '" . $m_company . "',
        '" . $m_product_name . "',
        '" . $m_model_code . "',
        '" . $m_model_name . "',
        '" . $m_identify . "',
        '" . $m_produce_ym . "',
        '" . $m_soft_num . "',
        '" . $m_gian_num . "',
        '" . $m_buy_day . "'
        )";
        $query = $this->db->query($sql);
    }

    function g_add_pc(
        $user_idx, $p_company, $p_model_name, $p_model_code, $p_produce_number, $p_product_code, $p_identify, $p_produce_ym,
        $p_g_cpu, $p_g_ram, $p_g_hdd_c, $p_g_hdd_d, $p_g_graphic, $p_gian_num, $p_buy_day
    )
    {
        $sql = "INSERT INTO g_pc (
        user_idx, company, model_name, model_code, produce_number, product_code, identify, produce_ym, 
        g_cpu, g_ram, g_hdd_c, g_hdd_d, g_graphic, gian_num, buy_day
        ) 
        VALUES (
        '" . $user_idx . "',
        '" . $p_company . "',
        '" . $p_model_name . "',
        '" . $p_model_code . "',
        '" . $p_produce_number . "',
        '" . $p_product_code . "',
        '" . $p_identify . "',
        '" . $p_produce_ym . "',
        '" . $p_g_cpu . "',
        '" . $p_g_ram . "',
        '" . $p_g_hdd_c . "',
        '" . $p_g_hdd_d . "',
        '" . $p_g_graphic . "',
        '" . $p_gian_num . "',
        '" . $p_buy_day . "'
        )";
        $query = $this->db->query($sql);
    }

    function g_add_keyboard(
        $user_idx, $k_product_name, $k_identify, $k_produce_ym, $k_gian_num, $k_buy_day
    )
    {
        $sql = "INSERT INTO g_keyboard (
        user_idx, product_name, identify, produce_ym, gian_num, buy_day
        ) 
        VALUES (
        '" . $user_idx . "',
        '" . $k_product_name . "',
        '" . $k_identify . "',
        '" . $k_produce_ym . "',
        '" . $k_gian_num . "',
        '" . $k_buy_day . "'
        )";
        $query = $this->db->query($sql);
    }

    function g_add_mouse(
        $user_idx, $mu_product_name, $mu_identify, $mu_produce_ym, $mu_gian_num, $mu_buy_day
    )
    {
        $sql = "INSERT INTO g_mouse (
        user_idx, product_name, identify, produce_ym, gian_num, buy_day
        ) 
        VALUES (
        '" . $user_idx . "',
        '" . $mu_product_name . "',
        '" . $mu_identify . "',
        '" . $mu_produce_ym . "',
        '" . $mu_gian_num . "',
        '" . $mu_buy_day . "'
        )";
        $query = $this->db->query($sql);
    }

    function g_add_headset(
        $user_idx, $h_product_name, $h_gian_num, $h_buy_day
    )
    {
        $sql = "INSERT INTO g_headset (
        user_idx, product_name, gian_num, buy_day
        ) 
        VALUES (
        '" . $user_idx . "',
        '" . $h_product_name . "',
        '" . $h_gian_num . "',
        '" . $h_buy_day . "'
        )";
        $query = $this->db->query($sql);
    }

    function g_add_cell(
        $user_idx, $c_product_name, $c_gian_num, $c_buy_day
    )
    {
        $sql = "INSERT INTO g_cell (
        user_idx, product_name, gian_num, buy_day
        ) 
        VALUES (
        '" . $user_idx . "',
        '" . $c_product_name . "',
        '" . $c_gian_num . "',
        '" . $c_buy_day . "'
        )";
        $query = $this->db->query($sql);
    }

    function g_add_window(
        $user_idx, $win_product_number, $win_gian_num, $win_duration
    )
    {
        $sql = "INSERT INTO g_window (
        user_idx, product_number, gian_num, duration
        ) 
        VALUES (
        '" . $user_idx . "',
        '" . $win_product_number . "',
        '" . $win_gian_num . "',
        '" . $win_duration . "'
        )";
        $query = $this->db->query($sql);
    }

    function g_add_ms(
        $user_idx, $ms_product_number, $ms_gian_num, $ms_duration
    )
    {
        $sql = "INSERT INTO g_ms (
        user_idx, product_number, gian_num, duration
        ) 
        VALUES (
        '" . $user_idx . "',
        '" . $ms_product_number . "',
        '" . $ms_gian_num . "',
        '" . $ms_duration . "'
        )";
        $query = $this->db->query($sql);
    }

    function g_add_hangul(
        $user_idx, $han_product_number, $han_gian_num, $han_duration
    )
    {
        $sql = "INSERT INTO g_hangul (
        user_idx, product_number, gian_num, duration
        ) 
        VALUES (
        '" . $user_idx . "',
        '" . $han_product_number . "',
        '" . $han_gian_num . "',
        '" . $han_duration . "'
        )";
        $query = $this->db->query($sql);
    }

    function g_add_security(
        $user_idx, $security_product_number, $security_gian_num, $security_duration
    )
    {
        $sql = "INSERT INTO g_security (
        user_idx, product_number, gian_num, duration
        ) 
        VALUES (
        '" . $user_idx . "',
        '" . $security_product_number . "',
        '" . $security_gian_num . "',
        '" . $security_duration . "'
        )";
        $query = $this->db->query($sql);
    }

    function g_add_quark(
        $user_idx, $quark_product_number, $quark_font, $quark_gian_num, $quark_duration
    )
    {
        $sql = "INSERT INTO g_quark (
        user_idx, product_number, font, gian_num, duration
        ) 
        VALUES (
        '" . $user_idx . "',
        '" . $quark_product_number . "',
        '" . $quark_font . "',
        '" . $quark_gian_num . "',
        '" . $quark_duration . "'
        )";
        $query = $this->db->query($sql);
    }

    function g_add_adobe(
        $user_idx, $adobe_product, $adobe_gian_num, $adobe_duration, $adobe_remarks
    )
    {
        $sql = "INSERT INTO g_adobe (
        user_idx, adobe_product, gian_num, duration, remarks
        ) 
        VALUES (
        '" . $user_idx . "',
        '" . $adobe_product . "',
        '" . $adobe_gian_num . "',
        '" . $adobe_duration . "',
        '" . $adobe_remarks . "'
        )";
        $query = $this->db->query($sql);
    }

    function g_add_font(
        $user_idx, $font_asia, $font_a_gian_num, $font_a_duration, $font_mukhyang, $font_m_gian_num, $font_m_duration
    )
    {
        $sql = "INSERT INTO g_font (
        user_idx, asia, a_gian_num, a_duration, mukhyang, m_gian_num, m_duration
        ) 
        VALUES (
        '" . $user_idx . "',
        '" . $font_asia . "',
        '" . $font_a_gian_num . "',
        '" . $font_a_duration . "',
        '" . $font_mukhyang . "',
        '" . $font_m_gian_num . "',
        '" . $font_m_duration . "'
        )";
        $query = $this->db->query($sql);
    }

    function g_add_compress(
        $user_idx, $compress_alzip, $compress_gian_num, $compress_duration
    )
    {
        $sql = "INSERT INTO g_security (
        user_idx, alzip, gian_num, duration
        ) 
        VALUES (
        '" . $user_idx . "',
        '" . $compress_alzip . "',
        '" . $compress_gian_num . "',
        '" . $compress_duration . "'
        )";
        $query = $this->db->query($sql);
    }

    ### 전산실 보관하기 ###

    function add_keep_pc($idx)
    {
        $sql = "INSERT INTO jeonsan_pc SELECT * FROM g_pc WHERE idx=$idx";

        $result = $this->db->query($sql);

        return $result;
    }

    function add_keep_moniter($idx)
    {
        $sql = "INSERT INTO jeonsan_moniter SELECT * FROM g_moniter WHERE idx=$idx";

        $result = $this->db->query($sql);

        return $result;
    }

    /*
     * 모니터 데이터 삭제
     */
    function delete_part_moniter($idx)
    {
        $sql = "DELETE FROM g_moniter WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_part_pc($idx)
    {
        $sql = "DELETE FROM g_pc WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_part_keyboard($idx)
    {
        $sql = "DELETE FROM g_keyboard WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_part_mouse($idx)
    {
        $sql = "DELETE FROM g_mouse WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_part_headset($idx)
    {
        $sql = "DELETE FROM g_headset WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_part_cell($idx)
    {
        $sql = "DELETE FROM g_cell WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_part_window($idx)
    {
        $sql = "DELETE FROM g_window WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_part_ms($idx)
    {
        $sql = "DELETE FROM g_ms WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_part_hangul($idx)
    {
        $sql = "DELETE FROM g_hangul WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_part_security($idx)
    {
        $sql = "DELETE FROM g_security WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_part_quark($idx)
    {
        $sql = "DELETE FROM g_quark WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_part_adobe($idx)
    {
        $sql = "DELETE FROM g_adobe WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_part_font($idx)
    {
        $sql = "DELETE FROM g_font WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_part_compress($idx)
    {
        $sql = "DELETE FROM g_compress WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }


}