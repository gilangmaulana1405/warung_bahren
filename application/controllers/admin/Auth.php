<?php

class Auth extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username harus diisi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required',  [
            'required' => 'Password harus diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('admin/form_login');
            $this->load->view('templates/footer');
        } else {
            $auth = $this->model_auth->cek_login();

            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger text-center" role="alert">
                Username atau Password salah!
              </div>');

                redirect('admin/auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);

                // switch ($auth->role_id) {
                //     case 1:
                //         redirect('admin/dashboard_admin');
                //         break;
                //     case 2:
                //         redirect('welcome');
                //         break;

                //     default:
                //         break;
                // }

                if ($auth->role_id == '1') {
                    redirect('admin/dashboard_admin');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger text-center" role="alert">
                    Login hanya untuk Admin!
                  </div>');
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/auth/login');
    }
}
