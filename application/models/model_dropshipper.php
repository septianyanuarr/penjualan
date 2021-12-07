<?php

class Model_dropshipper extends CI_Model
{

    function getDataDropshipper()
    {
        return $this->db->get('dropshipper');
    }
    function insertDropshipper($data)
    {
        $simpan = $this->db->insert('dropshipper', $data);
        if ($simpan) {
            return 1;
        } else {
            return 0;
        }
    }
    function getdropshipper($kodedropshipper)
    {
        return $this->db->get_where('dropshipper', array('kode_dropshipper' => $kodedropshipper));
    }
    function updatedropshipper($data, $kodedropshipper)
    {
        $simpan = $this->db->update('dropshipper', $data, array('kode_dropshipper' => $kodedropshipper));
        if ($simpan) {
            return 1;
        } else {
            return 0;
        }
    }
    function deletedropshipper($kodedropshipper)
    {
        $hapus = $this->db->delete('dropshipper', array('kode_dropshipper' => $kodedropshipper));
        if ($hapus) {
            return 1;
        } else {
            return 0;
        }
    }
}
