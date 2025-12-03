<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    // Get From Databases
    function get($params = array())
    {

        if (isset($params['id'])) {
            $this->db->where('id', $params['id']);
        }
        if (isset($params['id'])) {
            $this->db->where('id', $params['id']);
        }

        if (isset($params['email'])) {
            $this->db->like('email', $params['email']);
        }

        if (isset($params['password'])) {
            $this->db->like('password', $params['password']);
        }

        if (isset($params['search'])) {
            $this->db->where('email', $params['search']);
            $this->db->or_like('full_name', $params['search']);
        }

        if (isset($params['date'])) {
            $this->db->where('created_at', $params['date']);
        }

        $this->db->where('is_deleted', FALSE);

        if (isset($params['limit'])) {
            if (!isset($params['offset'])) {
                $params['offset'] = NULL;
            }

            $this->db->limit($params['limit'], $params['offset']);
        }

        if (isset($params['order_by'])) {
            $this->db->order_by($params['order_by'], 'desc');
        } else {
            $this->db->order_by('email', 'ASC');
        }

        $this->db->select('id, password, full_name, description,  email, is_deleted, image, created_at, updated_at');

        $res = $this->db->get('users');

        if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
    }

    function get_login($params = array())
    {

        if (isset($params['id'])) {
            $this->db->where('id', $params['id']);
        }
        if (isset($params['id'])) {
            $this->db->where('id', $params['id']);
        }

        if (isset($params['email'])) {
            $this->db->like('email', $params['email']);
        }

        if (isset($params['password'])) {
            $this->db->like('password', $params['password']);
        }

        if (isset($params['search'])) {
            $this->db->where('email', $params['search']);
            $this->db->or_like('full_name', $params['search']);
        }

        if (isset($params['date'])) {
            $this->db->where('created_at', $params['date']);
        }

        $this->db->where('is_deleted', FALSE);

        if (isset($params['limit'])) {
            if (!isset($params['offset'])) {
                $params['offset'] = NULL;
            }

            $this->db->limit($params['limit'], $params['offset']);
        }

        if (isset($params['order_by'])) {
            $this->db->order_by($params['order_by'], 'desc');
        } else {
            $this->db->order_by('email', 'ASC');
        }

        $this->db->select('id, password, full_name, description,  email, is_deleted, image, created_at, updated_at');

        $res = $this->db->get('users');

        if (isset($params['id'])) {
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

        if (isset($data['password'])) {
            $this->db->set('password', $data['password']);
        }

        if (isset($data['full_name'])) {
            $this->db->set('full_name', $data['full_name']);
        }

        if (isset($data['email'])) {
            $this->db->set('email', $data['email']);
        }

        if (isset($data['image'])) {
            $this->db->set('image', $data['image']);
        }

        if (isset($data['created_at'])) {
            $this->db->set('created_at', $data['created_at']);
        }

        if (isset($data['updated_at'])) {
            $this->db->set('updated_at', $data['updated_at']);
        }

        if (isset($data['is_deleted'])) {
            $this->db->set('is_deleted', $data['is_deleted']);
        }

        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('users');
            $id = $data['id'];
        } else {
            $this->db->insert('users');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}
