<?php 

class Kamar_model extends CI_Model
{
    function insertkamar($data)
    {
        $this->db->insert('kamar', $data);
        return $this->db->affected_rows() >= 0;
    }

    public function print($id_kamar) {
        $data['kamar'] = $this->Kamar_model->getKamarById($id_kamar);
        if (empty($data['kamar'])) {
            show_404();
        }
        $this->load->view('payment/print_payment', $data);
    }

    function getKamar()
    {
        $query = $this->db->get('kamar');
        return $query->result_array();
    }

    public function get_room_count_by_status($status) {
        $this->db->where('status', $status);
        $this->db->from('kamar');
        return $this->db->count_all_results();
    }

    function getKamarById($id)
    {
        $this->db->where('id_kamar', $id);
        $query = $this->db->get('kamar');
        return $query->row();
    }

    function updateKamar($data, $id)
    {
        $this->db->where('id_kamar', $id);
        $this->db->update('kamar', $data);
        return $this->db->affected_rows() >= 0;
    }

    function deleteKamar($id_kamar)
    {
        $this->db->where('id_kamar', $id_kamar);
        $this->db->delete('kamar');
        return $this->db->affected_rows() >= 0;
    }
}
