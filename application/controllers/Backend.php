<?php

defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
	class Backend extends CI_Controller
	{
	    public function __construct()
	    {
	        parent::__construct();
	        /*$this->load->model('Permission_model', 'permission');
	        if($this->session->userdata('id_fb')==null){
	        	redirect(base_url());
	        	exit;
	        }*/

	    }

	    /*private function checkPermission()
	    {
	    	$id = $this->session->userdata('id_fb');
	    	$isPermission = $this->permission->chkPermission($id);
	    	if($isPermission != false){
		    	$check = explode("|", $isPermission->group_permission);
		    	return $check;
	    	}
	    }*/

	    // หน้าหลัก dashboard.php
	    public function index()
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	//$data['permission'] = $this->checkPermission();
		    	//$data['member'] = $this->user_session();

		    	$data['header1'] = "backend/srcback/Header_v1";
		    	$data['sidebar1'] = "backend/srcback/Sidebar_v1";
		    	$data['content1'] = "backend/srcback/Content_v1";
		    	$data['settingbar1'] = "backend/srcback/Settingbar_v1";


		    	$this->load->view('backend/template/dashboard', $data);
		    }
		}

// Start Menu
	    // เพิ่มเมนู menu/add.php
	    public function addMenu()
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	//$data['permission'] = $this->checkPermission();
		    	$data['showmenu'] = $this->Insert_model->get_menu();
		    	$data['showsubmenu'] = $this->Insert_model->get_submenu();
		    	$data['savemenu'] = $this->saveMenu();

		    	$data['header1'] = "backend/srcback/Header_v1";
		    	$data['sidebar1'] = "backend/srcback/Sidebar_v1";
		    	$data['content1'] = "backend/srcback/menu/add";
		    	$data['content2'] = "backend/srcback/menu/menulist";
		    	$data['settingbar1'] = "backend/srcback/Settingbar_v1";

		    	$this->load->view('backend/template/dashboard', $data);
	    	}
	    }

	    // เพิ่มเมนู menu/add.php
	    public function addMenuSub()
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	//$data['permission'] = $this->checkPermission();
		    	$data['showmenu'] = $this->Insert_model->get_menu();
		    	$data['showsubmenu'] = $this->Insert_model->get_submenu();
		    	$data['savemenusub'] = $this->saveMenuSub();

		    	$data['header1'] = "backend/srcback/Header_v1";
		    	$data['sidebar1'] = "backend/srcback/Sidebar_v1";
		    	$data['content1'] = "backend/srcback/menu/add_submenu";
		    	$data['content2'] = "backend/srcback/menu/menulist";
		    	$data['settingbar1'] = "backend/srcback/Settingbar_v1";

		    	$this->load->view('backend/template/dashboard', $data);
		    }
	    }

	    // แก้ไขเมนู menu/edit.php
	    public function editMenu($id = null)
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	// ถ้าไม่เจอ $id จาก menulist.php ให้ redirect กลับไปหน้า addMenu
		    	if(!isset($id)){
		    		redirect(base_url('Backend/addMenu'));
		    	}

		    	//$data['permission'] = $this->checkPermission();

		    	$data['showmenu'] = $this->Insert_model->get_menu();
		    	$data['showsubmenu'] = $this->Insert_model->get_submenu();
		    	$data['savemenu'] = $this->saveMenu();
		    	$data['getmenubyid'] = $this->Insert_model->get_menu_byid($id);

		    	$data['header1'] = "backend/srcback/Header_v1";
		    	$data['sidebar1'] = "backend/srcback/Sidebar_v1";
		    	$data['content1'] = "backend/srcback/menu/edit";
		    	$data['content2'] = "backend/srcback/menu/menulist";
		    	$data['settingbar1'] = "backend/srcback/Settingbar_v1";

		    	$this->load->view('backend/template/dashboard', $data);
		    }
	    }

	    // แก้ไขเมนู menu/edit.php
	    public function editMenuSub($id = null)
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	// ถ้าไม่เจอ $id จาก menulist.php ให้ redirect กลับไปหน้า addMenu
		    	if(!isset($id)){
		    		redirect(base_url('Backend/addMenuSub'));
		    	}

		    	//$data['permission'] = $this->checkPermission();

		    	$data['showmenu'] = $this->Insert_model->get_menu();
		    	$data['showsubmenu'] = $this->Insert_model->get_submenu();
		    	$data['savemenusub'] = $this->saveMenuSub();
		    	$data['getsubmenubyid'] = $this->Insert_model->get_submenu_byid($id);

		    	$data['header1'] = "backend/srcback/Header_v1";
		    	$data['sidebar1'] = "backend/srcback/Sidebar_v1";
		    	$data['content1'] = "backend/srcback/menu/edit_submenu";
		    	$data['content2'] = "backend/srcback/menu/menulist";
		    	$data['settingbar1'] = "backend/srcback/Settingbar_v1";

		    	$this->load->view('backend/template/dashboard', $data);
		    }
	    }

	    // ลบเมนู
	    public function delMenu($id = null)
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	// ถ้าไม่เจอ $id จาก menulist.php ให้ redirect กลับไปหน้า addMenu
		    	if(!isset($id)){
		    		redirect(base_url('Backend/addMenu'));
		    	}


		    	//$data['permission'] = $this->checkPermission();

		    	$data['showmenu'] = $this->Insert_model->get_menu();
		    	$data['showsubmenu'] = $this->Insert_model->get_submenu();
		    	$data['getmenubyid'] = $this->Insert_model->get_menu_byid($id);
		    	$data['delmenu'] = $this->Insert_model->delete_menu($id);

		    	redirect('Backend/addMenu');
		    }
	    }

	    // ลบเมนู
	    public function delMenuSub($id = null)
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	// ถ้าไม่เจอ $id จาก menulist.php ให้ redirect กลับไปหน้า addMenu
		    	if(!isset($id)){
		    		redirect(base_url('Backend/addMenuSub'));
		    	}


		    	//$data['permission'] = $this->checkPermission();

		    	$data['showmenu'] = $this->Insert_model->get_menu();
		    	$data['showsubmenu'] = $this->Insert_model->get_submenu();
		    	$data['getsubmenubyid'] = $this->Insert_model->get_submenu_byid($id);
		    	$data['delmenu'] = $this->Insert_model->delete_submenu($id);

		    	redirect('Backend/addMenuSub');
		    }
	    }


	    // Menu
	    // เพิ่มเมนู INSERT INTO
	    private function saveMenu()
	    {

	    	$this->load->library('form_validation');

	    	$input = $this->input->post();

	    	if(!empty($input)){

	    		$this->form_validation->set_rules('name','<b>กรุณาใส่ชื่อเมนูใน</b>','required');
	    		$this->form_validation->set_rules('rank','<b>กรุณากำหนดลำดับเมนูใน</b>','required');
	    		if($this->form_validation->run()){

	    			//ถ้าไม่มีการส่งค่า id มา
		    		if(empty($input['id'])){
			    		// สร้างเมนูใหม่
			    		$this->Insert_model->insert_menu($input);
		    		}else{
		    			// แก้ไขเมนู
		    			$this->Insert_model->update_menu($input['id'], $input);
		    		}

		    		redirect(base_url('Backend/addMenu'));
	    		}

	    	}
	    }

