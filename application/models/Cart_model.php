<?php

	class Cart_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

	    public function getcartlist()
	    {
	        $rs = $this->db->get('tb_adminproduct')->result_array();
	        return $rs;
	    }

	    public function get_productid($productid)
	    {
	    	$rs = $this->db->where('product_id',$productid)->get('tb_adminproduct')->row_array();
	    	return $rs;
	    }

	    public function get_total_vat()
	    {
	    	$price = $this->cart->total();
            $vatcalc = 7/100;

            $totalvat = $price*$vatcalc;
            return $totalvat;
	    }

	    public function get_balance_total()
	    {
	    	$price = $this->cart->total();
            $vatcalc = 7/100;

            $totalvat = $price*$vatcalc;

	    	$vat = $totalvat;
			$balance = $price+$vat;
			return $balance;
	    }

	    public function createShippingAddress()
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
					'product_category' => $this->input->post('product_category')

		        );
	        	return $this->db
	        				->set('created_at', 'NOW()', FALSE)
	        				->insert('tb_adminproduct', $newdata);
	    }
	}