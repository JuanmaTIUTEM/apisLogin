<?php 

	class Mlogin extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function init($database)
		{
			$this->db = $this->load->database($database, TRUE);
		}

		public function log_in(){
			$this->init('default');
			
			$user = $_POST['username'];
			$psw = $_POST['password'];

			$query = "SELECT * FROM usersactive	WHERE userCode ='$user'";
			$query1 = "SELECT * FROM usersactive	WHERE Pass ='$psw'";


			$result = $this->db->query($query);
			$result1 =$this->db->query($query1);
			
			if($result->num_rows() >  0)
			{
				if($result1->num_rows() >  0)
				{
					return $result->result_array();
				}
				else
					{

						return "Contraseña no válida";
					}
			}
			else
			{

				return "No existe el usuario";
			}
		}

		public function userData($id){
			$query = "SELECT * FROM vwallusersdata WHERE user_id =$id";
			$result = $this->db->query($query);
			$res = $result->result_array();
			return $res[0];


		}
	}


 ?>