<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_test extends CI_Controller {

	
	public function __construct() {
	        parent::__construct();
	    }

	    public function index() {
	        $this->load->view('login/vwLogin');
	    }

	    public function consume_api() {
	        // Obtener los datos del formulario
	        $username = $this->input->post('username');
	        $password = $this->input->post('password');

	        // URL de la API
	        $api_url = "http://localhost:5000/login";

	        // Datos que deseas enviar a la API
	        $data = array(
	            'username' => $username,
	            'password' => $password
	        );

	        // Inicializar cURL
	        $ch = curl_init($api_url);

	        // Configurar opciones de cURL
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

	        // Ejecutar la solicitud
	        $response = curl_exec($ch);

	        // Cerrar la sesión cURL
	        curl_close($ch);

	        // Decodificar la respuesta JSON
	        $result = json_decode($response, true);

	        // Mostrar la respuesta (puedes manejarla como desees)
	        var_dump($result);
	    }
}
