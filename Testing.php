<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	    $this->load->model('M_testing');
  	}

	public function index()
	{
        $nama_tabel='app_data';
        $custom_query="SELECT column_name FROM information_schema.columns WHERE  table_name = '$nama_tabel'";
        $data['tablehead']=$this->M_testing->custom_query($custom_query);
        $data['data']=$this->M_testing->data($nama_tabel);
        $this->load->view('v_testing',$data);
	}
}