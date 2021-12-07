<?php

class Dropshipper extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dropshipper');
    }
    function index()
    {
        $data['dropshipper'] = $this->Model_dropshipper->getDataDropshipper()->result();
        $this->template->load('template/template', 'dropshipper/view_dropshipper', $data);
    }
    function inputdropshipper()
    {
        $this->load->view('dropshipper/input_dropshipper');
    }
    function simpandropshipper()
    {
        $namadropshipper = $this->input->post('namadropshipper');
        $kodedropshipper = $this->input->post('kodedropshipper');
        $alamatdropshipper = $this->input->post('alamatdropshipper');
        $notelepon = $this->input->post('notelepon');

        $data = array(
            'nama_dropshipper' => $namadropshipper,
            'kode_dropshipper' => $kodedropshipper,
            'alamat_dropshipper'      => $alamatdropshipper,
            'telepon'      => $notelepon
        );
        $simpan = $this->Model_dropshipper->insertDropshipper($data);
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
            redirect("dropshipper");
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
            redirect("dropshipper");
        }
    }
    function editdropshipper()
    {
        $kodedropshipper = $this->uri->segment(3);
        $data['dropshipper'] = $this->Model_dropshipper->getDropshipper($kodedropshipper)->row_array();
        $this->load->view('dropshipper/edit_dropshipper', $data);
    }

    function updatedropshipper()
    {
        $namadropshipper = $this->input->post('namadropshipper');
        $kodedropshipper = $this->input->post('kodedropshipper');
        $alamatdropshipper = $this->input->post('alamatdropshipper');
        $notelepon = $this->input->post('notelepon');

        $data = array(
            'nama_dropshipper' => $namadropshipper,
            'kode_dropshipper' => $kodedropshipper,
            'alamat_dropshipper'      => $alamatdropshipper,
            'telepon'      => $notelepon
        );
        $simpan = $this->Model_dropshipper->updateDropshipper($data, $kodedropshipper);
        if ($simpan == 1) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
            <div class="d-flex">
              <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 12l5 5l10 -10" /><path d="M2 12l5 5m5 -5l5 -5" /></svg>
              </div>
              <div>
                Data Berhasil Diupdate
              </div>
            </div>
          </div>');
            redirect("dropshipper");
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
            redirect("dropshipper");
        }
    }
    function hapusdropshipper()
    {
        $kodedropshipper = $this->uri->segment(3);
        $hapus = $this->Model_dropshipper->deletedropshipper($kodedropshipper);
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
            redirect("dropshipper");
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
            redirect("dropshipper");
        }
    }
}
