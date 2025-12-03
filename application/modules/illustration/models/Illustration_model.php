<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Illustration_model extends CI_Model
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
            $this->db->order_by('id', 'desc');
        }

        $this->db->select('*');

        $res = $this->db->get('illustrations');

        if (isset($params['id'])) {
            return $res->row_array();
        } else {
            return $res->result_array();
        }
    }

    public function insert_image($img)
    {
        $data = array(
            'img' => $img
        );

        $this->db->insert('illustrations', $data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('illustrations');
    }
}
