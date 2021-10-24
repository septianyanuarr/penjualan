<?php

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Auth');
    }
    function login()
    {
        checklog();
        $this->load->view('auth/login');
    }

    function ceklogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $login    = $this->Model_Auth->getlogin($username, $password);
        $ceklogin = $login->num_rows();
        $datalogin = $login->row_array();
        $data = array(
            'id_user' => $datalogin['id_user'],
            'nama_lengkap' => $datalogin['nama_lengkap'],
            'username' => $datalogin['username'],
            'password' => $datalogin['password'],
            'level' => $datalogin['level'],
            'kode_droppshiper' => $datalogin['kode_dropshipper']
        );
        $this->session->set_userdata($data);
        if ($ceklogin == 1) {
            redirect('Dashboard');
        } else {
            $this->session->set_flashdata(
                'msg',
                '
            <div class="alert alert-danger" role="alert">
            Username / Password Salah !
            </div>'
            );
            redirect("Auth/login");
        }
    }
    function logout()
    {
        session_destroy();
        redirect('auth/login');
    }
}
