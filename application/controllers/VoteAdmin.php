<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VoteAdmin
 *
 * @author Admin
 */
class VoteAdmin extends CI_Controller {
    
    function put_result(){
        $this->load->model('VoteModel');
        $username = $this->input->post('vote_option', TRUE);
        $voting_name = $this->input->post('voting_name', TRUE);
        if ($this->VoteModel->can_vote($voting_name)==1){
            $this->VoteModel->update_vote_by_username($username,$voting_name);
            echo iconv("UTF-8","GBK","<script>alert('投票成功');</script>");
        }
        else{
            echo iconv("UTF-8","GBK","<script>alert('同学，你不是投票过了吗！');</script>");
        }
        
        $this->load->helper('url');
        redirect(base_url('Admin/login'), 'refresh');
    }
}
