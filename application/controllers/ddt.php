<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
include_once APPPATH . 'controllers/secure.php';

class Ddt extends Secure_Controller {

    function __construct() {
        parent::__construct();
        $this->_CI = & get_instance();
        $this->load->model(array('login_model', 'ddt_model'));
        $this->load->library('session');
    }

    public function index() {
        $logined = $this->session->userdata('logged_in');
        $data['web_info'] = $this->web_setting_model->web_info();
        $data['invoices'] = $this->ddt_model->list_items();
         
        $this->load->view('ddt', $data);
    }

    public function add() {
        $logined = $this->session->userdata('logged_in');

        $data['web_info'] = $this->web_setting_model->web_info();
        $data['form'] = array();

        if (!empty($_POST)) {

            if ($this->_process($_POST)) {
                $this->session->set_flashdata('success', TRUE);
                redirect('ddt');
            }
        }

        $this->load->view('ddt_add', $data);
    }

    function _process($data) {



        unset($data['submit']);

        if (empty($data['id'])) {
            return $this->ddt_model->insert($data);
        } else {
            $whare = array('id' => $data['id']);
            return $this->ddt_model->update($data, $whare);
        }
        return FALSE;
    }

    public function edit($id) {
        $logined = $this->session->userdata('logged_in');
        $data['web_info'] = $this->web_setting_model->web_info();
        $data['form'] = $this->ddt_model->find_one($id);
        if (!empty($_POST)) {

            if ($this->_process($_POST)) {
                $this->session->set_flashdata('success', TRUE);
                redirect('ddt');
            }
        }
		//var_dump($data);exit;
        $this->load->view('ddt_edit', $data);
    }

    public function view($id) {
        $data['web_info'] = $this->web_setting_model->web_info();
        $data['form'] = $this->ddt_model->find_one($id);
        $this->load->view('ddt_view', $data);
    }

    public function delete($id) {
        if ($id) {
            $this->ddt_model->delete($id);
        } else {
            error_404();
        }
        redirect('ddt');
    }

    public function add_more($key) {
        $data = array();
        $data['key'] = $key;

        $invoice_form_add = $this->load->view('ddt_form_add', $data);
        echo $invoice_form_add;
        return FALSE;
    }

    public function printview($id) {

        $data['form'] = $this->ddt_model->find_one($id);

 
       $body = $this->load->view('ddt_print', $data, true);

$header = $this->load->view('header','', true);
        $this->print_view('example_001.pdf', $body,$header);
    }

    protected function print_view($name, $body,$header) {


        $this->load->library('Pdf');
        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetHeaderData('', 0, '', '', array(255, 255, 255), array(255, 255, 255));
        $pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        // set margins
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetHeaderMargin(5);
        $pdf->SetFooterMargin(0);
        // set auto page breaks
        $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        // set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
            require_once(dirname(__FILE__) . '/lang/eng.php');
            $pdf->setLanguageArray($l);
        }
        // ---------------------------------------------------------   
        // set default font subsetting mode
        $pdf->setFontSubsetting(FALSE);
        // Set font
        // dejavusans is a UTF-8 Unicode font, if you only need to
        // print standard ASCII chars, you can use core fonts like
        // helvetica or times to reduce file size.
        $pdf->SetFont('dejavusans', '', 14, '', true);

        // Add a page
        	$pdf->AddPage();
 $pdf->SetFillColor(215, 235, 255);
            // set text shadow effect
            $pdf->setTextShadow(array('enabled' => false, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));

           
            $pdf->writeHTMLCell(0, 0, '', 0, $header, 0, 1, 0, true, 'r', FALSE);
       
            // ---------------------------------------------------------   
             $pdf->writeHTMLCell(0, 0, '', '', $body, 0, 1, 0, true, '', true);
            // Close and output PDF document
            // This method has several options, check the source code documentation for more information.
       
        $pdf->Output($name, 'I');
    }

}
