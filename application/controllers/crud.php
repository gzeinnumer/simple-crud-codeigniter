<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message_zein');
    }
    
    public function do_list(){
        //cek model crud_m
    }
}
