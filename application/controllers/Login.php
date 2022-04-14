<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct()
	{
		parent::__construct();

		$this->load->model('Login_model','login');

	}
    function index()
    {
        $this->load->view('login');
    } 
    function proses_login()
    {
        $hasilcek = $this->login->cekuser(); 
		if($hasilcek){
			//data diri
			$sess_data['id'] = $hasilcek[0]->id;
			$sess_data['level'] = $hasilcek[0]->level;
			$sess_data['username'] = $hasilcek[0]->username;

			$this->session->set_userdata($sess_data);

			if($sess_data['level'] == 'admin'){
				redirect (base_url('admin'));
			}else{
				redirect (base_url('user'));
			}

		}else{
			redirect('/');
		}    
    }
    
    function logout()
    {
        $this->load->view('login');
    }
}

