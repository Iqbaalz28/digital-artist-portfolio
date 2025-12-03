<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Illustration extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('illustration/Illustration_model'));
    $this->load->helper(array('form', 'url'));
  }

  // User_customer view in list
  public function index($offset = NULL)
  {
    $data['illustrations']    = $this->Illustration_model->get();
    $data['title'] = 'Illustrations';
    $data['page'] = 'pages/illustration';
    $this->load->view('layouts/main.php', $data);
  }
}
