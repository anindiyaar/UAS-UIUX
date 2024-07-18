<?php 

class Payment_model extends CI_Model
{
    function insertPayment($data)
    {
        $this->db->insert('payments', $data);
        return $this->db->affected_rows() >= 0;
    }

    function print_data()
    {
        return $this->db->get('payments');
    }

    function getPayment()
    {
        $query = $this->db->get('payments');
        return $query->result_array();
    }

    function getPaymentById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('payments');
        return $query->row();
    }

    function updatePayment($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('payments', $data);
        return $this->db->affected_rows() >= 0;
    }

    function deletePayment($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('payments');
        return $this->db->affected_rows() >= 0;
    }

    public function searchPayments  ($keyword)
    {
        $this->db->select('*');
        $this->db->from('payments');
        $this->db->like('id_user', $keyword);
        // Tambahkan kolom lain yang ingin Anda cari
    
        $query = $this->db->get();
        return $query->result_array();
    }
}
