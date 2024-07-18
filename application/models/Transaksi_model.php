<?php 

class Transaksi_model extends CI_Model
{
    function insertTransaksi($data)
    {
        $this->db->insert('transaksi',$data);
        if ($this->db->affected_rows() >= 0) {
            return true; 
        } else {
            return false; 
        }
    }

    function getTransaksi()
    {
        $query = $this->db->get('transaksi');
        return $query->result_array();
    }

    function getTransaksis($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->get('transaksi');
        return $query->row();

    }

    function print_data()
    {
        return $this->db->get('transaksi');
    }

    function updateTransaksi($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('transaksi',$data);
        if ($this->db->affected_rows() >= 0) {
            return true; 
        } else {
            return false; 
        }
    }

    function deleteTransaksi($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('transaksi');
        if ($this->db->affected_rows() >= 0) {
            return true; 
        } else {
            return false; 
        }
    }
}