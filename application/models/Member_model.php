<?php
defined('BASEPATH') OR exit('No direct script access allowed');



	class Member_model extends CI_Model
	{
	    public function __construct()
	    {
	        parent::__construct();
	    }

	    public function login($data)
	    {
	    	$result = false;
	    	$hasQuery = $this->db->insert('tb_memberfb',$data);
	    	
	    	if($hasQuery){
	    		$result = true;
	    	}

	    	return $result;
	    }

	    public function getId($id)
	    {
	    	$result = false;
	    	$this->db->where('id_fb', $id);
	    	$hasQuery = $this->db->get('tb_memberfb');

	    	if($hasQuery->num_rows() > 0){
	    		$result = true;
	    	}

	    	return $result;
	    }

	    public function update($id)
	    {
	    	$result = false;

	    	$data = array(
	    				'updated_at' => date('Y-m-d H:i:s')
	    			);

	    	$this->db->where('id_fb', $id);
	    	$hasQuery = $this->db->update('tb_memberfb',$data);

	    	if($hasQuery){
	    		$result = true;
	    	}

	    	return $result;
	    }
	}