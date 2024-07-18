<?php
class Kamar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('kamar_model');
    }

    function index()
    {
        $data['tersedia'] = $this->kamar_model->get_room_count_by_status('tersedia');
        $data['terisi'] = $this->kamar_model->get_room_count_by_status('terisi');
        $data['perbaikan'] = $this->kamar_model->get_room_count_by_status('perbaikan');
        $data['kamar'] = $this->kamar_model->getkamar();

        $this->load->view('__header', $data);
        $this->load->view('kamar/index', $data);
        $this->load->view('__footer');
    }

    function add()
    {
        $data['title'] = 'Tambah RPS';

        $this->load->view('__header', $data);
        $this->load->view('kamar/add_kamar');
        $this->load->view('__footer');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $no_kamar = $this->input->post('no_kamar');
            $nama = $this->input->post('nama');
            $fasilitas = $this->input->post('fasilitas');
            $tgl_masuk = $this->input->post('tgl_masuk');
            $tgl_pembayaran = $this->input->post('tgl_pembayaran');
            $status = $this->input->post('status');
            $data = array(
                'no_kamar' => $no_kamar,
                'nama' => $nama,
                'fasilitas' => $fasilitas,
                'tgl_masuk' => $tgl_masuk,
                'tgl_pembayaran' => $tgl_pembayaran,
                'status' => $status,
            );

            $status =  $this->kamar_model->insertKamar($data);
            if ($status == true) {
                $this->session->set_flashdata('success', 'successfully Added');
                redirect(base_url('kamar/index'));
            } else {
                $this->session->set_flashdata('error', 'Error');
                $this->load->view('kamar/add_kamar');
            }
        } 
    }

    function print($id)
    {
        $data['kamar'] = $this->kamar_model->getkamarById($id);
        if (empty($data['kamar'])) {
            show_404();
        }
        $this->load->view('kamar/print_payment', $data);
    }

    function edit($id_kamar)
    {
        $data['kamar'] = $this->kamar_model->getkamar($id_kamar);
        $data['id_kamar'] = $id_kamar;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $no_kamar = $this->input->post('no_kamar');
            $nama = $this->input->post('nama');
            $fasilitas = $this->input->post('fasilitas');
            $tgl_masuk = $this->input->post('tgl_masuk');
            $tgl_pembayaran = $this->input->post('tgl_pembayaran');
            $status = $this->input->post('status');
            $data = array(
                'no_kamar' => $no_kamar,
                'nama' => $nama,
                'fasilitas' => $fasilitas,
                'tgl_masuk' => $tgl_masuk,
                'tgl_pembayaran' => $tgl_pembayaran,
                'status' => $status,
            );

            $status =$this->kamar_model->updateKamar($data, $id_kamar);
            if ($status == true) {
                $this->session->set_flashdata('success', 'successfully Update');
                redirect(base_url('kamar/index/'.$id_kamar));
            } else {
                $this->session->set_flashdata('error', 'Error');
                redirect(base_url('kamar/edit/'));
            }

        }

        $this->load->view('__header', $data);
        $this->load->view('kamar/edit_kamar', $data);
        $this->load->view('__footer');
    }

    function delete($id)
    {
        if(is_numeric($id))
        {
            $status =$this->kamar_model->deleteKamar($id);
            if ($status == true) {
                $this->session->set_flashdata('deleted', 'successfully Deleted');
                redirect(base_url('kamar/index/'));
            } else {
                $this->session->set_flashdata('error', 'Error');
                redirect(base_url('kamar/index/'));
            }
        }
    }
}
