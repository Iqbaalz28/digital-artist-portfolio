<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users_set extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') == NULL) {
            header("Location:" . site_url('manage/auth/login') . "?location=" . urlencode($_SERVER['REQUEST_URI']));
        }

        $this->load->model(array('users/Users_model'));
        $this->load->helper(array('form', 'url'));
    }

    // User_customer view in list
    public function index($offset = NULL)
    {
        // Apply Filter
        // Get $_GET variable
        $f = $this->input->get(NULL, TRUE);

        $data['f'] = $f;

        $params = array();
        // Nip
        if (isset($f['n']) && !empty($f['n']) && $f['n'] != '') {
            $params['search'] = $f['n'];
        }
        $data['user'] = $this->Users_model->get($params);

        $data['title'] = 'Pengguna';
        $data['main'] = 'users/list';
        $this->load->view('manage/layout', $data);
    }

    // Add User and Update
    public function add($id = NULL)
    {
        $this->load->library('form_validation');

        if (!$this->input->post('id')) {
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length[6]');
            $this->form_validation->set_rules('passconf', 'Konfirmasi password', 'trim|required|xss_clean|min_length[6]|matches[password]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|is_unique[users.email]');
            $this->form_validation->set_message('passconf', 'Password dan konfirmasi password tidak cocok');
        }
        $this->form_validation->set_rules('full_name', 'Nama lengkap', 'trim|required|xss_clean');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button position="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>');
        $data['operation'] = is_null($id) ? 'Tambah' : 'Sunting';

        if ($_POST and $this->form_validation->run() == TRUE) {

            if ($this->input->post('id')) {
                $params['id'] = $id;
            } else {
                $params['created_at'] = date('Y-m-d H:i:s');
                $params['email'] = $this->input->post('email');
                $params['password'] = md5($this->input->post('password'));
            }
            $params['email'] = $this->input->post('email');
            $params['full_name'] = $this->input->post('full_name');

            $params['updated_at'] = date('Y-m-d H:i:s');
            $status = $this->Users_model->add($params);

            if (!empty($_FILES['image']['name'])) {
                $paramsupdate['image'] = $this->do_upload($name = 'image', $fileName = $params['full_name']);
            }

            $paramsupdate['id'] = $status;
            $this->Users_model->add($paramsupdate);

            $this->session->set_flashdata('success', $data['operation'] . ' Pengguna Berhasil');
            redirect('manage/users');
        } else {
            if ($this->input->post('id')) {
                redirect('manage/users/edit/' . $this->input->post('id'));
            }

            // Edit mode
            if (!is_null($id)) {
                $object = $this->Users_model->get(array('id' => $id));
                if ($object == NULL) {
                    redirect('manage/users');
                } else {
                    $data['user'] = $object;
                }
            }
            $data['title'] = $data['operation'] . ' Pengguna';
            $data['main'] = 'users/add';
            $this->load->view('manage/layout', $data);
        }
    }

    // Delete to database
    public function delete($id = NULL)
    {
        if ($_POST) {
            $this->Users_model->delete($id);

            $this->session->set_flashdata('success', 'Hapus Pengguna berhasil');
            redirect('manage/users');
        } elseif (!$_POST) {
            $this->session->set_flashdata('delete', 'Delete');
            redirect('manage/users/edit/' . $id);
        }
    }

    // Setting Upload File Requied
    function do_upload($name = NULL, $fileName = NULL)
    {
        $this->load->library('upload');

        $config['upload_path'] = FCPATH . 'uploads/users/';

        /* create directory if not exist */
        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        }

        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '32000';
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
