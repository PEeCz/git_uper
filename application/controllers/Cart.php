<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
	class Cart extends CI_Controller
	{
	    public function __construct()
	    {
	        parent::__construct();
	    }

	    public function index()
	    {
	    	if(!isset($_SESSION['ses_user_level'])){
	    		redirect(base_url('Home/account'));
	    	}
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
	    	$data['cartlist'] = $this->Cart_model->getcartlist();
	    	$data['cartlistbyid'] = $this->Cart_model->get_productid();
	    	$data['getvat'] = $this->Cart_model->get_total_vat();
	    	$data['getbalancetotal'] = $this->Cart_model->get_balance_total();

	    	/*echo "<pre>";
	    	print_r($this->Get_model->getSubMenuByWindows($where1, $where2));
	    	exit;*/

	    	$data['navbar'] = "frontend/srcup/Navbar_v";
	    	$data['header'] = "frontend/srcup/Header_v";
	    	$data['content'] = "frontend/srcup/Showcart_v";
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

	    public function add()
	    {
	    	/*$ar = array(
	    			'id' => '0001',
	    			'qty' => '1',
	    			'price' => '20',
	    			'name' => 'Acrobat Pro'
	    		);
	    	$this->cart->insert($ar);

	    	$data_cart = $this->cart->contents();

	    	echo "<pre>";
	    	print_r($data_cart);
	    	echo "</pre>";*/
	    	$data_product = $this->Cart_model->get_productid($this->input->post('productid'));
	    	$ar = array(
	    			'id' => $data_product['product_id'],
	    			'price' => $data_product['product_vprice'],
	    			'qty' => $this->input->post('qty'),
	    			'name' => $data_product['product_name'],
	    			'img' => $data_product['product_img']
	    		);
	    	$this->cart->insert($ar);

	    	redirect('Cart','refresh');
	    	exit();
	    }

	    public function edit($rowid)
	    {
	    	$ar = array(
	    			'rowid' => $rowid,
	    			'qty' => $this->input->post('qty')
	    		);
	    	$this->cart->update($ar);

	    	redirect('Cart','refresh');
	    	exit();

	    	/*$data_cart = $this->cart->contents($ar);

	    	echo "<pre>";
	    	print_r($data_cart);
	    	echo "</pre>";*/
	    }

	    public function deleteCart($rowid)
	    {
	    	$ar = array(
	    			'rowid' => $rowid,
	    			'qty' => 0
	    		);
	    	$this->cart->update($ar);
	    	redirect('Cart','refresh');
	    	exit();
	    }
	}