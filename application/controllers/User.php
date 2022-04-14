<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    function __construct()
	{
		parent::__construct();

		$this->load->model('Login_model','login');

	}
    function index()
    {
        $this->load->view('tampilan/header');
        $this->load->view('tampilan/footer');
    }

    function beranda()
    {
        $this->load->view('tampilan/header');
        $this->load->view('beranda');
        $this->load->view('tampilan/footer');
    }

    
    function dsm()
    {
        $data['data_surat_masuk'] = $this->login->data_surat_masuk();

        $this->load->view('tampilan/header');
        $this->load->view('tampilan_user/dsm_user', $data);
        $this->load->view('tampilan/footer');
    }
    function dsk()
    {
        $data['data_surat_keluar'] = $this->login->data_surat_keluar();
        $this->load->view('tampilan/header');
        $this->load->view('tampilan_user/dsk_user', $data);
        $this->load->view('tampilan/footer');
    }
}