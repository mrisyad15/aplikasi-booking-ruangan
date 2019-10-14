<?php
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class M_unit extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
    }

    function get(){
        $query = $this->db->query('SELECT * FROM tb_unit');
        return $query->result();
    }
    function get_user(){
        $query = $this->db->query('SELECT * FROM tb_user');
        return $query->result();
    }
    function get_ruang(){
        $query = $this->db->query('SELECT * FROM tb_ruang_rapat');
        return $query->result();
    }
}
?>