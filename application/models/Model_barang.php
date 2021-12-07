<?php
class Model_barang extends CI_Model
{
    function getDataBarang()
    {
        return $this->db->get('barang_master');
    }
    function insertBarang($data)
    {
        $simpan = $this->db->insert('barang_master', $data);
        if ($simpan) {
            return 1;
        } else {
            return 0;
        }
    }
    function getbarang($kodebarang)
    {
        return $this->db->get_where('barang_master', array('kode_barang' => $kodebarang));
    }
    function updatebarang($data, $kodebarang)
    {
        $simpan = $this->db->update('barang_master', $data, array('kode_barang' => $kodebarang));
        if ($simpan) {
            return 1;
        } else {
            return 0;
        }
    }
    function deletebarang($kodebarang)
    {
        $hapus = $this->db->delete('barang_master', array('kode_barang' => $kodebarang));
        if ($hapus) {
            return 1;
        } else {
            return 0;
        }
    }
    function getDataHarga()
    {
        $this->db->join('barang_master', 'barang_harga.kode_barang = barang_master.kode_barang');
        return $this->db->get('barang_harga');
    }
    function insertHarga($data)
    {
        $simpan = $this->db->insert('barang_harga', $data);
        if ($simpan) {
            return 1;
        } else {
            return 0;
        }
    }
    function getHarga($kodeharga)
    {
        $this->db->where('kode_harga', $kodeharga);
        $this->db->join('barang_master', 'barang_harga.kode_barang = barang_master.kode_barang');
        return $this->db->get('barang_harga');
    }
    function updateHarga($data, $kodeharga)
    {
        $simpan = $this->db->update('barang_harga', $data, array('kode_harga' => $kodeharga));
        if ($simpan) {
            return 1;
        } else {
            return 0;
        }
    }
    function deleteHarga($kodeharga)
    {
        $hapus = $this->db->delete('barang_harga', array('kode_harga' => $kodeharga));
        if ($hapus) {
            return 1;
        } else {
            return 0;
        }
    }
}
