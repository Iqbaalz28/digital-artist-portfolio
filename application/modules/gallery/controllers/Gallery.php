<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('gallery/Gallery_model'));
    $this->load->helper(array('form', 'url'));
  }

  // User_customer view in list
  public function index($offset = NULL)
  {
    $data['galleries']    = $this->Gallery_model->get();
    $data['title'] = 'Galleries';
    $data['page'] = 'pages/gallery';
    $this->load->view('layouts/main.php', $data);
  }
}
