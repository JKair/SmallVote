<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginModel
 *
 * @author Admin
 */
class LoginModel extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function admin_insert($arr) {
        $this->db->insert('admin', $arr);
    }

    function admin_update($id, $arr) {
        $this->db->where('uid', $id);
        $this->db->update('admin', $arr);
    }

    function admin_del($id) {
        $this->db->where('uid', $id);
        $query = $this->db->delete('admin');
        return $query;
    }
    
    function select_all() {
        $this->db->select('*');
        $query = $this->db->get('admin');
        return $query->result();
    }

    function select_part($start, $end) {
        $this->db->select('*');
        $this->db->limit($end, $start);
        $query = $this->db->get('admin');
        return $query->result();
    }

    function get_admin_info_by_username($username) {
        $this->db->where('unum', $username);
        $this->db->select('*');
        $query = $this->db->get('admin');
        return $query->result();
    }

}
