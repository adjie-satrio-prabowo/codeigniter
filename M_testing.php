<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_testing extends CI_Model
{
  
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function data($nama_tabel)
    {
        return $this->db->get($nama_tabel);
    }
 
    function custom_query($custom_query)
    {
        return $this->db->query($custom_query);
    }
}