<?php
    class mpermission extends CI_Model {
        function __construct() {
            parent::__construct();
        }    
        public function getPermissionforUser($username) {
            $query = "Use QLDSV
             SELECT DP1.name AS DatabaseRoleName,   
               isnull (DP2.name, 'No members') AS DatabaseUserName   
             FROM sys.database_role_members AS DRM  
             RIGHT OUTER JOIN sys.database_principals AS DP1  
               ON DRM.role_principal_id = DP1.principal_id  
             LEFT OUTER JOIN sys.database_principals AS DP2  
               ON DRM.member_principal_id = DP2.principal_id  
            WHERE DP1.type ='R'and DP2.name='".$username."'
            ORDER BY DP1.name";
           return $this->db->query($query)->row_array();
        }
        public function checkCreateUser (){
          $arr=array();
          $st='';
         exec('sqlcmd -S DESKTOP\SERVERA -U sa -P minhnguyen456789 -i C:\Users\minhn\OneDrive\Desktop\MyScript.sql',$arr,$st);
         return print_r($arr);
        }
    }
?>