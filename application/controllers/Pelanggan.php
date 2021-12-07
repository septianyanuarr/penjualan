<?php

class Pelanggan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_pelanggan');
        $this->load->model('Model_dropshipper');
    }
    function index()
    {
        $data['pelanggan'] = $this->Model_pelanggan->getDataPelanggan()->result();
        $this->template->load('template/template', 'pelanggan/view_pelanggan', $data);
    }
    function inputpelanggan()
    {
        $data['dropshipper'] = $this->Model_dropshipper->getDatadropshipper()->result();
        $this->load->view('pelanggan/input_pelanggan', $data);
    }
    function simpanPelanggan()
    {
        $kodepelanggan = $this->input->post('kodepelanggan');
        $namapelanggan = $this->input->post('namapelanggan');
        $alamatpelanggan = $this->input->post('alamatpelanggan');
        $nohp = $this->input->post('nohp');
        $dropshipper = $this->input->post('dropshipper');

        $data = array(
            'kode_pelanggan' => $kodepelanggan,
            'nama_pelanggan' => $namapelanggan,
            'alamat_pelanggan'      => $alamatpelanggan,
            'no_hp'      => $nohp,
            'kode_dropshipper'      => $dropshipper
        );
        $simpan = $this->Model_pelanggan->insertPelanggan($data);
        if ($simpan == 1) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
            <div class="d-flex">
              <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg>
              </div>
              <div>
                Data Berhasil Disimpan
              </div>
            </div>
          </div>');
            redirect("pelanggan");
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
            <div class="d-flex">
              <div>  
              <i class=""far fa-close></i>
              </div>
              <div>
                Data Gagal Disimpan
              </div>
            </div>
          </div>');
            redirect("pelanggan");
        }
    }
    function editpelanggan()
    {
        $kodepelanggan = $this->uri->segment(3);
        $data['dropshipper'] = $this->Model_dropshipper->getDatadropshipper()->result();
        $data['pelanggan'] = $this->Model_pelanggan->getPelanggan($kodepelanggan)->row_array();
        $this->load->view('pelanggan/edit_pelanggan', $data);
    }

    function updatepelanggan()
    {
        $kodepelanggan = $this->input->post('kodepelanggan');
        $namapelanggan = $this->input->post('namapelanggan');
        $alamatpelanggan = $this->input->post('alamatpelanggan');
        $nohp = $this->input->post('nohp');
        $dropshipper = $this->input->post('dropshipper');

        $data = array(
            'kode_pelanggan' => $kodepelanggan,
            'nama_pelanggan' => $namapelanggan,
            'alamat_pelanggan'      => $alamatpelanggan,
            'no_hp'      => $nohp,
            'kode_dropshipper'      => $dropshipper
        );
        $simpan = $this->Model_pelanggan->updatepelanggan($data, $kodepelanggan);
        if ($simpan == 1) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
            <div class="d-flex">
              <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg>
              </div>
              <div>
                Data Berhasil Update
              </div>
            </div>
          </div>');
            redirect("pelanggan");
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
            <div class="d-flex">
              <div>  
              <i class=""far fa-close></i>
              </div>
              <div>
                Data Gagal Diupdate
              </div>
            </div>
          </div>');
            redirect("pelanggan");
        }
    }
    function hapuspelanggan()
    {
        $kodepelanggan = $this->uri->segment(3);
        $hapus = $this->Model_pelanggan->deletepelanggan($kodepelanggan);
        if ($hapus == 1) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
            <div class="d-flex">
              <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg>
              </div>
              <div>
                Data Berhasil dihapus
              </div>
            </div>
          </div>');
            redirect("pelanggan");
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
            <div class="d-flex">
              <div>  
              <i class=""far fa-close></i>
              </div>
              <div>
                Data Gagal Dihapus
              </div>
            </div>
          </div>');
            redirect("pelanggan");
        }
    }
}
