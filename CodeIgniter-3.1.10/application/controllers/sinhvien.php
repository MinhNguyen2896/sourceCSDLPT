<?php
class sinhvien extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('msinhvien');
        $this->load->library('connect_database');
    }
    function getSV(){
        $server=$this->config->item('serverA');
        $dns='Driver={SQL Server Native Client 11.0};Server='.$server.';Database=QLDSV;';
        $user_name = 'minh';
        $password = '123456';
        if(odbc_connect($dns,$user_name,$password ))
        {
            $server_connect = $this ->connect_database->connect($server,$user_name,$password);
            $this->db=$this->load->database( $server_connect[$server] ,TRUE);
            $result=$this->msinhvien->getmSV();
            print_r($result); die;
        }else{
            echo 'error';die;
        }
       
    }
}  
?>