// Sub Menu
	    // เพิ่มเมนู INSERT INTO
	    private function saveMenuSub()
	    {

	    	$this->load->library('form_validation');

	    	$input = $this->input->post();
	    	if(!empty($input)){

	    		$this->form_validation->set_rules('name','<b>กรุณาใส่ชื่อซับเมนูใน</b>','required');
	    		$this->form_validation->set_rules('rank','<b>กรุณากำหนดลำดับซับเมนูใน</b>','required');
	    		if($this->form_validation->run()){

	    			//ถ้าไม่มีการส่งค่า id มา
		    		if(empty($input['id'])){
			    		// สร้างเมนูใหม่
			    		$this->Insert_model->insert_submenu($input);
		    		}else{
		    			// แก้ไขเมนู
		    			$this->Insert_model->update_submenu($input['id'], $input);
		    		}

		    		redirect(base_url('Backend/addMenu'));
	    		}

	    	}
	    }
// End Menu

// Start Product

	    // เพิ่มสินค้า product/add.php
	    public function addProduct()
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	//$data['permission'] = $this->checkPermission();
		    	$data['saveproduct'] = $this->saveProduct();
		    	$data['showproduct'] = $this->Insert_model->get_product();
		    	$data['getcategory'] = $this->Insert_model->get_category();
		    	$data['getsubcategorywindows'] = $this->Insert_model->get_subcategorywindows();
		    	$data['getsubcategoryoffice'] = $this->Insert_model->get_subcategoryoffice();
		    	$data['getsubcategorymicrosoft'] = $this->Insert_model->get_subcategorymicrosoft();
		    	$data['getsubcategoryadobe'] = $this->Insert_model->get_subcategoryadobe();
		    	$data['getsubcategoryautocad'] = $this->Insert_model->get_subcategoryautocad();

		    	$data['header1'] = "backend/srcback/Header_v1";
		    	$data['sidebar1'] = "backend/srcback/Sidebar_v1";
		    	$data['content1'] = "backend/srcback/product/add";
		    	$data['content2'] = "backend/srcback/product/productlist";
		    	$data['settingbar1'] = "backend/srcback/Settingbar_v1";

		    	$this->load->view('backend/template/dashboard', $data);
		    }
	    }

	    // แก้ไขสินค้า product/edit.php
	    public function editProduct($pro_id = null)
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	// ถ้าไม่เจอ $id จาก productlist.php ให้ redirect กลับไปหน้า addProduct
		    	if(!isset($pro_id)){
		    		redirect(base_url('Backend/addProduct'));
		    	}

		    	//$data['permission'] = $this->checkPermission();

		    	$data['showproduct'] = $this->Insert_model->get_product();
		    	$data['saveproduct'] = $this->saveProduct();
		    	$data['getproductbyid'] = $this->Insert_model->get_product_byid($pro_id);
		    	$data['getcategory'] = $this->Insert_model->get_category();
		    	$data['getsubcategorywindows'] = $this->Insert_model->get_subcategorywindows();
		    	$data['getsubcategoryoffice'] = $this->Insert_model->get_subcategoryoffice();
		    	$data['getsubcategorymicrosoft'] = $this->Insert_model->get_subcategorymicrosoft();
		    	$data['getsubcategoryadobe'] = $this->Insert_model->get_subcategoryadobe();
		    	$data['getsubcategoryautocad'] = $this->Insert_model->get_subcategoryautocad();

		    	$data['header1'] = "backend/srcback/Header_v1";
		    	$data['sidebar1'] = "backend/srcback/Sidebar_v1";
		    	$data['content1'] = "backend/srcback/product/edit";
		    	$data['content2'] = "backend/srcback/product/productlist";
		    	$data['settingbar1'] = "backend/srcback/Settingbar_v1";

		    	$this->load->view('backend/template/dashboard', $data);
		    }
	    }

	    // ลบสิน้คา
	    public function delProduct($pro_id = null)
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	// ถ้าไม่เจอ $id จาก menulist.php ให้ redirect กลับไปหน้า addMenu
		    	if(!isset($pro_id)){
		    		redirect(base_url('Backend/addProduct'));
		    	}


		    	//$data['permission'] = $this->checkPermission();

		    	$data['showproduct'] = $this->Insert_model->get_product();
		    	$data['getproductbyid'] = $this->Insert_model->get_product_byid($pro_id);
		    	$data['delproduct'] = $this->Insert_model->delete_product($pro_id);

		    	redirect('Backend/addProduct');
		    }
	    }

	    // Product
	    // เพิ่มข้อมูลสินค้า product/add.php
	    public function saveProduct()
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	$this->load->library('form_validation');
		    	$input = $this->input->post();


		    	if(!empty($input)){
			    	$this->form_validation->set_rules('product_title', '<b>โปรดกรอกเฉพาะชื่อสินค้า</b>', 'required');
			    	$this->form_validation->set_rules('name_product', '<b>โปรดกรอกชื่อสินค้า และรายละเอียดย่อย</b>', 'required');
			    	$this->form_validation->set_rules('part_number', '<b>โปรดกรอกเลข P/N</b>', 'required');
			    	$this->form_validation->set_rules('main_price', '<b>โปรดกรอกราคา Main Price</b>', 'required');
			    	$this->form_validation->set_rules('volume_price', '<b>โปรดกรอกราคา Volume Price</b>', 'required');
			    	$this->form_validation->set_rules('description', '<b>โปรดกรอกรายละเอียด</b>', 'required');

			    	if($this->form_validation->run()){
			    		if(empty($input['pro_id'])){
			    			$this->Insert_model->create($input);
			    			echo "<pre>";
			    			print_r($input);
			    			exit();
			    		}else{
			    			$this->Insert_model->editProduct($input['pro_id'],$input);
			    		}

			    	redirect(base_url('Backend/addProduct'));
			    	}

			    }
			}

	    }

