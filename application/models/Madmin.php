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
			$this->init('admin');
			$query = "SELECT * FROM vwallusersdata;";
			$result = $this->db->query($query);

			if($result->num_rows() >0){
				$res = $result->result_array();
				return $res;
			}
			else{
				return false;
			}
		}
}