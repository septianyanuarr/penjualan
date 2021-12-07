<?php


class Model_pelanggan extends CI_Model
{

    function getDataPelanggan()
    {
        $this->db->join('dropshipper', 'pelanggan.kode_dropshipper = dropshipper.kode_dropshipper');
        return $this->db->get("pelanggan");
    }
    function insertPelanggan($data)
    {
        $simpan = $this->db->insert('pelanggan  ', $data);
        if ($simpan) {
            return 1;
        } else {
            return 0;
        }
    }
    function getpelanggan($kodepelanggan)
    {
        return $this->db->get_where('pelanggan', array('kode_pelanggan' => $kodepelanggan));
    }
    function updatepelanggan($data, $kodepelanggan)
    {
        $simpan = $this->db->update('pelanggan', $data, array('kode_pelanggan' => $kodepelanggan));
        if ($simpan) {
            return 1;
        } else {
            return 0;
        }
    }
    function deletepelanggan($kodepelanggan)
    {
        $hapus = $this->db->delete('pelanggan', array('kode_pelanggan' => $kodepelanggan));
        if ($hapus) {
            return 1;
        } else {
            return 0;
        }
    }
}
