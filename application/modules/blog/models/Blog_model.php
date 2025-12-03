<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blog_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    // Get From Databases
    function get($params = array())
    {

        if (isset($params['id'])) {
            $this->db->where('blogs.id', $params['id']);
        }

        if (isset($params['slug'])) {
            $this->db->where('blogs.slug', $params['slug']);
        }

        if (isset($params['limit'])) {
            if (!isset($params['offset'])) {
                $params['offset'] = NULL;
            }

            $this->db->limit($params['limit'], $params['offset']);
        }

        if (isset($params['order_by'])) {
            $this->db->order_by($params['order_by'], 'desc');
        } else {
            $this->db->order_by('created_at', 'desc');
        }

        $this->db->select('blogs.*, users.full_name');

        $this->db->join('users', 'users.id = blogs.penulis');

        $res = $this->db->get('blogs');

        if (isset($params['id']) || isset($params['slug'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
    }

    function add($data = array())
    {

        if (isset($data['id'])) {
            $this->db->set('id', $data['id']);
        }

        if (isset($data['konten'])) {
            $this->db->set('konten', $data['konten']);
        }

        if (isset($data['foto'])) {
            $this->db->set('foto', $data['foto']);
        }

        if (isset($data['judul'])) {
            $this->db->set('judul', $data['judul']);
        }

        if (isset($data['slug'])) {
            $this->db->set('slug', $data['slug']);
        }

        if (isset($data['penulis'])) {
            $this->db->set('penulis', $data['penulis']);
        }

        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('blogs');
            $id = $data['id'];
        } else {
            $this->db->insert('blogs');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('blogs');
    }

    public function is_exist($field, $value)
    {
        $this->db->where($field, $value);

        return $this->db->count_all_results('blogs') > 0 ? TRUE : FALSE;
    }
}
