<?php

defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
	class Home extends CI_Controller
	{
	    public function __construct()
	    {
	        parent::__construct();
	        $this->load->library('form_validation');

	        $this->dateTimeNow = date('Y-m-d H:i:s');
	        $this->dateNow = date('Y-m-d');
	        $this->timeNow = date('H:i:s');

	    }

	    public function index()
	    {
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

	    	/////// GET Sub Category Adobe ///////
	    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
	    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
	    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
	    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();

	    	/////// GET Sub Category Office ///////
	    	$data['getofficesub1'] = $this->Get_model->getProductBySubCategoryOffice1();
	    	$data['getofficesub2'] = $this->Get_model->getProductBySubCategoryOffice2();


	    	/////// GET Sub Category Microsoft ///////
	    	$data['getmicrosoft_ondesktop'] = $this->Get_model->getProductBySubCategoryMicrosoft1();
	    	$data['getmicrosoft_onserver'] = $this->Get_model->getProductBySubCategoryMicrosoft2();
	    	$data['getmicrosoft_remotedesktop'] = $this->Get_model->getProductBySubCategoryMicrosoft3();
	    	$data['getmicrosoft_oncloud'] = $this->Get_model->getProductBySubCategoryMicrosoft4();
	    	$data['getmicrosoft_sqlserver'] = $this->Get_model->getProductBySubCategoryMicrosoft5();
	    	$data['getmicrosoft_exchangeserver'] = $this->Get_model->getProductBySubCategoryMicrosoft6();
	    	$data['getmicrosoft_sqlcal'] = $this->Get_model->getProductBySubCategoryMicrosoft7();
	    	$data['getmicrosoft_winservercal'] = $this->Get_model->getProductBySubCategoryMicrosoft8();
	    	$data['getmicrosoft_exchangestandardcal'] = $this->Get_model->getProductBySubCategoryMicrosoft9();
	    	$data['getmicrosoft_exchangeenterprisecal'] = $this->Get_model->getProductBySubCategoryMicrosoft10();

	    	$data['slidewindows'] = $this->Get_model->getSlidePost1($where);
	    	$data['slidemicrosoft'] = $this->Get_model->getSlidePost2($where);
	    	$data['slideadobe'] = $this->Get_model->getSlidePost3($where);
	    	$data['slideoffice'] = $this->Get_model->getSlidePost4($where);
	    	$data['slideautocad'] = $this->Get_model->getSlidePost5($where);

	    	$data['promotionproduct1'] = $this->Get_model->getProductPromotion1($where);
	    	$data['promotionproduct2'] = $this->Get_model->getProductPromotion2($where);
	    	$data['promotionproduct3'] = $this->Get_model->getProductPromotion3($where);
	    	$data['promotionproduct4'] = $this->Get_model->getProductPromotion4($where);
	    	$data['promotionproduct5'] = $this->Get_model->getProductPromotion5($where);

	    	$data['getallproduct'] = $this->Get_model->getAllProduct();
	    	$data['getfirstproduct'] = $this->Get_model->getFirstProductThreeRecords();
	    	$data['getsecondproduct'] = $this->Get_model->getSecondProductThreeRecords();

	    	$data['navbar'] = "frontend/srcup/Navbar_v";
	    	$data['header'] = "frontend/srcup/Header_v";
	    	$data['content'] = "frontend/srcup/Content_v";
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

	    	$this->load->view('frontend/template/Main_v', $data);
	    }

	    public function quotation()
	    {
	    	$data['rowuser'] = $this->Account_model->user_session();
	    	$data['category'] = $this->db->select('*')->from('tb_category')->get();
	    	$data['submicrosoft1'] = $this->Get_model->getSubMenuByMicrosofttitle1($where1, $where2);
	    	$data['submicrosoft2'] = $this->Get_model->getSubMenuByMicrosofttitle2($where1, $where2);
	    	$data['submicrosoft3'] = $this->Get_model->getSubMenuByMicrosofttitle3($where1, $where2);
	    	$data['submicrosoft4'] = $this->Get_model->getSubMenuByMicrosofttitle4($where1, $where2);
	    	$data['submicrosoft5'] = $this->Get_model->getSubMenuByMicrosofttitle5($where1, $where2);
	    	$data['submicrosoft6'] = $this->Get_model->getSubMenuByMicrosofttitle6($where1, $where2);
	    	$data['submicrosoft7'] = $this->Get_model->getSubMenuByMicrosofttitle7($where1, $where2);
	    	$data['submicrosoft8'] = $this->Get_model->getSubMenuByMicrosofttitle8($where1, $where2);;

	    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
	    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
	    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
	    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();

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
	    	$data['content'] = "frontend/srcup/Quotation_v";
	    	$data['footer'] = "frontend/srcup/Footer_v";
	    	$data['jscript'] = "frontend/srcup/Jscript_v";

	    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
	    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
	    	$data['author'] = "Adilak";
	    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

	    	$this->load->view('frontend/template/Main_v',$data);
	    }

	    public function contact()
	    {
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

	    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
	    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
	    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
	    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();

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
	    	$data['content'] = "frontend/srcup/Contact_v";
	    	$data['footer'] = "frontend/srcup/Footer_v";
	    	$data['jscript'] = "frontend/srcup/Jscript_v";

	    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
	    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
	    	$data['author'] = "Adilak";
	    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

	    	$this->load->view('frontend/template/Main_v',$data);
	    }

	    public function account()
	    {
	    	if(isset($_SESSION['ses_user_id'])){
	    		redirect(base_url('Home'));
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

		    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
		    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
		    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
		    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();

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
		    	$data['content'] = "frontend/srcup/Account_v";
		    	$data['footer'] = "frontend/srcup/Footer_v";
		    	$data['jscript'] = "frontend/srcup/Jscript_v";

		    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
		    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
		    	$data['author'] = "Adilak";
		    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

		    	$this->load->view('frontend/template/Main_v', $data);
	    	}
	    }

	    public function register()
	    {

	    	if(isset($_SESSION['ses_user_id'])){
	    		redirect(base_url('Home'));
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

		    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
		    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
		    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
		    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();

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
		    	$data['content'] = "frontend/srcup/Register_v";
		    	$data['footer'] = "frontend/srcup/Footer_v";
		    	$data['jscript'] = "frontend/srcup/Jscript_v";

		    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
		    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
		    	$data['author'] = "Adilak";
		    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

		    	$this->load->view('frontend/template/Main_v', $data);
		    }
	    }

	    public function createacc()
	    {
	    	if(isset($_SESSION['ses_user_id'])){
	    		redirect(base_url('Home'));
	    	}else{

	    		$this->form_validation->set_rules(
	    			'email','<b>โปรดกรอกให้ถูกต้อง ตัวอย่าง xxx@xxx.com</b>','required|valid_email'
	    		);
			    $this->form_validation->set_rules(
			    	'password','ใส่รหัสผ่านห้ามมีช่องว่าง','trim|required|min_length[6]'
			    );
			    $this->form_validation->set_rules(
			    	'repeatpassword','ใส่รหัสผ่านซ้ำให้ตรงกัน','trim|required|matches[password]|min_length[6]'
			    );

		    	if($this->form_validation->run() == FALSE){

		    	$data['category'] = $this->db->select('*')->from('tb_category')->get();
		    	$data['submicrosoft1'] = $this->Get_model->getSubMenuByMicrosofttitle1($where1, $where2);
		    	$data['submicrosoft2'] = $this->Get_model->getSubMenuByMicrosofttitle2($where1, $where2);
		    	$data['submicrosoft3'] = $this->Get_model->getSubMenuByMicrosofttitle3($where1, $where2);
		    	$data['submicrosoft4'] = $this->Get_model->getSubMenuByMicrosofttitle4($where1, $where2);
		    	$data['submicrosoft5'] = $this->Get_model->getSubMenuByMicrosofttitle5($where1, $where2);
		    	$data['submicrosoft6'] = $this->Get_model->getSubMenuByMicrosofttitle6($where1, $where2);
		    	$data['submicrosoft7'] = $this->Get_model->getSubMenuByMicrosofttitle7($where1, $where2);
		    	$data['submicrosoft8'] = $this->Get_model->getSubMenuByMicrosofttitle8($where1, $where2);

		    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
		    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
		    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
		    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();

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
			    	$data['content'] = "frontend/srcup/Register_v";
			    	$data['footer'] = "frontend/srcup/Footer_v";
			    	$data['jscript'] = "frontend/srcup/Jscript_v";

			    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
			    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
			    	$data['author'] = "Adilak";
			    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

		    		$this->load->view('frontend/template/Main_v', $data);
		    	}else{

		    		$password = $this->input->post('password');

		    		$salt = '$2a$04$123456789123456789123$';
		    		$hash_password = crypt($password, $salt);

		    		$output = array(
		    					'email' => $this->security->xss_clean(
		    									$this->input->post('email')
		    								),
		    					'password' => $hash_password,
		    					'updated_at' => $this->dateTimeNow,
		    					'created_at' => $this->dateTimeNow,
		    				  );
		    		//var_dump($output);
		    		//exit;
		    		$save = $this->Account_model->save($output);
		    		redirect(base_url('Home/account'));
		    	}
		    }
		
		    	
	    }

	    public function login()
	    {
	    	

	    	$this->form_validation->set_rules(
    			'email','<b>โปรดกรอกให้ถูกต้อง ตัวอย่าง xxx@xxx.com</b>','required|valid_email'
    		);
		    $this->form_validation->set_rules(
		    	'password','ใส่รหัสผ่านห้ามมีช่องว่าง','trim|required|min_length[6]'
		    );

		    if($this->form_validation->run() == FALSE) {

		    	$data['category'] = $this->db->select('*')->from('tb_category')->get();
		    	$data['submicrosoft1'] = $this->Get_model->getSubMenuByMicrosofttitle1($where1, $where2);
		    	$data['submicrosoft2'] = $this->Get_model->getSubMenuByMicrosofttitle2($where1, $where2);
		    	$data['submicrosoft3'] = $this->Get_model->getSubMenuByMicrosofttitle3($where1, $where2);
		    	$data['submicrosoft4'] = $this->Get_model->getSubMenuByMicrosofttitle4($where1, $where2);
		    	$data['submicrosoft5'] = $this->Get_model->getSubMenuByMicrosofttitle5($where1, $where2);
		    	$data['submicrosoft6'] = $this->Get_model->getSubMenuByMicrosofttitle6($where1, $where2);
		    	$data['submicrosoft7'] = $this->Get_model->getSubMenuByMicrosofttitle7($where1, $where2);
		    	$data['submicrosoft8'] = $this->Get_model->getSubMenuByMicrosofttitle8($where1, $where2);

		    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
		    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
		    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
		    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();

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
		    	$data['content'] = "frontend/srcup/Account_v";
		    	$data['footer'] = "frontend/srcup/Footer_v";
		    	$data['jscript'] = "frontend/srcup/Jscript_v";

		    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
		    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
		    	$data['author'] = "Adilak";
		    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

	    		$this->load->view('frontend/template/Main_v', $data);
	    	}else{

	    		$password = $this->input->post('password');

		    	$salt = '$2a$04$123456789123456789123$';
		    	$hashpassword = crypt($password, $salt);

	    		//print_r($hashpassword);
	    		//exit;
	    		
	    		$where_arr = array(
	    						'email'=>$this->input->post('email'),
	    						'password'=>$hashpassword
	    					);

		    	$query = $this->db->get_where('tb_member',$where_arr);
		    	$row = $query->row_array();

		    	//print_r($row);
		    	//exit;
		    		if(isset($row)){
		    			$userdata = array(
		    							'ses_user_id' => $row['id'],
		    							'ses_user_email' => $row['email'],
		    							'ses_user_level' => $row['level'],
		    							'ses_user_firstname' => $row['firstname']
		    						);
		    			/*echo "<pre>";
		    			print_r($userdata);
		    			exit;*/

		    			$this->session->set_userdata($userdata);
		    		}
		    			redirect(base_url('Home/profile'));
		    }

		    redirect(base_url('Home/account'));

	    }

	    public function logout()
	    {
	    	$array_user = array('ses_user_id','ses_user_email','ses_user_level','ses_user_firstname');
	    	$this->session->unset_userdata($array_user);
	    	$this->session->sess_destroy();
	    	redirect('Home/account','refresh');
	    	exit();
	    }

	    public function profile()
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

		    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
		    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
		    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
		    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();


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
		    	$data['content'] = "frontend/srcup/Profile_v";
		    	$data['footer'] = "frontend/srcup/Footer_v";
		    	$data['jscript'] = "frontend/srcup/Jscript_v";

		    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
		    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
		    	$data['author'] = "Adilak";
		    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

		    	$this->load->view('frontend/template/Main_v', $data);
		    }
	    }

	    public function editSecure()
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

		    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
		    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
		    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
		    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();


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
		    	$data['content'] = "frontend/srcup/userinfo/Edit-secure_v";
		    	$data['footer'] = "frontend/srcup/Footer_v";
		    	$data['jscript'] = "frontend/srcup/Jscript_v";

		    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
		    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
		    	$data['author'] = "Adilak";
		    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

		    	$this->load->view('frontend/template/Main_v', $data);
		    }
	    }

	    public function updateSecure()
	    {
	    	if(!isset($_SESSION['ses_user_id'])){
	    		redirect(base_url('Home'));
	    	}else{

			    $this->form_validation->set_rules(
			    	'old_password','ใส่รหัสผ่านเดิมให้ถูกต้อง และห้ามมีช่องว่าง','trim|required|min_length[6]'
			    );
			    $this->form_validation->set_rules(
			    	'new_password','ใส่รหัสผ่านห้ามมีช่องว่าง','trim|required|min_length[6]'
			    );
			    $this->form_validation->set_rules(
			    	'repeat_new_password','ใส่รหัสผ่านซ้ำให้ตรงกัน','trim|required|matches[new_password]|min_length[6]'
			    );

			    if($this->form_validation->run() == FALSE){

		    	$data['category'] = $this->db->select('*')->from('tb_category')->get();
		    	$data['submicrosoft1'] = $this->Get_model->getSubMenuByMicrosofttitle1($where1, $where2);
		    	$data['submicrosoft2'] = $this->Get_model->getSubMenuByMicrosofttitle2($where1, $where2);
		    	$data['submicrosoft3'] = $this->Get_model->getSubMenuByMicrosofttitle3($where1, $where2);
		    	$data['submicrosoft4'] = $this->Get_model->getSubMenuByMicrosofttitle4($where1, $where2);
		    	$data['submicrosoft5'] = $this->Get_model->getSubMenuByMicrosofttitle5($where1, $where2);
		    	$data['submicrosoft6'] = $this->Get_model->getSubMenuByMicrosofttitle6($where1, $where2);
		    	$data['submicrosoft7'] = $this->Get_model->getSubMenuByMicrosofttitle7($where1, $where2);
		    	$data['submicrosoft8'] = $this->Get_model->getSubMenuByMicrosofttitle8($where1, $where2);

		    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
		    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
		    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
		    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();

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
			    	$data['content'] = "frontend/srcup/userinfo/Edit-secure_v";
			    	$data['footer'] = "frontend/srcup/Footer_v";
			    	$data['jscript'] = "frontend/srcup/Jscript_v";

			    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
			    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
			    	$data['author'] = "Adilak";
			    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

		    		$this->load->view('frontend/template/Main_v', $data);
		    	}else{
		    		if(isset($_POST) && $_POST!=''){
			    			$e_password = $this->input->post('old_password');
			    			$e_password_new = $this->input->post('new_password');


				    		$salt = '$2a$04$123456789123456789123$';
				    		$hash_password = crypt($e_password, $salt);
				    		$hash_password_new = crypt($e_password_new, $salt);

		    				/*echo $hash_password.'<BR/>';
		    				echo $hash_password_new;
		    				exit;*/

				    		$output = array(
				    					'email' => $this->security->xss_clean(
				    									$this->input->post('email')
				    								),
				    					'password' => $hash_password_new,
				    					'updated_at' => $this->dateTimeNow
				    				  );
				    		//var_dump($output);
				    		//exit;
				    		//
				    		$q = $this->db
				    				  ->update('tb_member', $output, array(
					    				  	'id'=>$this->input->post('id'),
					    				  	'password'=>$hash_password)
				    					);
				    		if($q){
				    			if($this->db->affected_rows()>0){
				    				redirect('Home/profile');
				    			}else{
						    		echo $q;
						    		exit;
				    			}
				    		}
					}
		    	}

		    }
		
		    	
	    }


	    public function editInformation()
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

		    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
		    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
		    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
		    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();


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
		    	$data['content'] = "frontend/srcup/userinfo/Edit-information_v";
		    	$data['footer'] = "frontend/srcup/Footer_v";
		    	$data['jscript'] = "frontend/srcup/Jscript_v";

		    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
		    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
		    	$data['author'] = "Adilak";
		    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

		    	$this->load->view('frontend/template/Main_v', $data);
		    }
	    }

	    public function updateInformation()
	    {
	    	
	    }

		public function category()
	    {

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

	    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
	    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
	    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
	    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();

	    	$countProQuery = $this->Get_model->getCountAllProductPromotion($where);
	    	if($countProQuery->num_rows()>0){
	    		$this->db->where('product_category','Promotion')->from('tb_adminproduct');
	    		$data['getcountpro'] = $this->db->count_all_results();
	    	}

	    	$countWinQuery = $this->Get_model->getCountAllProductWindows($where);
	    	if($countWinQuery->num_rows()>0){
	    		$this->db->where('product_category','Windows')->from('tb_adminproduct');
	    		$data['getcountwin'] = $this->db->count_all_results();
	    	}

	    	$countMicroQuery = $this->Get_model->getCountAllProductMicrosoft($where);
	    	if($countMicroQuery->num_rows()>0){
	    		$this->db->where('product_category','Microsoft')->from('tb_adminproduct');
	    		$data['getcountmicro'] = $this->db->count_all_results();
	    	}

	    	$countAdobeQuery = $this->Get_model->getCountAllProductAdobe($where);
	    	if($countAdobeQuery->num_rows()>0){
	    		$this->db->where('product_category','Adobe')->from('tb_adminproduct');
	    		$data['getcountadobe'] = $this->db->count_all_results();
	    	}

	    	$countOfficeQuery = $this->Get_model->getCountAllProductOffice($where);
	    	if($countOfficeQuery->num_rows()>0){
	    		$this->db->where('product_category','Office')->from('tb_adminproduct');
	    		$data['getcountoffice'] = $this->db->count_all_results();
	    	}

	    	$countAutocadQuery = $this->Get_model->getCountAllProductAutocad($where);
	    	if($countAutocadQuery->num_rows()>0){
	    		$this->db->where('product_category','AutoCAD')->from('tb_adminproduct');
	    		$data['getcountautocad'] = $this->db->count_all_results();
	    	}

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
	    	$data['content'] = "frontend/srcup/category/Category_v";
	    	$data['footer'] = "frontend/srcup/Footer_v";
	    	$data['jscript'] = "frontend/srcup/Jscript_v";

	    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
	    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
	    	$data['author'] = "Adilak";
	    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

	    	$this->load->view('frontend/template/Main_v',$data);
	    }

	    public function category_promotion($offset=0)
	    {
	    	//////////////// Begin Pagination ////////////////
	    	$this->load->library('pagination');

	    	$data_pro = $this->db->get('tb_adminproduct');

	    	$config['total_rows'] = $data_pro->num_rows();
	    	$config['base_url'] = base_url().'Home/category_promotion';
	    	$config['per_page'] = 5;

	    	$config['full_tag_open'] = '<ul class="pagination">';
	    	$config['full_tag_close'] = '</ul>';
	    	$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '<span class="sr-only"></span></a></li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['next_link'] = 'Next';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['prev_link'] = 'Previous';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';

			$this->pagination->initialize($config);
			$data['page_promotion'] = $this->pagination->create_links();
			$data['offset'] = $offset;

			$data['data_promotion'] = $this->Get_model->getAllProductPromotion($config['per_page'],$offset);
			//////////////// End Pagination ////////////////

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

	    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
	    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
	    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
	    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();

	    	//$data['getallpromotion'] = $this->db->select('*')->from('tb_adminproduct')->where('product_category','Promotion')->order_by('product_id','desc')->limit($config['per_page'],$config['page'])->get()->result_array();

	    	$countProQuery = $this->Get_model->getCountAllProductPromotion($where);
	    	if($countProQuery->num_rows()>0){
	    		$this->db->where('product_category','Promotion')->from('tb_adminproduct');
	    		$data['getcountpro'] = $this->db->count_all_results();
	    	}

	    	$countWinQuery = $this->Get_model->getCountAllProductWindows($where);
	    	if($countWinQuery->num_rows()>0){
	    		$this->db->where('product_category','Windows')->from('tb_adminproduct');
	    		$data['getcountwin'] = $this->db->count_all_results();
	    	}

	    	$countMicroQuery = $this->Get_model->getCountAllProductMicrosoft($where);
	    	if($countMicroQuery->num_rows()>0){
	    		$this->db->where('product_category','Microsoft')->from('tb_adminproduct');
	    		$data['getcountmicro'] = $this->db->count_all_results();
	    	}

	    	$countAdobeQuery = $this->Get_model->getCountAllProductAdobe($where);
	    	if($countAdobeQuery->num_rows()>0){
	    		$this->db->where('product_category','Adobe')->from('tb_adminproduct');
	    		$data['getcountadobe'] = $this->db->count_all_results();
	    	}

	    	$countOfficeQuery = $this->Get_model->getCountAllProductOffice($where);
	    	if($countOfficeQuery->num_rows()>0){
	    		$this->db->where('product_category','Office')->from('tb_adminproduct');
	    		$data['getcountoffice'] = $this->db->count_all_results();
	    	}

	    	$countAutocadQuery = $this->Get_model->getCountAllProductAutocad($where);
	    	if($countAutocadQuery->num_rows()>0){
	    		$this->db->where('product_category','AutoCAD')->from('tb_adminproduct');
	    		$data['getcountautocad'] = $this->db->count_all_results();
	    	}

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
	    	$data['content'] = "frontend/srcup/category/promotion";
	    	$data['footer'] = "frontend/srcup/Footer_v";
	    	$data['jscript'] = "frontend/srcup/Jscript_v";

	    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
	    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
	    	$data['author'] = "Adilak";
	    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

	    	$this->load->view('frontend/template/Main_v',$data);
	    }

	    public function category_microsoft($offset=0)
	    {
	    	//////////////// Begin Pagination ////////////////
	    	$this->load->library('pagination');

	    	$data_micro = $this->db->get('tb_adminproduct');

	    	$config['total_rows'] = $data_micro->num_rows();
	    	$config['base_url'] = base_url().'Home/category_microsoft';
	    	$config['per_page'] = 5;

	    	$config['full_tag_open'] = '<ul class="pagination">';
	    	$config['full_tag_close'] = '</ul>';
	    	$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '<span class="sr-only"></span></a></li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['next_link'] = 'Next';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['prev_link'] = 'Previous';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';

			$this->pagination->initialize($config);
			$data['page_microsoft'] = $this->pagination->create_links();
			$data['offset'] = $offset;

			$data['data_microsoft'] = $this->Get_model->getAllProductMicrosoft($config['per_page'],$offset);
			//////////////// End Pagination ////////////////

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

	    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
	    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
	    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
	    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();

	    	$countProQuery = $this->Get_model->getCountAllProductPromotion($where);
	    	if($countProQuery->num_rows()>0){
	    		$this->db->where('product_category','Promotion')->from('tb_adminproduct');
	    		$data['getcountpro'] = $this->db->count_all_results();
	    	}

	    	$countWinQuery = $this->Get_model->getCountAllProductWindows($where);
	    	if($countWinQuery->num_rows()>0){
	    		$this->db->where('product_category','Windows')->from('tb_adminproduct');
	    		$data['getcountwin'] = $this->db->count_all_results();
	    	}

	    	$countMicroQuery = $this->Get_model->getCountAllProductMicrosoft($where);
	    	if($countMicroQuery->num_rows()>0){
	    		$this->db->where('product_category','Microsoft')->from('tb_adminproduct');
	    		$data['getcountmicro'] = $this->db->count_all_results();
	    	}

	    	$countAdobeQuery = $this->Get_model->getCountAllProductAdobe($where);
	    	if($countAdobeQuery->num_rows()>0){
	    		$this->db->where('product_category','Adobe')->from('tb_adminproduct');
	    		$data['getcountadobe'] = $this->db->count_all_results();
	    	}

	    	$countOfficeQuery = $this->Get_model->getCountAllProductOffice($where);
	    	if($countOfficeQuery->num_rows()>0){
	    		$this->db->where('product_category','Office')->from('tb_adminproduct');
	    		$data['getcountoffice'] = $this->db->count_all_results();
	    	}

	    	$countAutocadQuery = $this->Get_model->getCountAllProductAutocad($where);
	    	if($countAutocadQuery->num_rows()>0){
	    		$this->db->where('product_category','AutoCAD')->from('tb_adminproduct');
	    		$data['getcountautocad'] = $this->db->count_all_results();
	    	}

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
	    	$data['content'] = "frontend/srcup/category/microsoft";
	    	$data['footer'] = "frontend/srcup/Footer_v";
	    	$data['jscript'] = "frontend/srcup/Jscript_v";

	    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
	    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
	    	$data['author'] = "Adilak";
	    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

	    	$this->load->view('frontend/template/Main_v',$data);
	    }

	    public function category_windows($offset=0)
	    {
	    	//////////////// Begin Pagination ////////////////
	    	$this->load->library('pagination');

	    	$data_wind = $this->db->get('tb_adminproduct');

	    	$config['total_rows'] = $data_wind->num_rows();
	    	$config['base_url'] = base_url().'Home/category_windows';
	    	$config['per_page'] = 5;

	    	$config['full_tag_open'] = '<ul class="pagination">';
	    	$config['full_tag_close'] = '</ul>';
	    	$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '<span class="sr-only"></span></a></li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['next_link'] = 'Next';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['prev_link'] = 'Previous';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';

			$this->pagination->initialize($config);
			$data['page_windows'] = $this->pagination->create_links();
			$data['offset'] = $offset;

			$data['data_windows'] = $this->Get_model->getAllProductWindows($config['per_page'],$offset);
			//////////////// End Pagination ////////////////


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

	    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
	    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
	    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
	    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();

	    	$countProQuery = $this->Get_model->getCountAllProductPromotion($where);
	    	if($countProQuery->num_rows()>0){
	    		$this->db->where('product_category','Promotion')->from('tb_adminproduct');
	    		$data['getcountpro'] = $this->db->count_all_results();
	    	}

	    	$countWinQuery = $this->Get_model->getCountAllProductWindows($where);
	    	if($countWinQuery->num_rows()>0){
	    		$this->db->where('product_category','Windows')->from('tb_adminproduct');
	    		$data['getcountwin'] = $this->db->count_all_results();
	    	}

	    	$countMicroQuery = $this->Get_model->getCountAllProductMicrosoft($where);
	    	if($countMicroQuery->num_rows()>0){
	    		$this->db->where('product_category','Microsoft')->from('tb_adminproduct');
	    		$data['getcountmicro'] = $this->db->count_all_results();
	    	}

	    	$countAdobeQuery = $this->Get_model->getCountAllProductAdobe($where);
	    	if($countAdobeQuery->num_rows()>0){
	    		$this->db->where('product_category','Adobe')->from('tb_adminproduct');
	    		$data['getcountadobe'] = $this->db->count_all_results();
	    	}

	    	$countOfficeQuery = $this->Get_model->getCountAllProductOffice($where);
	    	if($countOfficeQuery->num_rows()>0){
	    		$this->db->where('product_category','Office')->from('tb_adminproduct');
	    		$data['getcountoffice'] = $this->db->count_all_results();
	    	}

	    	$countAutocadQuery = $this->Get_model->getCountAllProductAutocad($where);
	    	if($countAutocadQuery->num_rows()>0){
	    		$this->db->where('product_category','AutoCAD')->from('tb_adminproduct');
	    		$data['getcountautocad'] = $this->db->count_all_results();
	    	}

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
	    	$data['content'] = "frontend/srcup/category/windows";
	    	$data['footer'] = "frontend/srcup/Footer_v";
	    	$data['jscript'] = "frontend/srcup/Jscript_v";

	    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
	    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
	    	$data['author'] = "Adilak";
	    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

	    	$this->load->view('frontend/template/Main_v',$data);
	    }

	    public function category_office($offset=0)
	    {
	    	//////////////// Begin Pagination ////////////////
	    	$this->load->library('pagination');

	    	$data_off = $this->db->get('tb_adminproduct');

	    	$config['total_rows'] = $data_off->num_rows();
	    	$config['base_url'] = base_url().'Home/category_office';
	    	$config['per_page'] = 5;

	    	$config['full_tag_open'] = '<ul class="pagination">';
	    	$config['full_tag_close'] = '</ul>';
	    	$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '<span class="sr-only"></span></a></li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['next_link'] = 'Next';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['prev_link'] = 'Previous';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';

			$this->pagination->initialize($config);
			$data['page_office'] = $this->pagination->create_links();
			$data['offset'] = $offset;

			$data['data_office'] = $this->Get_model->getAllProductOffice($config['per_page'],$offset);
			//////////////// End Pagination ////////////////

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

	    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
	    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
	    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
	    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();

	    	$countProQuery = $this->Get_model->getCountAllProductPromotion($where);
	    	if($countProQuery->num_rows()>0){
	    		$this->db->where('product_category','Promotion')->from('tb_adminproduct');
	    		$data['getcountpro'] = $this->db->count_all_results();
	    	}

	    	$countWinQuery = $this->Get_model->getCountAllProductWindows($where);
	    	if($countWinQuery->num_rows()>0){
	    		$this->db->where('product_category','Windows')->from('tb_adminproduct');
	    		$data['getcountwin'] = $this->db->count_all_results();
	    	}

	    	$countMicroQuery = $this->Get_model->getCountAllProductMicrosoft($where);
	    	if($countMicroQuery->num_rows()>0){
	    		$this->db->where('product_category','Microsoft')->from('tb_adminproduct');
	    		$data['getcountmicro'] = $this->db->count_all_results();
	    	}

	    	$countAdobeQuery = $this->Get_model->getCountAllProductAdobe($where);
	    	if($countAdobeQuery->num_rows()>0){
	    		$this->db->where('product_category','Adobe')->from('tb_adminproduct');
	    		$data['getcountadobe'] = $this->db->count_all_results();
	    	}

	    	$countOfficeQuery = $this->Get_model->getCountAllProductOffice($where);
	    	if($countOfficeQuery->num_rows()>0){
	    		$this->db->where('product_category','Office')->from('tb_adminproduct');
	    		$data['getcountoffice'] = $this->db->count_all_results();
	    	}

	    	$countAutocadQuery = $this->Get_model->getCountAllProductAutocad($where);
	    	if($countAutocadQuery->num_rows()>0){
	    		$this->db->where('product_category','AutoCAD')->from('tb_adminproduct');
	    		$data['getcountautocad'] = $this->db->count_all_results();
	    	}

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
	    	$data['content'] = "frontend/srcup/category/office";
	    	$data['footer'] = "frontend/srcup/Footer_v";
	    	$data['jscript'] = "frontend/srcup/Jscript_v";

	    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
	    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
	    	$data['author'] = "Adilak";
	    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

	    	$this->load->view('frontend/template/Main_v',$data);
	    }

	    public function category_adobe($offset=0)
	    {
	    	//////////////// Begin Pagination ////////////////
	    	$this->load->library('pagination');

	    	$data_ado = $this->db->get('tb_adminproduct');

	    	$config['total_rows'] = $data_ado->num_rows();
	    	$config['base_url'] = base_url().'Home/category_adobe';
	    	$config['per_page'] = 5;

	    	$config['full_tag_open'] = '<ul class="pagination">';
	    	$config['full_tag_close'] = '</ul>';
	    	$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '<span class="sr-only"></span></a></li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['next_link'] = 'Next';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['prev_link'] = 'Previous';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';

			$this->pagination->initialize($config);
			$data['page_adobe'] = $this->pagination->create_links();
			$data['offset'] = $offset;

			$data['data_adobe'] = $this->Get_model->getAllProductAdobe($config['per_page'],$offset);
			//////////////// End Pagination ////////////////

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

	    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
	    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
	    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
	    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();

	    	$countProQuery = $this->Get_model->getCountAllProductPromotion($where);
	    	if($countProQuery->num_rows()>0){
	    		$this->db->where('product_category','Promotion')->from('tb_adminproduct');
	    		$data['getcountpro'] = $this->db->count_all_results();
	    	}

	    	$countWinQuery = $this->Get_model->getCountAllProductWindows($where);
	    	if($countWinQuery->num_rows()>0){
	    		$this->db->where('product_category','Windows')->from('tb_adminproduct');
	    		$data['getcountwin'] = $this->db->count_all_results();
	    	}

	    	$countMicroQuery = $this->Get_model->getCountAllProductMicrosoft($where);
	    	if($countMicroQuery->num_rows()>0){
	    		$this->db->where('product_category','Microsoft')->from('tb_adminproduct');
	    		$data['getcountmicro'] = $this->db->count_all_results();
	    	}

	    	$countAdobeQuery = $this->Get_model->getCountAllProductAdobe($where);
	    	if($countAdobeQuery->num_rows()>0){
	    		$this->db->where('product_category','Adobe')->from('tb_adminproduct');
	    		$data['getcountadobe'] = $this->db->count_all_results();
	    	}

	    	$countOfficeQuery = $this->Get_model->getCountAllProductOffice($where);
	    	if($countOfficeQuery->num_rows()>0){
	    		$this->db->where('product_category','Office')->from('tb_adminproduct');
	    		$data['getcountoffice'] = $this->db->count_all_results();
	    	}

	    	$countAutocadQuery = $this->Get_model->getCountAllProductAutocad($where);
	    	if($countAutocadQuery->num_rows()>0){
	    		$this->db->where('product_category','AutoCAD')->from('tb_adminproduct');
	    		$data['getcountautocad'] = $this->db->count_all_results();
	    	}

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
	    	$data['content'] = "frontend/srcup/category/adobe";
	    	$data['footer'] = "frontend/srcup/Footer_v";
	    	$data['jscript'] = "frontend/srcup/Jscript_v";

	    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
	    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
	    	$data['author'] = "Adilak";
	    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

	    	$this->load->view('frontend/template/Main_v',$data);
	    }

	    public function category_autocad($offset=0)
	    {
	    	//////////////// Begin Pagination ////////////////
	    	$this->load->library('pagination');

	    	$data_autocad = $this->db->get('tb_adminproduct');

	    	$config['total_rows'] = $data_autocad->num_rows();
	    	$config['base_url'] = base_url().'Home/category_autocad';
	    	$config['per_page'] = 5;

	    	$config['full_tag_open'] = '<ul class="pagination">';
	    	$config['full_tag_close'] = '</ul>';
	    	$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '<span class="sr-only"></span></a></li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['next_link'] = 'Next';
			$config['prev_tag_open'] = '<li class="prev">';
			$config['prev_tag_close'] = '</li>';
			$config['prev_link'] = 'Previous';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';

			$this->pagination->initialize($config);
			$data['page_autocad'] = $this->pagination->create_links();
			$data['offset'] = $offset;

			$data['data_autocad'] = $this->Get_model->getAllProductAutoCAD($config['per_page'],$offset);
			//////////////// End Pagination ////////////////

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

	    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
	    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
	    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
	    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();

	    	$countProQuery = $this->Get_model->getCountAllProductPromotion($where);
	    	if($countProQuery->num_rows()>0){
	    		$this->db->where('product_category','Promotion')->from('tb_adminproduct');
	    		$data['getcountpro'] = $this->db->count_all_results();
	    	}

	    	$countWinQuery = $this->Get_model->getCountAllProductWindows($where);
	    	if($countWinQuery->num_rows()>0){
	    		$this->db->where('product_category','Windows')->from('tb_adminproduct');
	    		$data['getcountwin'] = $this->db->count_all_results();
	    	}

	    	$countMicroQuery = $this->Get_model->getCountAllProductMicrosoft($where);
	    	if($countMicroQuery->num_rows()>0){
	    		$this->db->where('product_category','Microsoft')->from('tb_adminproduct');
	    		$data['getcountmicro'] = $this->db->count_all_results();
	    	}

	    	$countAdobeQuery = $this->Get_model->getCountAllProductAdobe($where);
	    	if($countAdobeQuery->num_rows()>0){
	    		$this->db->where('product_category','Adobe')->from('tb_adminproduct');
	    		$data['getcountadobe'] = $this->db->count_all_results();
	    	}

	    	$countOfficeQuery = $this->Get_model->getCountAllProductOffice($where);
	    	if($countOfficeQuery->num_rows()>0){
	    		$this->db->where('product_category','Office')->from('tb_adminproduct');
	    		$data['getcountoffice'] = $this->db->count_all_results();
	    	}

	    	$countAutocadQuery = $this->Get_model->getCountAllProductAutocad($where);
	    	if($countAutocadQuery->num_rows()>0){
	    		$this->db->where('product_category','AutoCAD')->from('tb_adminproduct');
	    		$data['getcountautocad'] = $this->db->count_all_results();
	    	}

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
	    	$data['content'] = "frontend/srcup/category/autocad";
	    	$data['footer'] = "frontend/srcup/Footer_v";
	    	$data['jscript'] = "frontend/srcup/Jscript_v";

	    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
	    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
	    	$data['author'] = "Adilak";
	    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

	    	$this->load->view('frontend/template/Main_v',$data);
	    }

	    public function product_detail($pro_id = null)
	    {
	    	if(!isset($pro_id)){
	    		redirect(base_url('Home/index'));
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
		    	$data['getdetailbyid'] = $this->Get_model->getProductDetailById($pro_id);
		    	$data['getallproduct'] = $this->Get_model->getAllProductLimit();

		    	$data['getadobe_singleapp'] = $this->Get_model->getProductBySubCategoryAdobe1();
		    	$data['getadobe_creativecloud'] = $this->Get_model->getProductBySubCategoryAdobe2();
		    	$data['getadobe_acrobat1'] = $this->Get_model->getProductBySubCategoryAdobe4();
		    	$data['getadobe_acrobat2'] = $this->Get_model->getProductBySubCategoryAdobe3();

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
		    	$data['content'] = "frontend/srcup/Detail_v";
		    	$data['footer'] = "frontend/srcup/Footer_v";
		    	$data['jscript'] = "frontend/srcup/Jscript_v";

		    	$data['title'] = "License - Windows Micrsoft Office Adobe AutoCAD";
		    	$data['keyword'] = "License , Windows , Window Server , Micrsoft , Office , Adobe , AutoCAD";
		    	$data['author'] = "Adilak";
		    	$data['description'] = "ขาย License บนระบบปฏิบัติการ Windows / Office / Adobe / AutoCAD และข้อมูลต่างๆ อีกมากมาย";

		    	$this->load->view('frontend/template/Main_v',$data);
	    	}
	    }

	}