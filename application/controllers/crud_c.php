<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_c extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('crud_m');
    }

	public function index()
	{
        $this->load->view('welcome_message_zein');
    }
    
    public function list(){
        //cek model crud_m, buat dulu model
        $query = $this->crud_m->read();
        $data = array(
            'title' => 'Data Users',
            'data' => $query
        );
        $this->load->view('crud_view', $data, FALSE);
    }

    public function add(){
        //validasi input
        $valid = $this->form_validation;
         
        $valid->set_rules('username_i','Username','required',
        array('required' => '%s harus diisi'));
 
        $valid->set_rules('name_i','Name','required',
        array('required' => '%s harus diisi'));
 
        $valid->set_rules('pass_i','Pass','required',
        array('required' => '%s harus diisi'));
 
        if($valid->run()===FALSE){
            $data = array('title' => 'Tambah User'
                    );
            $this->load->view('crud_form_add', $data, FALSE);
        }else{
            $i = $this->input;
            $data = array(  'username'     => $i->POST('username_i'),
                            'name'          => $i->POST('name_i'),
                            'pass'     => $i->POST('pass_i')
            );
            $this->crud_m->add($data);
            redirect(base_url('crud_c/list/'),'refresh');
        }
    }
    public function delete($id){
        $data = array('id' => $id);
        $this->crud_m->delete($data);
        redirect(base_url('crud_c/list'),'refresh');
    }

    public function edit($id)
	{
        $query = $this->crud_m->read_data_by_id($id);
        //validasi input
        $valid = $this->form_validation;

        $valid->set_rules('username_i','Username','required',
       array('required' => '%s harus diisi'));

       $valid->set_rules('name_i','Name','required',
       array('required' => '%s harus diisi'));

       $valid->set_rules('pass_i','Pass','required',
       array('required' => '%s harus diisi'));

        if($valid->run()===FALSE){
        
            $data = array('title' => 'Edit User',
                        'data' => $query
                    );

            $this->load->view('crud_form_edit', $data, FALSE);
        }else{
            $i = $this->input;
            $data = array(  'id' => $id,
                            'username'           => $i->POST('username_i'),
                            'name'      => $i->POST('name_i'),
                            'pass' => $i->POST('pass_i')
            );
            $this->crud_m->edit($data);
            
            redirect(base_url('crud_c/list'),'refresh');
        }
        
    }
}
