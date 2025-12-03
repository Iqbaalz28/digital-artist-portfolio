<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Interview_set extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged') == NULL) {
      header("Location:" . site_url('manage/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
    }

    $this->load->model(array('interview/Interview_model'));
    $this->load->helper(array('form', 'url'));
  }

  // User_customer view in list
  public function index($offset = NULL)
  {
    $data['interview']    = $this->Interview_model->get();

    $data['title'] = 'Interview';
    $data['main'] = 'interview/list';
    $this->load->view('manage/layout', $data);
  }

  // Add User and Update
  public function add($id = NULL)
  {
    $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

    if ($_POST) {

      if ($this->input->post('id')) {
        $params['id'] = $id;
      }

      $params['name'] = $this->input->post('name');

      $status = $this->Interview_model->add($params);

      $paramsupdate['id'] = $status;
      $this->Interview_model->add($paramsupdate);

      $this->session->set_flashdata('success', $data['operation'] . ' Interview Berhasil');
      redirect('manage/interview');
    } else {
      if ($this->input->post('id')) {
        redirect('manage/interview/edit/' . $this->input->post('id'));
      }

      // Edit mode
      if (!is_null($id)) {
        $object = $this->Interview_model->get(array('id' => $id));
        if ($object == NULL) {
          redirect('manage/interview');
        } else {
          $data['interview'] = $object;
        }
      }
      $data['title'] = $data['operation'] . ' Interview';
      $data['main'] = 'interview/add';
      $this->load->view('manage/layout', $data);
    }
  }

  // Delete to database
  public function delete($id = NULL)
  {
    if ($_POST) {

      $this->Interview_model->delete($this->input->post('id'));

      $this->session->set_flashdata('success', 'Hapus Interview berhasil');
      redirect('manage/interview');
    } elseif (!$_POST) {
      $this->session->set_flashdata('delete', 'Delete');
      redirect('manage/interview/edit/' . $id);
    }
  }

  // Setting Upload File Requied
  function do_upload($name = NULL, $fileName = NULL)
  {
    $this->load->library('upload');

    $config['upload_path'] = FCPATH . 'uploads/interview/';

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
