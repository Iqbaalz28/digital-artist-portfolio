<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Client_set extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged') == NULL) {
      header("Location:" . site_url('manage/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
    }

    $this->load->model(array('client/Client_model'));
    $this->load->helper(array('form', 'url'));
  }

  // User_customer view in list
  public function index($offset = NULL)
  {
    $data['client']    = $this->Client_model->get();

    $data['title'] = 'Client';
    $data['main'] = 'client/list';
    $this->load->view('manage/layout', $data);
  }

  // Add Client and Update
  public function add($id = NULL)
  {
    $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

    if ($_POST) {

      if ($this->input->post('id')) {
        $params['id'] = $id;
      }

      $params['name'] = $this->input->post('name');

      $status = $this->Client_model->add($params);

      $paramsupdate['id'] = $status;
      $this->Client_model->add($paramsupdate);

      $this->session->set_flashdata('success', $data['operation'] . ' Client Berhasil');
      redirect('manage/client');
    } else {
      if ($this->input->post('id')) {
        redirect('manage/client/edit/' . $this->input->post('id'));
      }

      // Edit mode
      if (!is_null($id)) {
        $object = $this->Client_model->get(array('id' => $id));
        if ($object == NULL) {
          redirect('manage/client');
        } else {
          $data['client'] = $object;
        }
      }
      $data['title'] = $data['operation'] . ' Client';
      $data['main'] = 'client/add';
      $this->load->view('manage/layout', $data);
    }
  }

  // Delete to database
  public function delete($id = NULL)
  {
    if ($_POST) {

      $this->Client_model->delete($this->input->post('id'));

      $this->session->set_flashdata('success', 'Hapus Client berhasil');
      redirect('manage/client');
    } elseif (!$_POST) {
      $this->session->set_flashdata('delete', 'Delete');
      redirect('manage/client/edit/' . $id);
    }
  }

  // Setting Upload File Requied
  function do_upload($name = NULL, $fileName = NULL)
  {
    $this->load->library('upload');

    $config['upload_path'] = FCPATH . 'uploads/client/';

    /* create directory if not exist */
    if (!is_dir($config['upload_path'])) {
      mkdir($config['upload_path'], 0777, TRUE);
    }

    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['max_size'] = '1024';
    $config['file_name'] = $fileName;
    $this->upload->initialize($config);

    if (!$this->upload->do_upload($name)) {
      $this->session->set_flashdata('success', $this->upload->display_errors('', ''));
      redirect(uri_string());
    }

    $upload_data = $this->upload->data();

    return $upload_data['file_name'];
  }
}
