<?php
    class msinhvien extends CI_Model {
        function __construct() {
            parent::__construct();
        }    
        public function getmSV() {
            $query = '
            [dbo].[GetSinhVien]';
           return $this->db->query($query)->result_array();
        }
    }
?>