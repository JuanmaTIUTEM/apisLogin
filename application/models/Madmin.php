<?php 

	class Madmin extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function init($database)
		{
			$this->db = $this->load->database($database, TRUE);
		}

		public function allUsersData(){
			$this->init('admin')
		}
}