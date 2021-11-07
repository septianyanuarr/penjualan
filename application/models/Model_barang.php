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
}
