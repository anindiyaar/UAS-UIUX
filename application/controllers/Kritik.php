<?php
class Kritik extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('kritik_model');
    }

    function index()
    {
        $data['title'] = 'Data Kritik';
        $data['kritik'] = $this->kritik_model->getKritik();

        $this->load->view('__header', $data);
        $this->load->view('kritik/index', $data);
        $this->load->view('__footer');
    }

    function add_kritik()
    {
        $data['title'] = 'Tambah Kritik';

        $this->load->view('__header', $data);
        $this->load->view('kritik/add_kritik', $data);
        $this->load->view('__footer');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $this->input->post('nama');
            $no_hp = $this->input->post('no_hp');
            $kritik = $this->input->post('kritik');
            $data = array(
                'nama' => $nama,
                'no_hp' => $no_hp,
                'kritik' => $kritik,
            );

            $status =  $this->kritik_model->insertKritik($data);
            if ($status == true) {
                $this->session->set_flashdata('success', 'Kritik berhasil ditambahkan');
                redirect(base_url('kritik/index'));
            } else {
                $this->session->set_flashdata('error', 'Error');
                $this->load->view('kritik/add_kritik');
            }
        }
    }

    function print()
    {
        $data['kritik'] = $this->kritik_model->getKritik();

        $this->load->view('kritik/print', $data);
    }

    function edit($id)
    {
        $data['title'] = 'Edit Kritik';
        $data['kritik'] = $this->kritik_model->getKritikById($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $kritik = $this->input->post('kritik');
            $data = array(
                'nama' => $nama,
                'no_hp' => $no_hp,
                'kritik' => $kritik,
            );

            $status =  $this->kritik_model->updateKritik($data, $id);
            if ($status == true) {
                $this->session->set_flashdata('success', 'Kritik berhasil diperbarui');
                redirect(base_url('kritik/index'));
            } else {
                $this->session->set_flashdata('error', 'Error');
                $this->load->view('kritik/edit', $data);
            }
        }

        $this->load->view('__header', $data);
        $this->load->view('kritik/edit', $data);
        $this->load->view('__footer');
    }

    function delete($id)
    {
        if (is_numeric($id)) {
            $status = $this->kritik_model->deleteKritik($id);
            if ($status == true) {
                $this->session->set_flashdata('deleted', 'Kritik berhasil dihapus');
                redirect(base_url('kritik/index'));
            } else {
                $this->session->set_flashdata('error', 'Error');
                redirect(base_url('kritik/index'));
            }
        }
    }
}
?>
