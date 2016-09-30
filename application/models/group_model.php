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
			WHERE user_idx =? ;
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
            $params['user_idx']
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
			WHERE user_idx =? ;
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
            $params['user_idx']
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
			WHERE user_idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_name'],
            $params['identify'],
            $params['produce_ym'],
            $params['gian_num'],
            $params['buy_day'],
            $params['user_idx']
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
			WHERE user_idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_name'],
            $params['identify'],
            $params['produce_ym'],
            $params['gian_num'],
            $params['buy_day'],
            $params['user_idx']
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
			WHERE user_idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_name'],
            $params['identify'],
            $params['produce_ym'],
            $params['gian_num'],
            $params['buy_day'],
            $params['user_idx']
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
			SET product_name =?, identify =?, produce_ym =?, gian_num =?, buy_day =?			 
			WHERE user_idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_name'],
            $params['identify'],
            $params['produce_ym'],
            $params['gian_num'],
            $params['buy_day'],
            $params['user_idx']
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
			WHERE user_idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_number'],
            $params['gian_num'],
            $params['duration'],
            $params['user_idx']
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
			WHERE user_idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_number'],
            $params['gian_num'],
            $params['duration'],
            $params['user_idx']
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
			WHERE user_idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_number'],
            $params['gian_num'],
            $params['duration'],
            $params['user_idx']
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
			WHERE user_idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_number'],
            $params['gian_num'],
            $params['duration'],
            $params['user_idx']
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
			WHERE user_idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_number'],
            $params['font'],
            $params['gian_num'],
            $params['duration'],
            $params['user_idx']
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
			WHERE user_idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['adobe_product'],
            $params['gian_num'],
            $params['duration'],
            $params['remarks'],
            $params['user_idx']
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
			WHERE user_idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['asia'],
            $params['a_gian_num'],
            $params['a_duration'],
            $params['mukhyang'],
            $params['m_gian_num'],
            $params['m_duration'],
            $params['user_idx']
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
			WHERE user_idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['alzip'],
            $params['gian_num'],
            $params['duration'],
            $params['user_idx']
        ));

        return $result_query;

    }

}