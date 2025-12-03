<?php

defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array(
            'profile/Profile_model', 'honour/Honour_model',
            'client/Client_model', 'interview/Interview_model'
        ));
        $this->load->helper(array('form', 'url'));
    }

    public function index($offset = NULL)
    {
        $data['profile']    = $this->Profile_model->get(array('id' => 1));
        $data['clients']    = $this->Client_model->get();
        $data['interviews'] = $this->Interview_model->get();
        $data['honours']    = $this->Honour_model->get();

        $data['title'] = 'About Me';
        $data['page'] = 'pages/about';
        $this->load->view('layouts/main', $data);
    }
}
