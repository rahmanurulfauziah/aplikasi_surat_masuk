<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct()
	{
		parent::__construct();

		$this->load->model('Login_model','login');

	}
    function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/footer');
    }

    function beranda()
    {
        $this->load->view('template/header');
        $this->load->view('beranda');
        $this->load->view('template/footer');
    }

    
    function dsm()
    {
        $data['data_surat_masuk'] = $this->login->data_surat_masuk();

        $this->load->view('template/header');
        $this->load->view('data_surat_masuk', $data);
        $this->load->view('template/footer');
    }
    function tambah_surat_masuk()
    {
        $this->load->view('template/header');
        $this->load->view('tambah_surat_masuk');
        $this->load->view('template/footer');    
    }
    function proses_tambah_surat()
    {
        $this->login->proses_tambah_surat();
        redirect('Admin/dsm');
    }
    function hapus_surat($nik)
    {
        $this->login->proses_hapus_surat($nik);
        redirect('Admin/dsm');
    }
    function edit_surat($id)
    {
        $data['edit_surat_masuk'] = $this->login->edit_surat_masuk($id);
        $this->load->view('template/header');
        $this->load->view('edit_surat_masuk', $data);
        $this->load->view('template/footer');    
    }
    function proses_edit_surat_masuk()
    {
        $this->login->simpan_edit_surat_masuk();
        redirect('Admin/dsm');
    }
    function dsk()
    {
        $data['data_surat_keluar'] = $this->login->data_surat_keluar();
        $this->load->view('template/header');
        $this->load->view('data_surat_keluar', $data);
        $this->load->view('template/footer');
    }
    function tambah_surat_keluar()
    {
        $this->load->view('template/header');
        $this->load->view('tambah_surat_keluar');
        $this->load->view('template/footer');    
    }
    function proses_tambah_data_surat()
    {
        $config['upload_path']          = './gambar/';
                $config['allowed_types']        = 'gif|jpg|png|PNG';
                $config['max_size']             = 10000;
                $config['max_width']            = 1000;
                $config['max_height']           = 10000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                    echo"gagal tambah";
                }
                else
                {
                        $gambar = $this->upload->data();
                        $gambar = $gambar ['file_name'];
                        $tanggal = $this->input->post('nama', TRUE);
                        $nomor_surat = $this->input->post('nomor_surat', TRUE);
                        $ditujukan_kepada = $this->input->post('ditujukan_kepada', TRUE);
                        $perihal = $this->input->post('perihal', TRUE);
                        $keterangan = $this->input->post('keterangan', TRUE);

                        $data = array(
                            'tanggal' => $tanggal,
                            'nomor_surat' => $nomor_surat,
                            'ditujukan_kepada' => $ditujukan_kepada,
                            'tanggal' => $tanggal,
                            'keterangan' => $keterangan,
                            'gambar' => $gambar,
                        );
                        $this->db->insert('surat_keluar' , $data);
                        $this->session->set_flashdata('pesan' , '<div class="alert
                        alert-success" role="alert">
                        Data berhasil Ditambah!
                        </div>');
                        redirect('admin');


                }
    }
    function hapus_data_surat($nik)
    {
        $this->login->proses_hapus_data_surat($nik);
        redirect('Admin/dsk');
    }
    function edit_surat_data_keluar($id)
    {
        $data['edit_surat_keluar'] = $this->login->edit_surat_data_keluar($id);
        $this->load->view('template/header');
        $this->load->view('edit_surat_keluar', $data);
        $this->load->view('template/footer');    
    }
    function proses_edit_surat_keluar()
    {
        $this->login->simpan_edit_surat_keluar();
        redirect('Admin/dsk');
    }
}