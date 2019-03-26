<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('mdiem');
        $this->load->model('mmon');
        $user = $this->session->userdata('login');
        if (empty($user) || !is_array($user)) {
            header('Location:'.base_url().'logout');
        } 
    }
    public function index() {
        $this->load->view('index');
    }
    public function quanlykhoa(){
        $this->load->view('quanlykhoa');
    }
    public function quanlysinhvien(){
        $this->load->view('quanlysinhvien');
    }
    public function quanlydiem(){
        $this->load->view('quanlydiem');
    }
    public function quanlymon(){
        $data=array();
        $data['monhoc']=$this->mmon->getMon();
        $this->load->view('quanlymon',$data);
    }
    public function quanlylop(){
        $this->load->view('quanlylop');
    }
}