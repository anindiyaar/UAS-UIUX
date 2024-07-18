<?php
class Akun extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('akun_model');
    }

    function index()
    {
        $data['title'] = 'Akun';
        $data['user'] = $this->akun_model->getAkuns();

        $this->load->view('__header', $data);
        if ($this->session->userdata('role') == "administrator") 
        {
                  $this->load->view('akun/index', $data);
        } else {
                  $this->load->view('dashboard');
        }
          $this->load->view('__footer');
    }

    function add_akun()
    {
        $data['title'] = 'Tambah Akun';

        $this->load->view('__header', $data);
        $this->load->view('akun/add_akun');
        $this->load->view('__footer');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama = $this->input->post('nama');
            $no_telepon = $this->input->post('no_telepon');
            $alamat = $this->input->post('alamat');
            $role = $this->input->post('role');
            $data = array(
                'username' => $username,
                'password' => $password,
                'nama' => $nama,
                'no_telepon' => $no_telepon,
                'alamat' => $alamat,
                'role' => $role,
            );

            $status =  $this->akun_model->insertAkun($data);
            if ($status == true) {
                $this->session->set_flashdata('success', 'successfully Added');
                redirect(base_url('akun/index'));
            } else {
                $this->session->set_flashdata('error', 'Error');
                $this->load->view('akun/add_akun');
            }
        } 
    }

    function edit($id_user)
    {
        $data['title'] = 'Edit user';
        $data['user'] = $this->akun_model->getAkun($id_user);



        $data['no']=$id_user;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama = $this->input->post('nama');
            $no_telepon = $this->input->post('no_telepon');
            $alamat = $this->input->post('alamat');
            $role = $this->input->post('role');
            $data = array(
                'username' => $username,
                'password' => $password,
                'nama' => $nama,
                'no_telepon' => $no_telepon,
                'alamat' => $alamat,
                'role' => $role,
            );

            $status =  $this->akun_model->updateAkun($data, $id_user);
            if ($status == true) {
                $this->session->set_flashdata('success', 'successfully Updated');
                redirect(base_url('akun/index/'.$id));
            } else {
                $this->session->set_flashdata('error', 'Error');
                $this->load->view('akun/edit_akun');
            }
        }

        $this->load->view('__header', $data);
        $this->load->view('akun/edit_akun', $data);
        $this->load->view('__footer');
    }

    function delete($id_user)
    {
        if(is_numeric($id_user))
        {
            $status =$this->akun_model->deleteAkun($id_user);
            if ($status == true) {
                $this->session->set_flashdata('deleted', 'successfully Deleted');
                redirect(base_url('akun/index/'));
            } else {
                $this->session->set_flashdata('error', 'Error');
                redirect(base_url('akun/index/'));
            }
        }
    }
}
