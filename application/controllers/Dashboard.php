<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	session_start();
	class Dashboard extends CI_Controller
	{
	    public function __construct()
	    {
	        parent::__construct();

	        if($this->session->userdata('id_fb') == null){
	    		redirect(base_url());
	    		exit();
	    	}
	    }

	    public function index()
	    {
	    	echo "index";
	    }

	    public function get()
	    {
	    	echo "get";
	    }
	}