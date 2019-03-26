<?php
    class mmon extends CI_Model {
        function __construct() {
            parent::__construct();
        }    
        public function getMon() {
            $query = "
            [dbo].[sp_MonHoc]
            @MaMH = N'',
            @TenMH = N'',
            @StatementType = N'Select'";
           return $this->db->query($query)->result_array();
        }
    }
?>