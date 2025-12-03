<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Interview_model extends CI_Model
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

        $this->db->select('*');

        $res = $this->db->get('interviews');

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

        if (isset($data['name'])) {
            $this->db->set('name', $data['name']);
        }

        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $this->db->update('interviews');
            $id = $data['id'];
        } else {
            $this->db->insert('interviews');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('interviews');
    }

    public function is_exist($field, $value)
    {
        $this->db->where($field, $value);

        return $this->db->count_all_results('interviews') > 0 ? TRUE : FALSE;
    }



    function add_mahram($data = array())
    {

        if (isset($data['guest_id'])) {
            $this->db->set('guest_id', $data['guest_id']);
        }

        if (isset($data['guest_name'])) {
            $this->db->set('guest_name', $data['guest_name']);
        }

        if (isset($data['guest_mahram_id'])) {
            $this->db->set('guest_mahram_id', $data['guest_mahram_id']);
        }

        if (isset($data['guest_id'])) {
            $this->db->set('guest_id', $data['guest_id']);
        }

        if (isset($data['guest_id'])) {
            $this->db->where('guest_id', $data['guest_id']);
            $this->db->update('guest');
            $id = $data['guest_id'];
        } else {
            $this->db->insert('guest');
            $id = $this->db->insert_id();
        }

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }

    function delete_mahram($id)
    {
        $this->db->where('guest_id', $id);
        $this->db->delete('guest');
    }
}
