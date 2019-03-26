<?php
    class mdiem extends CI_Model {
        function __construct() {
            parent::__construct();
        }    
        public function getDiem() {
            $query = "
            [dbo].[sp_MonHoc]
            @MaMH = N'',
            @TenMH = N'',
            @StatementType = N'Select'";
           return $this->db->query($query)->result_array();
        }
    }
?>