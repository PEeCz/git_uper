<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
	class Checkout extends CI_Controller
	{
	    public function __construct()
	    {
	        parent::__construct();
	    }

	    public function shippingDetails()
	    {
	    	if(!isset($_SESSION['ses_user_level'])){
	    		redirect(base_url('Home/account'));
	    	}else{

			    	$data['rowuser'] = $this->Account_model->user_session();
			    	$data['category'] = $this->db->select('*')->from('tb_category')->order_by('cat_id','asc')->get();
			    	$data['submicrosoft1'] = $this->Get_model->getSubMenuByMicrosofttitle1($where1, $where2);
			    	$data['submicrosoft2'] = $this->Get_model->getSubMenuByMicrosofttitle2($where1, $where2);
			    	$data['submicrosoft3'] = $this->Get_model->getSubMenuByMicrosofttitle3($where1, $where2);
			    	$data['submicrosoft4'] = $this->Get_model->getSubMenuByMicrosofttitle4($where1, $where2);
			    	$data['submicrosoft5'] = $this->Get_model->getSubMenuByMicrosofttitle5($where1, $where2);
			    	$data['submicrosoft6'] = $this->Get_model->getSubMenuByMicrosofttitle6($where1, $where2);
			    	$data['submicrosoft7'] = $this->Get_model->getSubMenuByMicrosofttitle7($where1, $where2);
			    	$data['submicrosoft8'] = $this->Get_model->getSubMenuByMicrosofttitle8($where1, $where2);

			    	/*echo "<pre>";
			    	print_r($this->Get_model->getSubMenuByWindows($where1, $where2));
			    	exit;*/

			    	$data['navbar'] = "frontend/srcup/Navbar_v";
			    	$data['header'] = "frontend/srcup/Header_v";
			    	$data['content'] = "frontend/srcup/Cart/shipping_address";
			    	$data['footer'] = "frontend/srcup/Footer_v";
			    	$data['jscript'] = "frontend/srcup/Jscript_v";

			    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
			    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
			    	$data['author'] = "Adilak";
			    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

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


			    	$this->load->view("frontend/template/Main_v",$data);

	    	}
	    }

	    public function saveShippingDetails()
	    {

	        $this->load->library('form_validation');

	    	/*$input = $this->input->post();
	    	if(!empty($input)){
	    		$this->form_validation->set_rules('firstname','<b>กรุณาใส่ชื่อจริง</b>','trim|required');
			    $this->form_validation->set_rules('lastname','<b>กรุณาใส่นามสกุล</b>','trim|required');
			    $this->form_validation->set_rules('mobilephone','<b>กรุณาใส่เบอร์ติดต่อโทรศัพท์มือถือให้ถูกต้อง (Ex. 091xxxxxxx)</b>','trim|required|min_length[9]');
			    $this->form_validation->set_rules('address1','<b>กรุณาใส่ที่อยู่</b>','trim|required|min_length[15]');

			    if($this->form_validation->run() != FALSE){*/
			    	$data = array();
			    	$data['shipping_firstname'] = $this->input->post('firstname');
			    	$data['shipping_lastname'] = $this->input->post('lastname');
			    	$data['shipping_companyname'] = $this->input->post('companyname');
			    	$data['shipping_telephone'] = $this->input->post('telephone');
			    	$data['shipping_mobilephone'] = $this->input->post('mobilephone');
			    	$data['shipping_fax'] = $this->input->post('fax');
			    	$data['shipping_address1'] = $this->input->post('address1');
			    	$data['shipping_address2'] = $this->input->post('address2');
			    	$data['shipping_zipcode'] = $this->input->post('zipcode');

			    	$shipping_id = $this->Checkout_model->saveShippingDetails($data);
			    	$sdata = array();
			    	$sdata['shipping_id'] = $shipping_id;
			    	$this->session->set_userdata($sdata);

			    	redirect('Checkout/payment');

			    /*}
		    }*/
	    }

	    public function payment()
	    {
	    	if(!isset($_SESSION['ses_user_level'])){
	    		redirect(base_url('Home/account'));
	    	}else{

			    	$data['rowuser'] = $this->Account_model->user_session();
			    	$data['category'] = $this->db->select('*')->from('tb_category')->order_by('cat_id','asc')->get();
			    	$data['submicrosoft1'] = $this->Get_model->getSubMenuByMicrosofttitle1($where1, $where2);
			    	$data['submicrosoft2'] = $this->Get_model->getSubMenuByMicrosofttitle2($where1, $where2);
			    	$data['submicrosoft3'] = $this->Get_model->getSubMenuByMicrosofttitle3($where1, $where2);
			    	$data['submicrosoft4'] = $this->Get_model->getSubMenuByMicrosofttitle4($where1, $where2);
			    	$data['submicrosoft5'] = $this->Get_model->getSubMenuByMicrosofttitle5($where1, $where2);
			    	$data['submicrosoft6'] = $this->Get_model->getSubMenuByMicrosofttitle6($where1, $where2);
			    	$data['submicrosoft7'] = $this->Get_model->getSubMenuByMicrosofttitle7($where1, $where2);
			    	$data['submicrosoft8'] = $this->Get_model->getSubMenuByMicrosofttitle8($where1, $where2);

			    	/*echo "<pre>";
			    	print_r($this->Get_model->getSubMenuByWindows($where1, $where2));
			    	exit;*/

			    	$data['navbar'] = "frontend/srcup/Navbar_v";
			    	$data['header'] = "frontend/srcup/Header_v";
			    	$data['content'] = "frontend/srcup/Cart/Payment_v";
			    	$data['footer'] = "frontend/srcup/Footer_v";
			    	$data['jscript'] = "frontend/srcup/Jscript_v";

			    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
			    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
			    	$data['author'] = "Adilak";
			    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

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



			    	$this->load->view("frontend/template/Main_v",$data);
	    	}
	    }

	    public function savePaymentInfo()
	    {
	    	$data = array();
	    	$data['payment_method'] = $this->input->post('payment_method');

	    	$payment_id = $this->Checkout_model->savePaymentInfo($data);

	    	$sdata = array();
	    	$sdata['payment_id'] = $payment_id;
	    	$this->session->set_userdata($sdata);

	    	$sesData = array();
	    	$sesData['member_id'] = $this->session->userdata('ses_user_id');
	    	$sesData['member_name']= $this->session->userdata('ses_user_firstname');
	    	$sesData['member_email'] = $this->session->userdata('ses_user_email');
	    	$sesData['shipping_id'] = $this->session->userdata('shipping_id');
	    	$sesData['payment_id'] = $this->session->userdata('payment_id');
	    	$sesData['order_total'] = $this->session->userdata('total');
	    	/*echo $customer_id.'<BR>'.$customer_name.'<BR>'.$customer_email.'<BR>'.$shipping_id.'<BR>'.$payment_id.'<BR>'.$order_total;
	    	exit();*/
	    	$order_id = $this->Checkout_model->saveOrderInfo($sesData);

	    	$contents = $this->cart->contents();

	    	$this->session->unset_userdata('shipping_id');
	    	$this->session->unset_userdata('payment_id');

	    	$oddata = array();

	    	foreach($contents as $v_contents)
	    	{
	    		$oddata['order_id'] = $order_id;
	    		$oddata['product_id'] = $v_contents['id'];
	    		$oddata['product_name'] = $v_contents['name'];
	    		$oddata['product_price'] = $v_contents['price'];
	    		$oddata['product_sales_quantity'] = $v_contents['qty'];

	    		$order_details_id = $this->Checkout_model->saveOrderDetailsInfo($oddata);
	    	}

	    	$this->cart->destroy();

	    	redirect('Checkout/finish');
	    }

	    public function finish($order_id)
	    {
	    	if(!isset($_SESSION['ses_user_level'])){
	    		redirect(base_url('Home/account'));
	    	}else{

			    	$data['rowuser'] = $this->Account_model->user_session();
			    	$data['category'] = $this->db->select('*')->from('tb_category')->order_by('cat_id','asc')->get();
			    	$data['submicrosoft1'] = $this->Get_model->getSubMenuByMicrosofttitle1($where1, $where2);
			    	$data['submicrosoft2'] = $this->Get_model->getSubMenuByMicrosofttitle2($where1, $where2);
			    	$data['submicrosoft3'] = $this->Get_model->getSubMenuByMicrosofttitle3($where1, $where2);
			    	$data['submicrosoft4'] = $this->Get_model->getSubMenuByMicrosofttitle4($where1, $where2);
			    	$data['submicrosoft5'] = $this->Get_model->getSubMenuByMicrosofttitle5($where1, $where2);
			    	$data['submicrosoft6'] = $this->Get_model->getSubMenuByMicrosofttitle6($where1, $where2);
			    	$data['submicrosoft7'] = $this->Get_model->getSubMenuByMicrosofttitle7($where1, $where2);
			    	$data['submicrosoft8'] = $this->Get_model->getSubMenuByMicrosofttitle8($where1, $where2);
			    	/*$contents = $this->cart->contents();
			    	echo "<pre>";
			    	print_r($contents);
			    	exit();*/

			    	/*echo "<pre>";
			    	print_r($this->Get_model->getSubMenuByWindows($where1, $where2));
			    	exit;*/

			    	$data['navbar'] = "frontend/srcup/Navbar_v";
			    	$data['header'] = "frontend/srcup/Header_v";
			    	$data['content'] = "frontend/srcup/Cart/Finish_v";
			    	$data['footer'] = "frontend/srcup/Footer_v";
			    	$data['jscript'] = "frontend/srcup/Jscript_v";

			    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
			    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
			    	$data['author'] = "Adilak";
			    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

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



			    	$this->load->view("frontend/template/Main_v",$data);
	    	}
	    }

	}

?>