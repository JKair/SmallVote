<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of voteModel
 *
 * @author Admin
 */
class VoteModel extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function can_vote($voting_name){
        $this->db->where('uname', $voting_name);
        $this->db->select('*');
        $query_admin = $this->db->get('admin');
        $data_admin=$query_admin->result();
        if ($data_admin[0]->vote==1){
            return 0;
        }
        else{
            return 1;
        }
    }
    
    function update_vote_by_username($username,$voting_name) {
        $this->db->where('name', $username);
        $this->db->select('*');
        $query = $this->db->get('vote');
        $data = $query->result();
        $update_data = array(
               'name' => $data[0]->name,
               'num' => $data[0]->num,
               'voteNum' => $data[0]->voteNum+1
            );
        $this->db->where('name', $username);
        $this->db->update('vote', $update_data);
        
        $this->db->where('uname', $voting_name);
        $this->db->select('*');
        $query_admin = $this->db->get('admin');
        $data_admin=$query_admin->result();
        $update_data_admin=array(
            'unum' => $data_admin[0]->unum,
            'uname' => $data_admin[0]->uname,
            'userpwd' => $data_admin[0]->userpwd,
            'vote' => 1
        );
        $this->db->where('uname', $voting_name);
        $this->db->update('admin', $update_data_admin);
    }
    
    function get_all_vote(){
        $this->db->select('*');
        $query = $this->db->get('vote');
        return $query->result();    
    }
}
