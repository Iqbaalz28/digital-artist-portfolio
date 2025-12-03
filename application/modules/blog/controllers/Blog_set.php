<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog_set extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged') == NULL) {
      header("Location:" . site_url('manage/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
    }

    $this->load->model(array('blog/Blog_model'));
    $this->load->helper(array('form', 'url'));
  }

  // User_customer view in list
  public function index($offset = NULL)
  {
    $data['blogs']    = $this->Blog_model->get();

    $data['title'] = 'Blog';
    $data['main'] = 'blog/list';
    $this->load->view('manage/layout', $data);
  }

  // Add Konten and Update
  public function add($id = NULL)
  {
    $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

    if ($_POST) {

      if ($this->input->post('id')) {
        $params['id'] = $id;
      }

      $params['konten'] = $this->input->post('konten');
      $params['judul'] = $this->input->post('judul');
      $params['slug'] = $this->create_slug($this->input->post('judul'));
      $params['penulis'] = $this->session->userdata('uid');

      $status = $this->Blog_model->add($params);

      if (!empty($_FILES['foto']['name'])) {
        $paramsupdate['foto'] = $this->do_upload($name = 'foto', $fileName = base64_encode(substr($params['judul'], 6)));
      }

      $paramsupdate['id'] = $status;
      $this->Blog_model->add($paramsupdate);

      $this->session->set_flashdata('success', $data['operation'] . ' Blog Berhasil');
      redirect('manage/blog');
    } else {
      if ($this->input->post('id')) {
        redirect('manage/blog/edit/' . $this->input->post('id'));
      }

      // Edit mode
      if (!is_null($id)) {
        $object = $this->Blog_model->get(array('id' => $id));
        if ($object == NULL) {
          redirect('manage/blog');
        } else {
          $data['blog'] = $object;
        }
      }
      $data['title'] = $data['operation'] . ' Blog';
      $data['main'] = 'blog/add';
      $this->load->view('manage/layout', $data);
    }
  }

  // Delete to database
  public function delete($id = NULL)
  {
    if ($_POST) {

      $this->Blog_model->delete($this->input->post('id'));

      $this->session->set_flashdata('success', 'Hapus Blog Berhasil');
      redirect('manage/blog');
    } elseif (!$_POST) {
      $this->session->set_flashdata('delete', 'Delete');
      redirect('manage/blog/edit/' . $id);
    }
  }

  // Setting Upload File Requied
  function do_upload($name = NULL, $fileName = NULL)
  {
    $this->load->library('upload');

    $config['upload_path'] = FCPATH . 'uploads/blogs/';

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
    $dir = 'uploads/blogs/';
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

  function create_slug($string)
  {
    $string = str_replace(' ', '-', $string);

    $string = preg_replace('/[^A-Za-z0-9-]+/', '', $string);

    $string = strtolower($string);

    return $string;
  }
}
