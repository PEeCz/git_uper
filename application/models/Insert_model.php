<?php

	class Insert_model extends CI_Model
	{
		// กำหนด $tablemenu = ชื่อตาราง
		private $tablemenu = 'tb_adminmenu';
		private $tableproduct = 'tb_adminproduct';
		private $tablecategory = 'tb_category';
		private $tablesubmenu = 'tb_adminsubmenu';
		private $tableproductslide = 'tb_adminslidepost';
		private $tablesubcategory = 'tb_subcategory';

		public function __construct()
		{
			parent::__construct();
		}

// Start Menu
		// get field จากตาราง tb_adminmenu ทั้งหมดไปแสดงใน menulist.php
		public function get_menu()
		{
			return $this->db->get($this->tablemenu)->result();
		}

		public function get_submenu()
		{
			return $this->db->get($this->tablesubmenu)->result();
		}

		public function insert_menu($value)
		{
			$this->db
				->set('created_at','NOW()',FALSE)
				->insert($this->tablemenu, $value);
		}

		public function insert_submenu($value)
		{

			$this->db
				->set('created_at','NOW()',FALSE)
				->insert($this->tablesubmenu, $value);
		}

		// get ID จากตาราง tb_adminmenu โดยเอาค่า ID ไปแสดงใน edit.php
		public function get_menu_byid($id)
		{
			return $this->db
						->get_where($this->tablemenu, ['id'=>$id])
						->row();
		/*	$query = $this->db
						->get_where($this->tablemenu, ['id'=>$id]);			
			$row = $query->row();

			return $row;
		*/
		}

		public function get_submenu_byid($id)
		{
			return $this->db
						->get_where($this->tablesubmenu, ['id'=>$id])
						->row();
		/*	$query = $this->db
						->get_where($this->tablemenu, ['id'=>$id]);			
			$row = $query->row();

			return $row;
		*/
		}

		public function update_menu($id, $value)
		{
			$this->db->set('updated_at','NOW()',FALSE);
			$this->db
				 ->update($this->tablemenu, $value, ['id'=>$id]);
		}

		public function update_submenu($id, $value)
		{
			$this->db->set('updated_at','NOW()',FALSE);
			$this->db
				 ->update($this->tablesubmenu, $value, ['id'=>$id]);
		}

		public function delete_menu($id)
		{
			$this->db->delete($this->tablemenu, ['id'=>$id]);
		}

		public function delete_submenu($id)
		{
			$this->db->delete($this->tablesubmenu, ['id'=>$id]);
		}

// End Menu

// Start Product

		// get field จากตาราง tb_adminproduct ทั้งหมดไปแสดงใน productlist.php
		public function get_product()
		{
			return $this->db->get($this->tableproduct)->result();
		}

		// get ID จากตาราง tb_adminproduct โดยเอาค่า ID ไปแสดงใน product/edit.php
		public function get_product_byid($pro_id)
		{
			return $this->db
						->get_where($this->tableproduct, ['product_id'=>$pro_id])
						->row();
		}

		public function create($newdata)
		{
	        $config['upload_path'] = './application/upload/product/';  // โฟลเดอร์ ตำแหน่งเดียวกับ root ของโปรเจ็ค
	        $config['allowed_types'] = 'gif|jpg|png|jpeg'; // ปรเเภทไฟล์
	        $config['max_size']     = '0';  // ขนาดไฟล์ (kb)  0 คือไม่จำกัด ขึ้นกับกำหนดใน php.ini ปกติไม่เกิน 2MB
	        $config['max_width'] = '1200';  // ความกว้างรูปไม่เกิน
	        $config['max_height'] = '1100'; // ความสูงรูปไม่เกิน
	        $config['file_name'] = '';  // ชื่อไฟล์ ถ้าไม่กำหนดจะเป็นตามชื่อเพิม

	        $this->upload->initialize($config);    // เรียกใช้การตั้งค่า
	        $this->upload->do_upload('file_img'); // ทำการอัพโหลดไฟล์จาก input file ชื่อ file_img

	        $file_upload=""; // กำหนดชื่อไฟล์เป็นค่าว่าง
	        if(!$this->upload->display_errors()){ // ถ้าไม่มี error อัพไฟล์ได้ ให้เอาใช้ไฟล์ใส่ตัวแปร ไว้บันทึกลงฐานข้อมูล
	        	$file_upload=$this->upload->data('file_name');
	        }
		        $newdata = array(
		            'product_id' => NULL,
		            'product_title' => $this->input->post('product_title'),
					'product_name' => $this->input->post('name_product'),
					'product_pn' => $this->input->post('part_number'),
					'product_mprice' => $this->input->post('main_price'),
					'product_vprice' => $this->input->post('volume_price'),
					'product_vprice1' => $this->input->post('volume_price1'),
					'product_vprice2' => $this->input->post('volume_price2'),
					'product_vprice3' => $this->input->post('volume_price3'),
					'product_vprice4' => $this->input->post('volume_price4'),
					'product_stock' => $this->input->post('inout_stock'),
					'product_detail' => $this->input->post('description'),
					'product_img' => $file_upload,
					'product_category' => $this->input->post('product_category'),
					'product_category2' => $this->input->post('product_category2'),
					'product_category3' => $this->input->post('product_category3'),
					'product_category4' => $this->input->post('product_category4'),
					'product_subcategory' => $this->input->post('product_subcategory'),
					'product_subcategory2' => $this->input->post('product_subcategory2'),
					'product_subcategory3' => $this->input->post('product_subcategory3'),
					'product_subcategory4' => $this->input->post('product_subcategory4')

		        );
	        	return $this->db
	        				->set('created_at', 'NOW()', FALSE)
	        				->insert('tb_adminproduct', $newdata);
    	}

    	public function editProduct($pro_id, $newdata)
		{

	        $config['upload_path'] = './application/upload/product/';  // โฟลเดอร์ ตำแหน่งเดียวกับ root ของโปรเจ็ค
	        $config['allowed_types'] = 'gif|jpg|png|jpeg'; // ปรเเภทไฟล์
	        $config['max_size']     = '0';  // ขนาดไฟล์ (kb)  0 คือไม่จำกัด ขึ้นกับกำหนดใน php.ini ปกติไม่เกิน 2MB
	        $config['max_width'] = '1200';  // ความกว้างรูปไม่เกิน
	        $config['max_height'] = '1100'; // ความสูงรูปไม่เกิน
	        $config['file_name'] = '';  // ชื่อไฟล์ ถ้าไม่กำหนดจะเป็นตามชื่อเพิม

	        $this->upload->initialize($config);    // เรียกใช้การตั้งค่า
	        $this->upload->do_upload('file_img'); // ทำการอัพโหลดไฟล์จาก input file ชื่อ file_img

	        $file_upload=$this->input->post('h_file_img');  // เก็บชื่อไฟล์เพิ่ม ถ้าหากว่ามี
	        if(!$this->upload->display_errors()){ // ถ้าไม่มี error อัพไฟล์ได้ ให้เอาใช้ไฟล์ใส่ตัวแปร ไว้บันทึกลงฐานข้อมูล
	        	$file_upload=$this->upload->data('file_name'); // ทำการเก็บชื่อไฟล์ใหม่
	        }else{
	        	// ถ้า Error ในกรณีเลือกไฟล์ไม่ผ่าน
	        	if($this->upload->data('file_type')){ //ถ้าระเภทไฟล์ไม่ถูกต้อง
	        		return; // ให้ทำการ Return เพื่อแสดง Error
	        	}
	        }
		        $newdata = array(
		            'product_title' => $this->input->post('product_title'),
					'product_name' => $this->input->post('name_product'),
					'product_pn' => $this->input->post('part_number'),
					'product_mprice' => $this->input->post('main_price'),
					'product_vprice' => $this->input->post('volume_price'),
					'product_vprice1' => $this->input->post('volume_price1'),
					'product_vprice2' => $this->input->post('volume_price2'),
					'product_vprice3' => $this->input->post('volume_price3'),
					'product_vprice4' => $this->input->post('volume_price4'),
					'product_stock' => $this->input->post('inout_stock'),
					'product_detail' => $this->input->post('description'),
					'product_img' => $file_upload,
					'product_category' => $this->input->post('product_category'),
					'product_category2' => $this->input->post('product_category2'),
					'product_category3' => $this->input->post('product_category3'),
					'product_category4' => $this->input->post('product_category4'),
					'product_subcategory' => $this->input->post('product_subcategory'),
					'product_subcategory2' => $this->input->post('product_subcategory2'),
					'product_subcategory3' => $this->input->post('product_subcategory3'),
					'product_subcategory4' => $this->input->post('product_subcategory4'),
					'updated_at' => date('Y-m-d H:i:s')

		        );
	        		return $this->db->update($this->tableproduct, $newdata, ['product_id'=>$pro_id]);
    	}

    	public function delete_product($pro_id)
		{
			$this->db->delete($this->tableproduct, ['product_id'=>$pro_id]);
		}




// End Product 

// Start Category

    	// get field จากตาราง tb_adminproduct ทั้งหมดไปแสดงใน productlist.php
		public function get_category()
		{
			return $this->db->get($this->tablecategory)->result();
		}

		public function insert_category($value)
		{
			$this->db
				->set('created_at','NOW()',FALSE)
				->insert($this->tablecategory, $value);
		}

		// get ID จากตาราง tb_category โดยเอาค่า ID ไปแสดงใน edit.php
		public function get_category_byid($cat_id)
		{
			return $this->db
						->get_where($this->tablecategory, ['cat_id'=>$cat_id])
						->row();
		/*	$query = $this->db
						->get_where($this->tablemenu, ['id'=>$id]);
			$row = $query->row();

			return $row;
		*/
		}

		public function update_category($cat_id, $value)
		{
			$this->db->set('updated_at','NOW()',FALSE);
			$this->db
				 ->update($this->tablecategory, $value, ['cat_id'=>$cat_id]);
		}

		public function delete_category($cat_id)
		{
			$this->db->delete($this->tablecategory, ['cat_id'=>$cat_id]);
		}

		public function get_subcategorywindows()
		{
			$windows = 'Windows';
			return $this->db->select('*')
								->from('tb_subcategory')
								->where('cat_name',$windows)
								->get()
								->result();
		}

		public function get_subcategoryoffice()
		{
			$office = 'Office';
			return $this->db->select('*')
								->from('tb_subcategory')
								->where('cat_name',$office)
								->get()
								->result();
		}

		public function get_subcategorymicrosoft()
		{
			$microsoft = 'Microsoft';
			return $this->db->select('*')
								->from('tb_subcategory')
								->where('cat_name',$microsoft)
								->get()
								->result();
		}

		public function get_subcategoryadobe()
		{
			$adobe = 'Adobe';
			return $this->db->select('*')
								->from('tb_subcategory')
								->where('cat_name',$adobe)
								->get()
								->result();
		}

		public function get_subcategoryautocad()
		{
			$autocad = 'AutoCAD';
			return $this->db->select('*')
								->from('tb_subcategory')
								->where('cat_name',$autocad)
								->get()
								->result();
		}


// End Category

// Start Slide Product

		// get field จากตาราง tb_adminslidepost ทั้งหมดไปแสดงใน slidelist.php
		public function get_productslide()
		{
			return $this->db->get($this->tableproductslide)->result();
		}

		// get ID จากตาราง tb_adminslidepost โดยเอาค่า ID ไปแสดงใน slide/edit.php
		public function get_productslide_byid($slide_id)
		{
			return $this->db
						->get_where($this->tableproductslide, ['slide_id'=>$slide_id])
						->row();
		}

		public function createSlide($newdata)
		{

	        $config['upload_path'] = './application/upload/productslide/';  // โฟลเดอร์ ตำแหน่งเดียวกับ root ของโปรเจ็ค
	        $config['allowed_types'] = 'gif|jpg|png|jpeg'; // ปรเเภทไฟล์ 
	        $config['max_size'] = '0';  // ขนาดไฟล์ (kb)  0 คือไม่จำกัด ขึ้นกับกำหนดใน php.ini ปกติไม่เกิน 2MB
	        $config['max_width'] = '1920';  // ความกว้างรูปไม่เกิน
	        $config['max_height'] = '1200'; // ความสูงรูปไม่เกิน
	        $config['min_width'] = '1200'; // ความกว้างรูปไม่ต่ำกว่า
	        $config['min_height'] = '768'; // ความสูงรูปไม่ต่ำกว่า
	        $config['file_name'] = '';  // ชื่อไฟล์ ถ้าไม่กำหนดจะเป็นตามชื่อเพิม

	        $this->upload->initialize($config);    // เรียกใช้การตั้งค่า
	        $this->upload->do_upload('slide_image'); // ทำการอัพโหลดไฟล์จาก input file ชื่อ slide_image

	         $file_upload=""; // กำหนดชื่อไฟล์เป็นค่าว่าง
	        if(!$this->upload->display_errors()){ // ถ้าไม่มี error อัพไฟล์ได้ ให้เอาใช้ไฟล์ใส่ตัวแปร ไว้บันทึกลงฐานข้อมูล
	        	$file_upload=$this->upload->data('file_name');
	        }
		        $newdata = array(
		            'slide_id' => NULL,
					'slide_title' => $this->input->post('slide_title'),
					'slide_subdescription' => $this->input->post('slide_subdescription'),
					'slide_main_price' => $this->input->post('slide_main_price'),
					'slide_volume_price' => $this->input->post('slide_volume_price'),
					'slide_image' => $file_upload,
					'slide_description' => $this->input->post('slide_description'),
					'slide_category' => $this->input->post('slide_category')
		        );

	        	return $this->db
	        				->set('created_at', 'NOW()', FALSE)
	        				->insert($this->tableproductslide, $newdata);



		        /*echo "<pre>";
		        print_r($input);
		        exit;*/
        	}

    	public function editProductSlide($slide_id, $newdata)
		{

	        $config['upload_path'] = './application/upload/productslide/';  // โฟลเดอร์ ตำแหน่งเดียวกับ root ของโปรเจ็ค
	        $config['allowed_types'] = 'gif|jpg|png|jpeg'; // ปรเเภทไฟล์ 
	        $config['max_size']     = '0';  // ขนาดไฟล์ (kb)  0 คือไม่จำกัด ขึ้นกับกำหนดใน php.ini ปกติไม่เกิน 2MB
	        $config['max_width'] = '1920';  // ความกว้างรูปไม่เกิน
	        $config['max_height'] = '1200'; // ความสูงรูปไม่เกิน
	        $config['min_width'] = '1200'; // ความกว้างรูปไม่ต่ำกว่า
	        $config['min_height'] = '768'; // ความสูงรูปไม่ต่ำกว่า
	        $config['file_name'] = '';  // ชื่อไฟล์ ถ้าไม่กำหนดจะเป็นตามชื่อเพิม
	 
	        $this->upload->initialize($config);    // เรียกใช้การตั้งค่า  
	        $this->upload->do_upload('slide_image'); // ทำการอัพโหลดไฟล์จาก input file ชื่อ slide_image
	         
	        $file_upload=$this->input->post('h_slide_image');  // เก็บชื่อไฟล์เพิ่ม ถ้าหากว่ามี
	        if(!$this->upload->display_errors()){ // ถ้าไม่มี error อัพไฟล์ได้ ให้เอาใช้ไฟล์ใส่ตัวแปร ไว้บันทึกลงฐานข้อมูล
	        	$file_upload=$this->upload->data('file_name'); // ทำการเก็บชื่อไฟล์ใหม่
	        }else{
	        	// ถ้า Error ในกรณีเลือกไฟล์ไม่ผ่าน
	        	if($this->upload->data('file_type')){ //ถ้าระเภทไฟล์ไม่ถูกต้อง
	        		return; // ให้ทำการ Return เพื่อแสดง Error
	        	}
	        }
		        $newdata = array(
					'slide_title' => $this->input->post('slide_title'),
					'slide_subdescription' => $this->input->post('slide_subdescription'),
					'slide_main_price' => $this->input->post('slide_main_price'),
					'slide_volume_price' => $this->input->post('slide_volume_price'),
					'slide_description' => $this->input->post('slide_description'),
					'slide_category' => $this->input->post('slide_category'),
					'slide_image' => $file_upload,
					'updated_at' => date('Y-m-d H:i:s')
		        );
	        		return $this->db->update($this->tableproductslide, $newdata, ['slide_id'=>$slide_id]);
    	}

    	public function delete_productslide($slide_id)
		{
			$this->db->delete($this->tableproductslide, ['slide_id'=>$slide_id]);
		}

// End Slide Product

	}