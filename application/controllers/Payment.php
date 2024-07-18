<?php
class Payment extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('payment_model');
    }

    function index()
    {
        $data['payments'] = $this->payment_model->getPayment();

        $this->load->view('__header', $data);
        $this->load->view('payment/index', $data);
        $this->load->view('__footer');
    }

    function add()
    {
        $data['title'] = 'Tambah RPS';

        $this->load->view('__header', $data);
        $this->load->view('payment/add_payment');
        $this->load->view('__footer');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $no_kamar = $this->input->post('no_kamar');
            $id_user = $this->input->post('id_user');
            $nama = $this->input->post('nama');
            $tanggal_pembayaran = $this->input->post('tanggal_pembayaran');
            $jumlah_bayar = $this->input->post('jumlah_bayar');
            $bukti_pembayaran = $this->input->post('bukti_pembayaran');
            $data = array(
                'no_kamar' => $no_kamar,
                'id_user' => $id_user,
                'nama' => $nama,
                'tanggal_pembayaran' => $tanggal_pembayaran,
                'jumlah_bayar' => $jumlah_bayar,
                'bukti_pembayaran' => $bukti_pembayaran,
            );

            $status =  $this->payment_model->insertPayment($data);
            if ($status == true) {
                $this->session->set_flashdata('success', 'successfully Added');
                redirect(base_url('payment/index'));
            } else {
                $this->session->set_flashdata('error', 'Error');
                $this->load->view('payment/add_rps');
            }
        } 
    }

    function print()
    {
        $data['payments'] = $this->payment_model->print_data('payments')->result();
        $this->load->view('payment/print_payment', $data);
    }


    function edit($id)
    {
        $data['payments'] = $this->payment_model->getPayment($id);
        $data['id'] = $id;


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $no_kamar = $this->input->post('no_kamar');
            $id_user = $this->input->post('id_user');
            $nama = $this->input->post('nama');
            $tanggal_pembayaran = $this->input->post('tanggal_pembayaran');
            $jumlah_bayar = $this->input->post('jumlah_bayar');
            $bukti_pembayaran = $this->input->post('bukti_pembayaran');
            $data = array(
                'no_kamar' => $no_kamar,
                'id_user' => $id_user,
                'nama' => $nama,
                'tanggal_pembayaran' => $tanggal_pembayaran,
                'jumlah_bayar' => $jumlah_bayar,
                'bukti_pembayaran' => $bukti_pembayaran,
            );

            $status =$this->payment_model->updatePayment($data, $id);
            if ($status == true) {
                $this->session->set_flashdata('success', 'successfully Update');
                redirect(base_url('payment/index/'.$id));
            } else {
                $this->session->set_flashdata('error', 'Error');
                redirect(base_url('payment/edit/'));
            }

        }

        $this->load->view('__header', $data);
        $this->load->view('payment/edit_payment', $data);
        $this->load->view('__footer');
    }

    function delete($id)
    {
        if(is_numeric($id))
        {
            $status =$this->payment_model->deletePayment($id);
            if ($status == true) {
                $this->session->set_flashdata('deleted', 'successfully Deleted');
                redirect(base_url('payment/index/'));
            } else {
                $this->session->set_flashdata('error', 'Error');
                redirect(base_url('payment/index/'));
            }
        }
    }

    public function search()
    {
        $keyword = $this->input->get('keyword'); // Ambil kata kunci pencarian dari GET parameter

        // Cek apakah kata kunci pencarian kosong
        if (empty($keyword)) {

            $this->session->set_flashdata('error', 'ID User harus diisi');

            redirect('payment/index');
        } else {
            // Panggil model untuk melakukan pencarian berdasarkan ID User
            $data['payments'] = $this->payment_model->searchPayments($keyword);

            // Load view dengan data hasil pencarian
            $this->load->view('__header');
            $this->load->view('payment/search_result', $data);
            $this->load->view('__footer');
        }
    }
}
