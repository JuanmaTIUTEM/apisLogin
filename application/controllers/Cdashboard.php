<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cdashboard extends CI_Controller {

	
	public function __construct() {
	        parent::__construct();
	        $this->load->model('Mlogin');
	    }

	    public function index() {
	        $this->load->view('login/vwLogin');
	    }

	    public function prueba(){
	    	$this->load->view('Templates/vwPrueba');
	    }

	    public function login(){
	    	$result = $this->Mlogin->log_in();
	    	//print_r($result);
	    	if($result == "No existe el usuario"){
	    		$info['error'] = $result; 
	    		$this->load->view('login/vwLogin',$info);
	    	}
	    	else{
	    		//print_r($result[0]);
	    		$id = $result[0]['uId'];
	    		$result = $this->Mlogin->userData($id);
	    		//print_r($result);
	    		if($result['userTypeId'] == 1)
	    		{
	    			$user = 
	    			[
	    				'userId' => $result['user_code'],
	    				'userName' => $result['first_name'],
	    				'userLName' => $result['last_name'],
	    				'userDepartament' => $result['departament'],
	    				'userEmail' => $result['email'],
	    				'userPhone' => $result['phone'],
	    				'userType' => $result['userType']
	    			];	
	    		}
	    		else
	    		{
	    			$user = 
	    			[
	    				'userId' => $result['user_code'],
	    				'userName' => $result['first_name'],
	    				'userLName' => $result['last_name'],
	    				'userDepartament' => $result['departament'],
	    				'userEmail' => $result['email'],
	    				'userPhone' => $result['phone'],
	    				'userType' => $result['userType'],
	    				'userGroup' => $result['std_group'],
	    				'userCareer' => $result['career'],
	    				'userDependence' => $result['dependence']

	    			];
	    		}
	    		//echo "Datos del Usuario:";
	    		//print_r($user);
	    		$this->session->set_userdata($user);
	    		$this->load->view('admin/vwPrincipal');
	    		
	    		
	    	}

	    }
	    
}
