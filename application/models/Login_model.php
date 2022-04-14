<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    function data_surat_masuk()
    {
        return $this->db->get('surat_masuk')->result();
    }
    function proses_tambah_surat()
    {
        $no = $this->input->post('no');
        $tanggal_terima = $this->input->post('tanggal_terima');
        $nomor_surat = $this->input->post('nomor_surat');
        $tanggal_surat = $this->input->post('tanggal_surat');
        $isi_ringkas = $this->input->post('isi_ringkas');
        $pengirim = $this->input->post('pengirim');
        $penerima = $this->input->post('penerima');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'no'=>$no,
            'tanggal_terima'=>$tanggal_terima,
            'nomor_surat'=>$nomor_surat,
            'tanggal_surat'=>$tanggal_surat,
            'isi_ringkas'=>$isi_ringkas,
            'pengirim'=>$pengirim,
            'penerima'=>$penerima,
            'keterangan'=>$keterangan
        );
        $this->db->insert('surat_masuk',$data);
    }
    
    function proses_hapus_surat($no)
    {
        $this->db->delete('surat_masuk',array('no'=>$no));
    }
    function edit_surat_masuk($id)
    {
        return $this->db->get_where('surat_masuk', array('no' => $id))->result();
    }
    function simpan_edit_surat_masuk()
    {
        $no = $this->input->post('no');
        $tanggal_terima = $this->input->post('tanggal_terima');
        $nomor_surat = $this->input->post('nomor_surat');
        $tanggal_surat = $this->input->post('tanggal_surat');
        $isi_ringkas = $this->input->post('isi_ringkas');
        $pengirim = $this->input->post('pengirim');
        $penerima = $this->input->post('penerima');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'no'=>$no,
            'tanggal_terima'=>$tanggal_terima,
            'nomor_surat'=>$nomor_surat,
            'tanggal_surat'=>$tanggal_surat,
            'isi_ringkas'=>$isi_ringkas,
            'pengirim'=>$pengirim,
            'penerima'=>$penerima,
            'keterangan'=>$keterangan
           
        );
        $this->db->where('no', $no);
        $this->db->update('surat_masuk', $data);
    }









    function data_surat_keluar()
    {
        return $this->db->get('surat_keluar')->result();
    }
    function proses_tambah_data_surat()
    {
       
        $tanggal = $this->input->post('tanggal');
        $nomor_surat = $this->input->post('nomor_surat');
        $ditujukan_kepada = $this->input->post('ditujukan_kepada');
        $perihal = $this->input->post('perihal');
        $keterangan = $this->input->post('keterangan');
        $gambar = $this->input->post('gambar');
        $data = array(
            
            'tanggal'=>$tanggal,
            'nomor_surat'=>$nomor_surat,
            'ditujukan_kepada'=>$ditujukan_kepada,
            'perihal'=>$perihal,
            'keterangan'=>$keterangan,
            'gambar'=>$gambar
        );
        $this->db->insert('surat_keluar',$data);
    }
    
    function proses_hapus_data_surat($no)
    {
        $this->db->delete('surat_keluar',array('no'=>$no));
    }
    function edit_surat_data_keluar($id)
    {
        return $this->db->get_where('surat_keluar', array('no' => $id))->result();
    }
    function simpan_edit_surat_keluar()
    {
        $no = $this->input->post('no');
        $tanggal = $this->input->post('tanggal');
        $nomor_surat = $this->input->post('nomor_surat');
        $ditujukan_kepada = $this->input->post('ditujukan_kepada');
        $perihal = $this->input->post('perihal');
        $keterangan = $this->input->post('keterangan');
        $gambar = $this->input->post('gambar');
        $data = array(
            'tanggal'=>$tanggal,
            'nomor_surat'=>$nomor_surat,
             'ditujukan_kepada'=>$ditujukan_kepada,
             'perihal'=>$perihal,
             'keterangan'=>$keterangan,
             'gambar'=>$gambar
           
        );
        $this->db->where('no', $no);
        $this->db->update('surat_keluar', $data);
    }
    
    function cekuser()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        return $this->db->get_where('user', array('username' => $username, 'password' => $password))->result();
    }
}
