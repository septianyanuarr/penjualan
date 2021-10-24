<?php

class Barang extends CI_Controller
{

    function index()
    {
        $this->template->load('template/template', 'barang/view_barang');
    }
}
