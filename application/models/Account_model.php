<?php

	class Account_model extends CI_Model
	{

		private $member = 'tb_member'; 

		public function __construct()
		{
			parent::__construct();

		}

		public function save($output)
		{
			$this->db->insert($this->member, $output);
			return true;
		}


		public function user_session($row)
		{
			$where_arr = array(
								'id'=>$_SESSION['ses_user_id']
								);
	    		$query = $this->db->get_where('tb_member', $where_arr);
	    		$row = $query->row();
	    		return $row;
		}

	}