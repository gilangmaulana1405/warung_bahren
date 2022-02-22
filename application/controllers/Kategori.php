<?php


class Kategori extends CI_Controller
{

    public function makanan()
    {
        $data['makanan'] = $this->model_kategori->data_makanan()->result();

        if ($this->input->post('keyword')) {
            $data['barang'] = $this->model_barang->cariDataBarang();
        }

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('makanan', $data);
        $this->load->view('templates/footer');
    }


    public function minuman()
    {
        $data['minuman'] = $this->model_kategori->data_minuman()->result();

        if ($this->input->post('keyword')) {
            $data['barang'] = $this->model_barang->cariDataBarang();
        }

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('minuman', $data);
        $this->load->view('templates/footer');
    }
}
