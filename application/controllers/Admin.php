<?php


class Admin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Session');
        $this->load->helper('url');
        
        
    }
    
    function index(){
        $this->load->view('Admin/index');
    }
    /**
     * 登录页面
     */
    public function login()
    {
        $this->load->model('LoginModel');
        
        //接收用户输入，post格式
        $username = $this->input->post('username', TRUE);   
        $password = $this->input->post('password', TRUE);
        //判断账密
        if ($username && $password)
        {
            $userinfo = $this->LoginModel->get_admin_info_by_username($username);
            if ($userinfo && $userinfo[0]->userpwd == md5(md5(md5($password))))
            {
                $this->load->model('VoteModel');
                $voteinfo = $this->VoteModel->get_all_vote();
                $voteinfo_arr = array();
                foreach ($voteinfo as $row)
                {
                    array_push($voteinfo_arr,$row->name);
                }
                $data=array('name'=>$userinfo[0]->uname,'num'=>$userinfo[0]->unum,'vote'=>$userinfo[0]->vote,'vote_name'=>$voteinfo_arr);
                $this->load->view('Admin/index.php',$data);
                return;
            }
            else
            {
                echo iconv("UTF-8","GBK","<script>alert('用户名或密码错误，请返回检查。');history.go(-1);</script>");
                exit();
            }
        }
        $this->load->view('Admin/login');
    }

}
