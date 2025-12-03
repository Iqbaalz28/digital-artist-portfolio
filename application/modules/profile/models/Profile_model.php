<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profile_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    // Get From Databases
    function get($params = array())
    {

        if (isset($params['id'])) {
            $this->db->where('profiles.id', $params['id']);
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
            $this->db->order_by('id', 'asc');
        }

        $this->db->select('profiles.*');

        $res = $this->db->get('profiles');

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

        if (isset($data['konten'])) {
            $this->db->set('konten', $data['konten']);
        }

        if (isset($data['foto_1'])) {
            $this->db->set('foto_1', $data['foto_1']);
        }

        if (isset($data['foto_2'])) {
            $this->db->set('foto_2', $data['foto_2']);
        }

        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('profiles');
            $id = $data['id'];
        } else {
            $this->db->insert('profiles');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('profiles');
    }

    public function is_exist($field, $value)
    {
        $this->db->where($field, $value);

        return $this->db->count_all_results('profiles') > 0 ? TRUE : FALSE;
    }
}
