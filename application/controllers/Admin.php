<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function index()
    {
        $data = [
            'data' => $this->m_admin->data(),
            'data1' => $this->m_admin->data(),
        ];

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/templates/footer', $data);
    }

    public function tambah_data()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $address = $this->input->post('address');

        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
        ];
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
       Add Data Profile
</div>');

        $this->m_admin->tambah('data', $data);

        redirect('admin');
    }

    public function edit_data()
    {
        $id = $this->input->post('id');

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $address = $this->input->post('address');

        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
        ];

        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
        Update Data Profile!
</div>');
        $this->m_admin->ubah(['id' => $id], 'data', $data);
        redirect($this->agent->referrer());
    }

    public function hapus_data($id)
    {
        $where = array('id' => $id);


        $this->m_admin->hapus($where, 'data');

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Delete Data Profile!
 </div>');

        redirect('admin');
    }
}
