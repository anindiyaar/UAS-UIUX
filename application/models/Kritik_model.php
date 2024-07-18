<?php
class Kritik_model extends CI_Model
{
    function insertKritik($data)
    {
        $this->db->insert('kritik', $data);
        return $this->db->affected_rows() >= 0;
    }

    function getKritik()
    {
        $query = $this->db->get('kritik');
        return $query->result_array();
    }

    function getKritikById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('kritik');
        return $query->row();
    }

    function updateKritik($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('kritik', $data);
        return $this->db->affected_rows() >= 0;
    }

    function deleteKritik($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kritik');
        return $this->db->affected_rows() >= 0;
    }
}
?>