// End Product

// Start Category

	    public function addCategory()
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	//$data['permission'] = $this->checkPermission();

		    	$data['savecategory'] = $this->saveCategory();
		    	$data['showcategory'] = $this->Insert_model->get_category();

		    	$data['header1'] = "backend/srcback/Header_v1";
		    	$data['sidebar1'] = "backend/srcback/Sidebar_v1";
		    	$data['content1'] = "backend/srcback/category/add";
		    	$data['content2'] = "backend/srcback/category/categorylist";
		    	$data['settingbar1'] = "backend/srcback/Settingbar_v1";

		    	$this->load->view('backend/template/dashboard', $data);
		    }
	    }

	    // แก้ไขเมนู category/edit.php
	    public function editCategory($cat_id = null)
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	// ถ้าไม่เจอ $id จาก menulist.php ให้ redirect กลับไปหน้า addMenu
		    	if(!isset($cat_id)){
		    		redirect(base_url('Backend/addCategory'));
		    	}

		    	//$data['permission'] = $this->checkPermission();

		    	$data['showcategory'] = $this->Insert_model->get_category();
		    	$data['savecategory'] = $this->saveCategory();
		    	$data['getcategorybyid'] = $this->Insert_model->get_category_byid($cat_id);

		    	$data['header1'] = "backend/srcback/Header_v1";
		    	$data['sidebar1'] = "backend/srcback/Sidebar_v1";
		    	$data['content1'] = "backend/srcback/category/edit";
		    	$data['content2'] = "backend/srcback/category/categorylist";
		    	$data['settingbar1'] = "backend/srcback/Settingbar_v1";

		    	$this->load->view('backend/template/dashboard', $data);
		    }
	    }

	    // ลบหมวดหมู่
	    public function delCategory($cat_id = null)
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	// ถ้าไม่เจอ $id จาก menulist.php ให้ redirect กลับไปหน้า addMenu
		    	if(!isset($cat_id)){
		    		redirect(base_url('Backend/addCategory'));
		    	}


		    	//$data['permission'] = $this->checkPermission();

		    	$data['showcategory'] = $this->Insert_model->get_category();
		    	$data['getcategoryid'] = $this->Insert_model->get_category_byid($cat_id);
		    	$data['delcategory'] = $this->Insert_model->delete_category($cat_id);

		    	redirect('Backend/addCategory');
		    }
	    }

	    // Category
	    // เพิ่มหมวดหมู่ INSERT INTO
	    private function saveCategory()
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
	        
		    	$this->load->library('form_validation');

		    	$input = $this->input->post();

		    	if(!empty($input)){

		    		$this->form_validation->set_rules('cat_name','<b>กรุณาใส่ชื่อหมวดหมู่ใน</b>','required');
		    		if($this->form_validation->run()){

		    			//ถ้าไม่มีการส่งค่า id มา
			    		if(empty($input['cat_id'])){
				    		// สร้างเมนูใหม่
				    		$this->Insert_model->insert_category($input);
			    		}else{
			    			// แก้ไขเมนู
			    			$this->Insert_model->update_category($input['cat_id'], $input);
			    		}

			    		redirect(base_url('Backend/addCategory'));
		    		}
		    		
		    	}
		    }
	    }

