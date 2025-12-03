<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->model(array('contact/Contact_model'));
    }

    public function index($offset = NULL)
    {

        $data['contact'] = $this->db->query("SELECT konten FROM contacts WHERE id = 1")->row_array();

        $data['title'] = 'Contact Me';
        $data['page'] = 'pages/contact';
        $this->load->view('layouts/main', $data);
    }
}
