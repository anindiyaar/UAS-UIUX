<?php
class Transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('transaksi_model');
    }

    function add()
    {
        $data['title'] = 'Tambah RPS';

        $this->load->view('__header', $data);
        $this->load->view('transaksi/add_user');
        $this->load->view('__footer');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $this->input->post('nama');
            $durasi_sewa = $this->input->post('durasi_sewa');
            $nominal = $this->input->post('nominal');
            $jenis_bayar = $this->input->post('jenis_bayar');
            $data = array(
                'nama' => $nama,
                'durasi_sewa' => $durasi_sewa,
                'nominal' => $nominal,
                'jenis_bayar' => $jenis_bayar,
            );

            $status =  $this->transaksi_model->insertTransaksi($data);
            if ($status == true) {
                $this->session->set_flashdata('success', 'successfully Added');
                redirect(base_url('transaksi/add'));
            } else {
                $this->session->set_flashdata('error', 'Error');
                $this->load->view('transaksi/add_user');
            }
        } 
    }

    function index()
    {
        $data['title'] = 'RPS';
        $data['users'] = $this->transaksi_model->getTransaksi();

        $this->load->view('__header', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('__footer');
    }

    function print()
    {
        $data['user'] = $this->transaksi_model->print_data('users')->result();
        $this->load->view('transaksi/print_rps', $data);
    }

    function edit($id)
    {
        $data['id']=$id;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $this->input->post('nama');
            $durasi_sewa = $this->input->post('durasi_sewa');
            $nominal = $this->input->post('nominal');
            $jenis_bayar = $this->input->post('jenis_bayar');
            $data = array(
                'nama' => $nama,
                'durasi_sewa' => $durasi_sewa,
                'nominal' => $nominal,
                'jenis_bayar' => $jenis_bayar,
            );

            $status =  $this->transaksi_model->updateTransaksi($data, $id);
            if ($status == true) {
                $this->session->set_flashdata('success', 'successfully Updated');
                redirect(base_url('transaksi/edit/'.$id));
            } else {
                $this->session->set_flashdata('error', 'Error');
                $this->load->view('transaksi/edit_user');
            }
        }
        $data['title'] = 'Edit RPS';
        $data['user'] = $this->transaksi_model->getTransaksi($id);

        $this->load->view('__header', $data);
        $this->load->view('transaksi/edit_user', $data);
        $this->load->view('__footer');
    }

    function delete($id)
    {
        if(is_numeric($id))
        {
            $status =$this->transaksi_model->deleteTransaksi($id);
            if ($status == true) {
                $this->session->set_flashdata('deleted', 'successfully Deleted');
                redirect(base_url('transaksi/index/'));
            } else {
                $this->session->set_flashdata('error', 'Error');
                redirect(base_url('transaksi/index/'));
            }
        }
    }
}
