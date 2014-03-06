<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Invoice_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function list_items() {
        $this->db->order_by('id', 'desc');
        $this->db->limit(30);
        $query = $this->db->get('invoice');

        return $query->result_array();
    }

    public function find_one($id) {

        $invoice = $this->db->where('id', $id)->get('invoice')->row_array();
        $invoice['item'] = $this->invoice_items($id);

        return $invoice;
    }

    function invoice_items($id) {
        $query = $this->db->get_where('invoice_items', array('invoice_id' => $id));
        return $query->result_array();
    }

    public function insert($param) {
        $item = $param['item'];
        unset($param['id'], $param['item']);
        $this->db->trans_start();

        $param['deadlines_payment'] = date('Y-m-d', strtotime($param['deadlines_payment']));

        $this->db->insert('invoice', $param);
        $invoice_id = $this->db->insert_id();


        foreach ($item as $key => $value) {
            $item[$key]['invoice_id'] = $invoice_id;
        }
        $this->db->insert_batch('invoice_items', $item);
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            // generate an error... or use the log_message() function to log your error
            log_message('error invoice');
            return FALSE;
        }

        return TRUE;
    }

    public function update($param, $whare) {

        $item = array();


        $invoice_id = $param['id'];
        if (isset($param['item'])) {
            $item = $param['item'];
            unset($param['item']);
        }
        unset($param['id']);

        $param['deadlines_payment'] = date('Y-m-d', strtotime($param['deadlines_payment']));
        $this->db->trans_start();

        $this->db->where($whare);
        $this->db->update('invoice', $param);


        $this->db->delete('invoice_items', array('invoice_id' => $invoice_id));
        if (count($item)) {
            foreach ($item as $key => $value) {
                $item[$key]['invoice_id'] = $invoice_id;
            }

            print_r($item);

           
            $this->db->insert_batch('invoice_items', $item);
            
        }
        $this->db->trans_complete();
// die();
        if ($this->db->trans_status() === FALSE) {
            // generate an error... or use the log_message() function to log your error
            log_message('error invoice');
            return FALSE;
        }

        return TRUE;
    }

    function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('invoice');
        return FALSE;
    }

}
