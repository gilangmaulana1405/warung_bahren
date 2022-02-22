<?php

class Invoice extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger text-center" role="alert">
            Anda Belum Login!
          </div>');

            redirect('admin/auth/login');
        }
    }

    public function index()
    {
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates_admin/footer');
    }

    public function detail($id_invoice)
    {
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templates_admin/footer');
    }

    public function hapus($id)
    {
        $hapus = array('id' => $id);
        $this->model_barang->hapus_data($hapus, 'tb_invoice');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success text-center" role="alert">
        Data barang berhasil dihapus!
      </div>');
        redirect('admin/invoice');
    }

    public function print($id)
    {
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id);

        $this->load->view('templates_admin/header');
        $this->load->view('admin/print_pesanan', $data);
        $this->load->view('templates_admin/footer');
    }
}
