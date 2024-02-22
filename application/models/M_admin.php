<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_admin extends CI_Model
{
    function data()
    {
        $this->db->select('*');
        $this->db->from('data');
        $this->db->order_by('id', 'DESC');
        return $this->db->get('')->result_array();
    }
    function tambah($table, $data)
    {
        $this->db->insert($table, $data);
    }
    function ubah($where, $table, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