// End Category
	  

// Start Slide Product

	// เพิ่มสไลด์สินค้า slide/add.php
		public function addProductSlide()
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	//$data['permission'] = $this->checkPermission();
		    	$data['saveproductslide'] = $this->saveProductSlide();
		    	$data['showproductslide'] = $this->Insert_model->get_productslide();
		    	$data['getcategory'] = $this->Insert_model->get_category();

		    	$data['header1'] = "backend/srcback/Header_v1";
		    	$data['sidebar1'] = "backend/srcback/Sidebar_v1";
		    	$data['content1'] = "backend/srcback/slide/add";
		    	$data['content2'] = "backend/srcback/slide/slidelist";
		    	$data['settingbar1'] = "backend/srcback/Settingbar_v1";

		    	$this->load->view('backend/template/dashboard', $data);
		    }
	    }

	     // แก้ไขเมนู slide/edit.php
	    public function editProductSlide($slide_id = null)
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	// ถ้าไม่เจอ $id จาก slidelist.php ให้ redirect กลับไปหน้า addProductSlide
		    	if(!isset($slide_id)){
		    		redirect(base_url('Backend/addProductSlide'));
		    	}

		    	//$data['permission'] = $this->checkPermission();

		    	$data['showproductslide'] = $this->Insert_model->get_productslide();
		    	$data['saveproductslide'] = $this->saveProductSlide();
		    	$data['getproductslidebyid'] = $this->Insert_model->get_productslide_byid($slide_id);
		    	$data['getcategory'] = $this->Insert_model->get_category();

		    	$data['header1'] = "backend/srcback/Header_v1";
		    	$data['sidebar1'] = "backend/srcback/Sidebar_v1";
		    	$data['content1'] = "backend/srcback/slide/edit";
		    	$data['content2'] = "backend/srcback/slide/slidelist";
		    	$data['settingbar1'] = "backend/srcback/Settingbar_v1";

		    	$this->load->view('backend/template/dashboard', $data);
		    }
	    }

	    // ลบเมนู
	    public function delProductSlide($slide_id = null)
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	// ถ้าไม่เจอ $id จาก menulist.php ให้ redirect กลับไปหน้า addMenu
		    	if(!isset($slide_id)){
		    		redirect(base_url('Backend/addProductSlide'));
		    	}


		    	//$data['permission'] = $this->checkPermission();

		    	$data['showproductslide'] = $this->Insert_model->get_productslide();
		    	$data['getproductslidebyid'] = $this->Insert_model->get_productslide_byid($slide_id);
		    	$data['delproductslide'] = $this->Insert_model->delete_productslide($slide_id);

		    	redirect('Backend/addProductSlide');
		    }
	    }

	    // เพิ่มข้อมูลสไลด์สินค้า slide/add.php
	    public function saveProductSlide()
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	$this->load->library('form_validation');

		    	$input = $this->input->post();



		    	if(!empty($input)){
			    	$this->form_validation->set_rules('slide_title', '<b>โปรดกรอกชื่อสไลด์สินค้า</b>', 'required');
			    	$this->form_validation->set_rules('slide_subdescription', '<b>โปรดกรอกรายละเอียดย่อย เพื่อนำข้อมูลไปโชว์หน้าสไลด์</b>', 'required');
			    	$this->form_validation->set_rules('slide_main_price', '<b>โปรดกรอกราคา Main Price</b>', 'required');
			    	$this->form_validation->set_rules('slide_volume_price', '<b>โปรดกรอกราคา Volume Price</b>', 'required');
			    	$this->form_validation->set_rules('slide_description', '<b>โปรดกรอกรายละเอียดแบบเต็ม</b>', 'required');

			    	if($this->form_validation->run()){
			    		if(empty($input['slide_id'])){
			    			$this->Insert_model->createSlide($input);
			    		}else{
			    			$this->Insert_model->editProductSlide($input['slide_id'],$input);
			    		}

			    	redirect(base_url('Backend/addProductSlide'));
			    	}

			    }
			}
		}
	}