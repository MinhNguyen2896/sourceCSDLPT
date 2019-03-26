<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0); 
class user extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('mpermission');
        $this->load->library('connect_database');
        $login = $this->session->userdata('login');
        if(!empty($login) && $this->uri->segment(1) != 'logout'){
            header('Location:'.base_url().'home');
        }
    }
    function login() {
        $data=array();
        $data['class']='';
        $data['error']='';
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $post = $this->input->post();
            $username = $post['username'];
            $password = $post['password'];
            $khoa = $post['khoa'];
            $server=$this->config->item($khoa);
            $dns='Driver={SQL Server Native Client 11.0};Server='.$server.';Database=QLDSV;';
            $server_connect = $this ->connect_database->connect($server,'sa','minhnguyen456789');
            $this->db=$this->load->database( $server_connect[$server] ,TRUE);
            $check_permission = $this->mpermission->getPermissionforUser($username)['DatabaseRoleName'];
            if(!empty($check_permission)) {
                if(odbc_connect($dns,$username,$password))
                {
                    $server_connect = $this ->connect_database->connect($server,$username,$password);
                    $this->db=$this->load->database( $server_connect[$server] ,TRUE);
                    $user_data = array(
                        'user' => $username,
                        'khoa' => $khoa,
                        'permission' =>$check_permission,
                    );
                    $this->session->set_userdata('login', $user_data);
                    header('Location: '.base_url().'home');
                }else{
                    $data['error'] = 'Login Failed. Please check your account.';
                    $data['class'] = 'alert-validate';
                }
            } else {
                $data['error'] = 'You not permission ,check PGV to permissed!!!';
                $data['class'] = 'alert-validate';
            }
        }
        $this->load->view('dangnhap',$data);
    }
    function logout(){
        $this->session->unset_userdata('login');
        $data['error'] ='';
        $data['class']='';
        $this->load->view('dangnhap',$data);
    }
}  
?>