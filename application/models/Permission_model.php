<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class Permission_model extends CI_Model
	{
	    public function __construct()
	    {
	        parent::__construct();
	    }

	    public function chkPermission($id)
	    {
	    	$result = false;

	    	$q = $this->db->select("*")
	    					->join('tb_group g', 'g.id = m.group_id', 'inner')
	    					->where('m.id_fb', $id)
	    					->get('tb_memberfb m');

	    	if($q){
	    		$result = $q->row();
	    	}

	    	return $result;
		}
	}