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

    function get_progress_list()
    {

        $sql = "SELECT * FROM soft_progress";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_progress_window_list()
    {

        $sql = "SELECT * FROM soft_progress WHERE product_name LIKE  \"%window%\"";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_progress_ms_list()
    {

        $sql = "SELECT * FROM soft_progress WHERE product_name LIKE  \"%MS-Office%\"";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_progress_hangul_list()
    {

        $sql = "SELECT * FROM soft_progress WHERE product_name LIKE  \"%한글%\"";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_progress_etc_list()
    {

        $sql = "SELECT * FROM soft_progress WHERE NOT product_name LIKE \"Window%\" AND NOT product_name LIKE \"MS%\" AND NOT product_name LIKE \"한글%\"";

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
     * 전산실
     */

    function get_keep_pc()
    {
        $sql = "SELECT * FROM jeonsan_pc";
        
        $query = $this->db->query($sql);
        
        $result = $query->result();
        
        return $result;
    }

    function get_keep_moniter()
    {
        $sql = "SELECT * FROM jeonsan_moniter";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_keep_keyboard()
    {
        $sql = "SELECT * FROM jeonsan_keyboard";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_keep_mouse()
    {
        $sql = "SELECT * FROM jeonsan_mouse";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_keep_headset()
    {
        $sql = "SELECT * FROM jeonsan_headset";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_keep_cell()
    {
        $sql = "SELECT * FROM jeonsan_cell";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    /*
     * 대시보드에서 보여주는 소프트웨어 상세보기
     * 각소프트웨어를 전체목록 보여주고 어떤사용자가 쓰고있는지 매칭해준다.
     */

    function get_use_moniter_list()
    {
        $sql = "SELECT * FROM g_moniter LEFT JOIN g_gs ON g_moniter.user_idx=g_gs.idx";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }
    
    function get_use_pc_list()
    {
        $sql = "SELECT * FROM g_pc LEFT JOIN g_gs ON g_pc.user_idx=g_gs.idx";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_use_keyboard_list()
    {
        $sql = "SELECT * FROM g_keyboard LEFT JOIN g_gs ON g_keyboard.user_idx=g_gs.idx";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_use_mouse_list()
    {
        $sql = "SELECT * FROM g_mouse LEFT JOIN g_gs ON g_mouse.user_idx=g_gs.idx";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_use_headset_list()
    {
        $sql = "SELECT * FROM g_headset LEFT JOIN g_gs ON g_headset.user_idx=g_gs.idx";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_use_cell_list()
    {
        $sql = "SELECT * FROM g_cell LEFT JOIN g_gs ON g_cell.user_idx=g_gs.idx";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_use_window_list()
    {
        $sql = "SELECT * FROM g_window LEFT JOIN g_gs ON g_window.user_idx=g_gs.idx";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_use_ms_list()
    {
        $sql = "SELECT * FROM g_ms LEFT JOIN g_gs ON g_ms.user_idx=g_gs.idx";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    function get_use_hangul_list()
    {
        $sql = "SELECT * FROM g_hangul LEFT JOIN g_gs ON g_hangul.user_idx=g_gs.idx";

        $query = $this->db->query($sql);

        $result = $query->result();

        return $result;
    }

    /*
     * soft_progress 등록
     */

    function insert_soft_progress($product_name, $version, $company, $purpose, $target, $compatibility, $sirial_num, $package, $license_numb, $keep_place, $use_num, $remarks)
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

    function get_view_progress($idx) {

        $sql = "SELECT * FROM soft_progress WHERE idx='" . $idx . "'";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;

    }

    /*
     * soft_progress 데이터 수정
     */
    function modify_soft_progress($params)
    {

        $sql = "
			UPDATE  soft_progress  
			SET product_name =?, version =?, company =?, purpose =?, target =?,
			 compatibility =?, sirial_num =?, package =?, license_numb =?,
			  keep_place =?, use_num =?, remarks =?
			WHERE idx =? ;
        ";
        
        $result_query = $this->db->query($sql, array(
           $params['product_name'],
            $params['version'],
            $params['company'],
            $params['purpose'],
            $params['target'],
            $params['compatibility'],
            $params['sirial_num'],
            $params['package'],
            $params['license_numb'],
            $params['keep_place'],
            $params['use_num'],
            $params['remarks'],
            $params['idx']
        ));
        
        return $result_query;

    }

    /*
     * soft_keep 등록
     */
    function insert_soft_keep($product_name, $version, $company, $purpose, $target, $compatibility, $sirial_num, $package, $license_numb, $keep_place, $remarks)
    {
        $sql = "INSERT INTO soft_keep (
        product_name, version, company, purpose, target, compatibility, sirial_num, package, license_numb, keep_place, remarks
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
        , '" . $remarks . "'
        )";
        $query = $this->db->query($sql);
    }

    function get_view_keep($idx) {

        $sql = "SELECT * FROM soft_keep WHERE idx='" . $idx . "'";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;

    }

    /*
     * soft_keep 데이터 수정
     */
    function modify_soft_keep($params)
    {

        $sql = "
			UPDATE  soft_keep  
			SET product_name =?, version =?, company =?, purpose =?, target =?,
			 compatibility =?, sirial_num =?, package =?, license_numb =?,
			  keep_place =?, remarks =?
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_name'],
            $params['version'],
            $params['company'],
            $params['purpose'],
            $params['target'],
            $params['compatibility'],
            $params['sirial_num'],
            $params['package'],
            $params['license_numb'],
            $params['keep_place'],
            $params['remarks'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * soft_stop 등록
     */
    function insert_soft_stop($product_name, $version, $company, $purpose, $target, $compatibility, $sirial_num, $package, $license_numb, $keep_place, $remarks)
    {
        $sql = "INSERT INTO soft_stop (
        product_name, version, company, purpose, target, compatibility, sirial_num, package, license_numb, keep_place, remarks
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
        , '" . $remarks . "'
        )";
        $query = $this->db->query($sql);
    }

    function get_view_stop($idx) {

        $sql = "SELECT * FROM soft_stop WHERE idx='" . $idx . "'";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;

    }

    /*
     * soft_keep 데이터 수정
     */
    function modify_soft_stop($params)
    {

        $sql = "
			UPDATE  soft_stop  
			SET product_name =?, version =?, company =?, purpose =?, target =?,
			 compatibility =?, sirial_num =?, package =?, license_numb =?,
			  keep_place =?, remarks =?
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_name'],
            $params['version'],
            $params['company'],
            $params['purpose'],
            $params['target'],
            $params['compatibility'],
            $params['sirial_num'],
            $params['package'],
            $params['license_numb'],
            $params['keep_place'],
            $params['remarks'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * kaspersky 등록
     */
    function insert_kaspersky($product_name, $version, $company, $purpose,  $compatibility, $duration, $sirial_num, $package, $license_numb, $keep_place, $remarks)
    {
        $sql = "INSERT INTO kaspersky (
        product_name, version, company, purpose, compatibility, duration, sirial_num, package, license_numb, keep_place, remarks
        ) 
        VALUES (
        '" . $product_name . "'
        , '" . $version . "'
        , '" . $company . "'
        , '" . $purpose . "'
        , '" . $compatibility . "'
        , '" . $duration . "'
        , '" . $sirial_num . "'
        , '" . $package . "'
        , '" . $license_numb . "'
        , '" . $keep_place . "'
        , '" . $remarks . "'
        )";
        $query = $this->db->query($sql);
    }

    function get_view_kaspersky($idx) {

        $sql = "SELECT * FROM kaspersky WHERE idx='" . $idx . "'";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;

    }

    /*
     * kaspersky 데이터 수정
     */
    function modify_kaspersky($params)
    {

        $sql = "
			UPDATE  kaspersky  
			SET product_name =?, version =?, company =?, purpose =?, compatibility =?, 
			 duration =?, sirial_num =?, package =?, license_numb =?,
			  keep_place =?, remarks =?
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_name'],
            $params['version'],
            $params['company'],
            $params['purpose'],
            $params['compatibility'],
            $params['duration'],
            $params['sirial_num'],
            $params['package'],
            $params['license_numb'],
            $params['keep_place'],
            $params['remarks'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * printer 등록
     */
    function insert_printer($product_name, $use_place, $term, $cost,  $color_a4, $color_a3, $black_a4, $black_a3)
    {
        $sql = "INSERT INTO printer (
        product_name, use_palce, term, cost, color_a4, color_a3, black_a4, black_a3
        ) 
        VALUES (
        '" . $product_name . "'
        , '" . $use_place . "'
        , '" . $term . "'
        , '" . $cost . "'
        , '" . $color_a4 . "'
        , '" . $color_a3 . "'
        , '" . $black_a4 . "'
        , '" . $black_a3 . "'
        )";
        $query = $this->db->query($sql);
    }

    function get_view_printer($idx) {

        $sql = "SELECT * FROM printer WHERE idx='" . $idx . "'";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;

    }

    /*
     * printer 데이터 수정
     */
    function modify_printer($params)
    {

        $sql = "
			UPDATE  printer  
			SET product_name =?, use_place =?, term =?, cost =?, 
			color_a4 =?, color_a3 =?, black_a4 =?, black_a3 =?
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['product_name'],
            $params['use_place'],
            $params['term'],
            $params['cost'],
            $params['color_a4'],
            $params['color_a3'],
            $params['black_a4'],
            $params['black_a3'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * xp_down 등록
     */
    function insert_xp_down($window7)
    {
        $sql = "INSERT INTO xp_down (
        window7
        ) 
        VALUES (
        '" . $window7 . "'
        )";
        $query = $this->db->query($sql);
    }

    function get_view_xp_down($idx) {

        $sql = "SELECT * FROM xp_down WHERE idx='" . $idx . "'";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;

    }

    /*
     * xp_down 데이터 수정
     */
    function modify_xp_down($params)
    {

        $sql = "
			UPDATE  xp_down  
			SET window7 =?
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['window7'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * ms_up 등록
     */
    function insert_ms_up($office2003_pro,$office2007_pro)
    {
        $sql = "INSERT INTO ms_up (
        office2003_pro, office2007_pro
        ) 
        VALUES (
        '" . $office2003_pro . "',
        '" . $office2007_pro . "'
        )";
        $query = $this->db->query($sql);
    }

    function get_view_ms_up($idx) {

        $sql = "SELECT * FROM ms_up WHERE idx='" . $idx . "'";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;

    }

    /*
     * ms_up 데이터 수정
     */
    function modify_ms_up($params)
    {

        $sql = "
			UPDATE  ms_up  
			SET office2003_pro =?, office2007_pro =?
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['office2003_pro'],
            $params['office2007_pro'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * quark_up 등록
     */
    function insert_quark_up($quark3,$quark4,$quark8,$quark9,$quark2015,$quark2015_serial,$sejong_font,$user)
    {
        $sql = "INSERT INTO quark_up (
        quark3, quark4, quark8, quark9, quark2015, quark2015_serial, sejong_font,user
        ) 
        VALUES (
        '" . $quark3 . "',
        '" . $quark4 . "',
        '" . $quark8 . "',
        '" . $quark9 . "',
        '" . $quark2015 . "',
        '" . $quark2015_serial . "',
        '" . $sejong_font . "',
        '" . $user . "'
        )";
        $query = $this->db->query($sql);
    }

    function get_view_quark_up($idx) {

        $sql = "SELECT * FROM quark_up WHERE idx='" . $idx . "'";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;

    }

    /*
     * quark_up 데이터 수정
     */
    function modify_quark_up($params)
    {

        $sql = "
			UPDATE  quark_up  
			SET quark3 =?, quark4 =?, quark8 =?, quark9 =?, quark2015 =?, quark2015_serial =?, sejong_font =?, user =?
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['quark3'],
            $params['quark4'],
            $params['quark8'],
            $params['quark9'],
            $params['quark2015'],
            $params['quark2015_serial'],
            $params['sejong_font'],
            $params['user'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * asiafont_up 등록
     */
    function insert_asiafont_up($asiafont2008,$integrated_Package)
    {
        $sql = "INSERT INTO asiafont_up (
        asiafont2008, integrated_Package
        ) 
        VALUES (
        '" . $asiafont2008 . "',
        '" . $integrated_Package . "'
        )";
        $query = $this->db->query($sql);
    }

    function get_view_asiafont_up($idx) {

        $sql = "SELECT * FROM asiafont_up WHERE idx='" . $idx . "'";

        $query = $this->db->query($sql);

        $result = $query->row();

        return $result;

    }

    /*
     * asiafont_up 데이터 수정
     */
    function modify_asiafont_up($params)
    {

        $sql = "
			UPDATE  asiafont_up
			SET asiafont2008 =?, integrated_Package =?
			WHERE idx =? ;
        ";

        $result_query = $this->db->query($sql, array(
            $params['asiafont2008'],
            $params['integrated_Package'],
            $params['idx']
        ));

        return $result_query;

    }

    /*
     * 소프트웨어 데이터 삭제
     */
    function delete_soft_progress($idx)
    {
        $sql = "DELETE FROM soft_progress WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }
    function delete_soft_keep($idx)
    {
        $sql = "DELETE FROM soft_keep WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_soft_stop($idx)
    {
        $sql = "DELETE FROM soft_stop WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_kaspersky($idx)
    {
        $sql = "DELETE FROM kaspersky WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_printer($idx)
    {
        $sql = "DELETE FROM printer WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_xp_down($idx)
    {
        $sql = "DELETE FROM xp_down WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_ms_up($idx)
    {
        $sql = "DELETE FROM ms_up WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_quark_up($idx)
    {
        $sql = "DELETE FROM quark_up WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }

    function delete_asiafont_up($idx)
    {
        $sql = "DELETE FROM asiafont_up WHERE idx = '" . $idx . "'";

        $result = $this->db->query($sql);

        return $result;
    }
}