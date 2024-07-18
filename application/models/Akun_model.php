<?php 

class Akun_model extends CI_Model
{
    function insertAkun($data)
    {
        $this->db->insert('user',$data);
        if ($this->db->affected_rows() >= 0) {
            return true; 
        } else {
            return false; 
        }
    }

    function print_data()
    {
        return $this->db->get('user');
    }

    function getAkuns()
    {
        $query = $this->db->get('user');
        return $query->result_array();
    }

    function getAkun($id_user)
    {
        $this->db->where('no',$id_user);
        $query=$this->db->get('user');
        return $query->row();

    }

    function updateAkun($data,$id_user)
    {
        $this->db->where('no',$id_user);
        $this->db->update('user',$data);
        if ($this->db->affected_rows() >= 0) {
            return true; 
        } else {
            return false; 
        }
    }

    function deleteAkun($id_user)
    {
        $this->db->where('no',$id_user);
        $this->db->delete('user');
        if ($this->db->affected_rows() >= 0) {
            return true; 
        } else {
            return false; 
        }
    }
}