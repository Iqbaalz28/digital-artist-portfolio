<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('blog/Blog_model'));
    $this->load->helper(array('form', 'url'));
  }

  public function index($offset = NULL)
  {
    $data['blogs']    = $this->Blog_model->get();
    $data['title'] = 'Blog';
    $data['page'] = 'pages/blog';
    $this->load->view('layouts/main', $data);
  }

  public function post()
  {

    $slug = $_GET['title'];

    $data['blog']    = $this->Blog_model->get(array('slug' => $slug));

    if ($data['blog'] < 1) {
      redirect('blog');
    }

    $data['title'] = 'Post - ' . $data['blog']['judul'];
    $data['page'] = 'pages/post';
    $this->load->view('layouts/main', $data);
  }
}
