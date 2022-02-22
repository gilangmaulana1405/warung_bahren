<?php


class Dashboard_admin extends CI_Controller
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
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templates_admin/footer');
    }

    public function tentang_developer()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tentang_developer');
        $this->load->view('templates_admin/footer');
    }
}
