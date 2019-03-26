<?php
defined('BASEPATH') OR exit('No direct script access allowed');
      class connect_database  {
        public function connect($server , $username ,$password) {
            $db[$server] = array(
                'dsn'	=> 'Driver={SQL Server Native Client 11.0};Server='.$server.';Database=QLDSV;',
                'hostname' => 'localhost',
                'username' => $username,
                'password' => $password,
                'database' => '',
                'dbdriver' => 'odbc',
                'dbprefix' => '',
                'pconnect' => FALSE,
                'db_debug' => TRUE,//(ENVIRONMENT !== 'production'),
                'cache_on' => FALSE,
                'cachedir' => '',
                'char_set' => 'utf8',
                'dbcollat' => 'utf8_general_ci',
                'swap_pre' => '',
                'encrypt' => FALSE,
                'compress' => FALSE,
                'stricton' => FALSE,
                'failover' => array(),
                'save_queries' => TRUE
            );
             return $db;
        }
    }
?>