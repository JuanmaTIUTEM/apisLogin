<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadmin extends CI_Controller {

	
	public function __construct() {
	        parent::__construct();
	        $this->load->model('Madmin');
	    }

	    public function index() {
	        $info['users'] = $this->Madmin->allUsersData();
	       	$this->load->view('admin/vwPrincipal',$info);
	    }


}