<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Illustration_set extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged') == NULL) {
      header("Location:" . site_url('manage/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
    }
    $this->load->library('upload');
    $this->load->model(array('illustration/Illustration_model'));
    $this->load->helper(array('form', 'url'));
  }

  // User_customer view in list
  public function index($offset = NULL)
  {
    $data['illustrations']    = $this->Illustration_model->get();

    $data['title'] = 'Illustration';
    $data['main'] = 'illustration/list';
    $this->load->view('manage/layout', $data);
  }

  // Add User and Update
  public function add()
  {
    $data['title'] = 'Tambah Illustration';
    $data['main'] = 'illustration/add';
    $this->load->view('manage/layout', $data);
  }

  public function upload_image()
  {
    $config['upload_path'] = FCPATH . 'uploads/illustrations/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size'] = 1024;
    $this->upload->initialize($config);

    foreach ($_FILES['img']['name'] as $key => $value) {
      $_FILES['userfile']['name'] = $_FILES['img']['name'][$key];
      $_FILES['userfile']['type'] = $_FILES['img']['type'][$key];
      $_FILES['userfile']['tmp_name'] = $_FILES['img']['tmp_name'][$key];
      $_FILES['userfile']['error'] = $_FILES['img']['error'][$key];
      $_FILES['userfile']['size'] = $_FILES['img']['size'][$key];

      if ($this->upload->do_upload('userfile')) {
        $data = $this->upload->data();
        $file_name = $data['file_name'];
        $this->Illustration_model->insert_image($file_name);
      } else {
        $error = array('error' => $this->upload->display_errors());
        $this->session->set_flashdata('failed', 'Tambah Illustration Gagal');
      }
    }

    redirect('manage/illustration');
  }


  // Delete to database
  public function delete()
  {
    if ($_POST) {
      $id = $this->input->post('id');
      $this->Illustration_model->delete($id);
      $this->session->set_flashdata('success', 'Hapus Item Illustration berhasil');
      redirect('manage/illustration');
    } elseif (!$_POST) {
      $this->session->set_flashdata('delete', 'Delete');
      redirect('manage/illustration');
    }
  }
}
