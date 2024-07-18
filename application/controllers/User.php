<?php
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    function add()
    {
        $data['title'] = 'Tambah RPS';

        $this->load->view('__header', $data);
        $this->load->view('user/add_user');
        $this->load->view('__footer');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $kode = $this->input->post('kode');
            $matkul = $this->input->post('matkul');
            $dosen = $this->input->post('dosen');
            $jenis = $this->input->post('jenis');
            $data = array(
                'kode' => $kode,
                'matkul' => $matkul,
                'dosen' => $dosen,
                'jenis' => $jenis,
            );

            $status =  $this->user_model->insertUser($data);
            if ($status == true) {
                $this->session->set_flashdata('success', 'successfully Added');
                redirect(base_url('user/add'));
            } else {
                $this->session->set_flashdata('error', 'Error');
                $this->load->view('user/add_user');
            }
        } 
    }

    function index()
    {
        $data['title'] = 'RPS';
        $data['users'] = $this->user_model->getUsers();

        $this->load->view('__header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('__footer');
    }

    function print()
    {
        $data['user'] = $this->user_model->print_data('users')->result();
        $this->load->view('user/print_rps', $data);
    }

    function edit($id)
    {
        $data['id']=$id;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $kode = $this->input->post('kode');
            $matkul = $this->input->post('matkul');
            $dosen = $this->input->post('dosen');
            $jenis = $this->input->post('jenis');
            $data = array(
                'kode' => $kode,
                'matkul' => $matkul,
                'dosen' => $dosen,
                'jenis' => $jenis,
            );

            $status =  $this->user_model->updateUser($data, $id);
            if ($status == true) {
                $this->session->set_flashdata('success', 'successfully Updated');
                redirect(base_url('user/edit/'.$id));
            } else {
                $this->session->set_flashdata('error', 'Error');
                $this->load->view('user/edit_user');
            }
        }
        $data['title'] = 'Edit RPS';
        $data['user'] = $this->user_model->getUser($id);

        $this->load->view('__header', $data);
        $this->load->view('user/edit_user', $data);
        $this->load->view('__footer');
    }

    function delete($id)
    {
        if(is_numeric($id))
        {
            $status =$this->user_model->deleteUser($id);
            if ($status == true) {
                $this->session->set_flashdata('deleted', 'successfully Deleted');
                redirect(base_url('user/index/'));
            } else {
                $this->session->set_flashdata('error', 'Error');
                redirect(base_url('user/index/'));
            }
        }
    }
}
