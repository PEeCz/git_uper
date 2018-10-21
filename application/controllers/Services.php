<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	session_start();
	class Services extends CI_Controller
	{
	    public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Member_model', 'Member');
	    }

	    public function loginfb()
	    {
	    	$_POST = json_decode(file_get_contents('php://input'),TRUE);

	    	$resp['status'] = 'error';
	    	$data = array(
	    				'id_fb'=>$this->input->post('id',TRUE),
	    				'name_fb'=>$this->input->post('name',TRUE),
	    				'created_at'=>date('Y-m-d H:i:s')
	    			);

	    	$isMember = $this->Member->getId($this->input->post('id', TRUE));
	    	if($isMember == true)
	    	{

	    		$hasUpdated = $this->Member->update($this->input->post('id', TRUE));
	    		if($hasUpdated == true)
	    		{
		    		$data = array(
		    					'id_fb' => $this->input->post('id',TRUE),
		    					'name_fb' => $this->input->post('name',TRUE)
		    				);
		    		$this->session->set_userdata($data);

		    		$resp['location'] = 'Home/';
		    		$resp['status'] = 'success';
	    		}
	    	}else{

		    	$hashLogin = $this->Member->login($data);

		    	if($hashLogin == true)
		    	{
		    		$data = array(
	    					'id_fb' => $this->input->post('id',TRUE),
	    					'name_fb' => $this->input->post('name',TRUE)
	    				);
	    			$this->session->set_userdata($data);

	    			$resp['location'] = 'dashboard/';
		    		$resp['status'] = 'success';
		    	}
		    }

	    	$result = json_encode($resp);
	    	echo $result;
	    }
	}