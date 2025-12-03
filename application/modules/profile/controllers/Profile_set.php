<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profile_set extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged') == NULL) {
      header("Location:" . site_url('manage/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
    }

    $this->load->model(array('profile/Profile_model'));
    $this->load->helper(array('form', 'url'));
  }

  // User_customer view in list
  public function index($offset = NULL)
  {
    $data['profiles']    = $this->Profile_model->get();

    $data['title'] = 'Profile';
    $data['main'] = 'profile/list';
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

      $params['konten'] = $this->input->post('konten');

      // $status = $this->Profile_model->add($params);

      // $params['id'] = $status;

      if (!empty($_FILES['foto_1']['name'])) {
        $params['foto_1'] = $this->do_upload_foto_1($name = 'foto_1', $fileName = base64_encode(date('YmdHis')));
      }

      if (!empty($_FILES['foto_2']['name'])) {
        $params['foto_2'] = $this->do_upload_foto_2($name = 'foto_2', $fileName = base64_encode(date('YmdHis')));
      }

      $this->Profile_model->add($params);

      $this->session->set_flashdata('success', $data['operation'] . ' Profile Berhasil');
      redirect('manage/profile');
    } else {
      if ($this->input->post('id')) {
        redirect('manage/profile/edit/' . $this->input->post('id'));
      }

      // Edit mode
      if (!is_null($id)) {
        $object = $this->Profile_model->get(array('id' => $id));
        if ($object == NULL) {
          redirect('manage/profile');
        } else {
          $data['profile'] = $object;
        }
      }
      $data['title'] = $data['operation'] . ' Profile';
      $data['main'] = 'profile/add';
      $this->load->view('manage/layout', $data);
    }
  }

  // Delete to database
  public function delete($id = NULL)
  {
    if ($_POST) {

      $this->Profile_model->delete($this->input->post('id'));

      $this->session->set_flashdata('success', 'Hapus Profile Berhasil');
      redirect('manage/profile');
    } elseif (!$_POST) {
      $this->session->set_flashdata('delete', 'Delete');
      redirect('manage/profile/edit/' . $id);
    }
  }

  // Setting Upload File Requied
  function do_upload_foto_1($name = NULL, $fileName = NULL)
  {
    $this->load->library('upload');

    $config['upload_path'] = FCPATH . 'uploads/foto_1/';

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

  function do_upload_foto_2($name = NULL, $fileName = NULL)
  {
    $this->load->library('upload');

    $config['upload_path'] = FCPATH . 'uploads/foto_2/';

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

  public function upload_konten()
  {
    $dir = 'uploads/profiles/';
    $allowed_extensions = array("jpg", "gif", "png");
    $function_number = $this->input->get('CKEditorFuncNum');

    if (!empty($_FILES['upload']['name'])) {
      $file = $_FILES['upload']['tmp_name'];
      $file_name = $_FILES['upload']['name'];
      $file_name_array = explode(".", $file_name);
      $extension = end($file_name_array);
      $new_image_name = rand() . '.' . $extension;

      if (in_array($extension, $allowed_extensions)) {
        move_uploaded_file($file, $dir . $new_image_name);
        $url = base_url($dir . $new_image_name);
        $message = '';
        echo "<script>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
      }
    }
  }
}
