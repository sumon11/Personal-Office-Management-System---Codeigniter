<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BillController extends My_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
        $this->load->model('designation');
        $this->load->model('department');

    }
     

	public function index(){
		$this->data = array();
		$this->page = 'bill/index';
		$this->data['users'] = $this->user->all_users();
		$this->layout();
	}

	public function create(){
		$this->data = array();
		$this->page = 'bill/create';
		$this->layout();
	}
}
