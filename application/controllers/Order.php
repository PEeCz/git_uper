<?php

defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
	class Order extends CI_Controller
	{
		public function __construct()
	    {
	        parent::__construct();
	        $this->load->library('form_validation');

	        $this->dateTimeNow = date('Y-m-d H:i:s');
	        $this->dateNow = date('Y-m-d');
	        $this->timeNow = date('H:i:s');
	    }

	    public function myOrder()
	    {
	    	if(!isset($_SESSION['ses_user_id'])){
	    		redirect(base_url('Home/account'));
	    	}else{

	    		$data['rowuser'] = $this->Account_model->user_session();
		    	$data['category'] = $this->db->select('*')->from('tb_category')->get();
		    	$data['submicrosoft1'] = $this->Get_model->getSubMenuByMicrosofttitle1($where1, $where2);
		    	$data['submicrosoft2'] = $this->Get_model->getSubMenuByMicrosofttitle2($where1, $where2);
		    	$data['submicrosoft3'] = $this->Get_model->getSubMenuByMicrosofttitle3($where1, $where2);
		    	$data['submicrosoft4'] = $this->Get_model->getSubMenuByMicrosofttitle4($where1, $where2);
		    	$data['submicrosoft5'] = $this->Get_model->getSubMenuByMicrosofttitle5($where1, $where2);
		    	$data['submicrosoft6'] = $this->Get_model->getSubMenuByMicrosofttitle6($where1, $where2);
		    	$data['submicrosoft7'] = $this->Get_model->getSubMenuByMicrosofttitle7($where1, $where2);
		    	$data['submicrosoft8'] = $this->Get_model->getSubMenuByMicrosofttitle8($where1, $where2);

				$data['allOrder'] = $this->SelectorderFE_model->selectAllOrder();


		    	$data['menu1'] = $this->db->where(array(
	    								'id'=>1,
	    								'rank'=>1,
	    							))->get('tb_adminmenu');
		    	$data['menu2'] = $this->db->where(array(
		    								'id'=>2,
		    								'rank'=>2,
		    							))->get('tb_adminmenu');
		    	$data['menu3'] = $this->db->where(array(
		    								'id'=>3,
		    								'rank'=>3,
		    							))->get('tb_adminmenu');
		    	$data['menu4'] = $this->db->where(array(
		    								'id'=>4,
		    								'rank'=>4,
		    							))->get('tb_adminmenu');
		    	$data['menu5'] = $this->db->where(array(
		    								'id'=>5,
		    								'rank'=>5,
		    							))->get('tb_adminmenu');
		    	$data['menu6'] = $this->db->where(array(
		    								'id'=>6,
		    								'rank'=>6,
		    							))->get('tb_adminmenu');

		    	$data['navbar'] = "frontend/srcup/Navbar_v";
		    	$data['header'] = "frontend/srcup/Header_v";
		    	$data['content'] = "frontend/srcup/Order/order_table";
		    	$data['footer'] = "frontend/srcup/Footer_v";
		    	$data['jscript'] = "frontend/srcup/Jscript_v";

		    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
		    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
		    	$data['author'] = "Adilak";
		    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

		    	$this->load->view('frontend/template/Main_v', $data);
		    }
	    }

	    public function viewOrderDetails($order_id)
	    {
	    	if(!isset($_SESSION['ses_user_id'])){
	    		redirect(base_url('Home/account'));
	    	}else{

	    		$data['rowuser'] = $this->Account_model->user_session();
		    	$data['category'] = $this->db->select('*')->from('tb_category')->get();
		    	$data['submicrosoft1'] = $this->Get_model->getSubMenuByMicrosofttitle1($where1, $where2);
		    	$data['submicrosoft2'] = $this->Get_model->getSubMenuByMicrosofttitle2($where1, $where2);
		    	$data['submicrosoft3'] = $this->Get_model->getSubMenuByMicrosofttitle3($where1, $where2);
		    	$data['submicrosoft4'] = $this->Get_model->getSubMenuByMicrosofttitle4($where1, $where2);
		    	$data['submicrosoft5'] = $this->Get_model->getSubMenuByMicrosofttitle5($where1, $where2);
		    	$data['submicrosoft6'] = $this->Get_model->getSubMenuByMicrosofttitle6($where1, $where2);
		    	$data['submicrosoft7'] = $this->Get_model->getSubMenuByMicrosofttitle7($where1, $where2);
		    	$data['submicrosoft8'] = $this->Get_model->getSubMenuByMicrosofttitle8($where1, $where2);

		    	$data['order_info'] = $this->SelectorderFE_model->orderInfoById($order_id);
		    	$data['shipping_info'] = $this->SelectorderFE_model->shippingInfoById($order_id);
		    	$data['payment_info'] = $this->SelectorderFE_model->paymentInfoById($order_id);
		    	$data['product_info'] = $this->SelectorderFE_model->productInfoById($order_id);


		    	$data['menu1'] = $this->db->where(array(
	    								'id'=>1,
	    								'rank'=>1,
	    							))->get('tb_adminmenu');
		    	$data['menu2'] = $this->db->where(array(
		    								'id'=>2,
		    								'rank'=>2,
		    							))->get('tb_adminmenu');
		    	$data['menu3'] = $this->db->where(array(
		    								'id'=>3,
		    								'rank'=>3,
		    							))->get('tb_adminmenu');
		    	$data['menu4'] = $this->db->where(array(
		    								'id'=>4,
		    								'rank'=>4,
		    							))->get('tb_adminmenu');
		    	$data['menu5'] = $this->db->where(array(
		    								'id'=>5,
		    								'rank'=>5,
		    							))->get('tb_adminmenu');
		    	$data['menu6'] = $this->db->where(array(
		    								'id'=>6,
		    								'rank'=>6,
		    							))->get('tb_adminmenu');

		    	$data['navbar'] = "frontend/srcup/Navbar_v";
		    	$data['header'] = "frontend/srcup/Header_v";
		    	$data['content'] = "frontend/srcup/Order/order_details_table";
		    	$data['footer'] = "frontend/srcup/Footer_v";
		    	$data['jscript'] = "frontend/srcup/Jscript_v";

		    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
		    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
		    	$data['author'] = "Adilak";
		    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

		    	$this->load->view('frontend/template/Main_v', $data);
		    }
	    }
	}
?>