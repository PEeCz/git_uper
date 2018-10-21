<?php

	class Get_model extends CI_Model
	{
		// กำหนด $tablemenu = ชื่อตาราง
		private $tablemenu = 'tb_adminmenu';
		private $tableproduct = 'tb_adminproduct';
		private $tablecategory = 'tb_category';
		private $tablesubmenu = 'tb_adminsubmenu';
		private $tableslidepost = 'tb_adminslidepost';

		public function __construct()
		{
			parent::__construct();
		}

		/////// GET Sub Category Adobe ///////

		public function getProductBySubCategoryAdobe1()
		{
			return $this->db->select('*')
						->from('tb_adminproduct')
						->where('product_category','Adobe')
						->where('product_subcategory','Single Apps ลิขสิทธิ์ Upgrade รายปี')
						->get()
						->result();
		}

		public function getProductBySubCategoryAdobe2()
		{
			return $this->db->select('*')
						->from('tb_adminproduct')
						->where('product_category','Adobe')
						->where('product_subcategory','Creative Cloud Team ลิขสิทธิ์ Upgrade รายปี')
						->get()
						->result();
		}

		public function getProductBySubCategoryAdobe3()
		{
			return $this->db->select('*')
						->from('tb_adminproduct')
						->where('product_category','Adobe')
						->where('product_subcategory','Acrobat ลิขสิทธิ์ Upgrade รายปี')
						->get()
						->result();
		}

		public function getProductBySubCategoryAdobe4()
		{
			return $this->db->select('*')
						->from('tb_adminproduct')
						->where('product_category','Adobe')
						->where('product_subcategory','Acrobat ลิขสิทธิ์ถาวร')
						->get()
						->result();
		}

		/////// END GET Sub Category Adobe ///////

	    /////// GET Sub Category Office ///////

		public function getProductBySubCategoryOffice1()
		{
			return $this->db->select('*')
						->from('tb_adminproduct')
						->where('product_category','Office')
						->where('product_subcategory','Office ลิขสิทธิ์ถาวร')
						->get()
						->result();
		}

		public function getProductBySubCategoryOffice2()
		{
			return $this->db->select('*')
						->from('tb_adminproduct')
						->where('product_category','Office')
						->where('product_subcategory','Office ลิขสิทธิ์รายปี')
						->get()
						->result();
		}

		/////// END GET Sub Category Office ///////

	   	/////// GET Sub Category Microsoft ///////

		public function getProductBySubCategoryMicrosoft1()
		{
			return $this->db->select('*')
						->from('tb_adminproduct')
						->where('product_category','Microsoft')
						->where('product_subcategory','On Premise : Desktop')
						->get()
						->result();
		}

		public function getProductBySubCategoryMicrosoft2()
		{
			return $this->db->select('*')
						->from('tb_adminproduct')
						->where('product_category','Microsoft')
						->where('product_subcategory','On Premise : Server')
						->get()
						->result();
		}

		public function getProductBySubCategoryMicrosoft3()
		{
			return $this->db->select('*')
						->from('tb_adminproduct')
						->where('product_category','Microsoft')
						->where('product_subcategory','On Premise : Desktop')
						->get()
						->result();
		}

		public function getProductBySubCategoryMicrosoft4()
		{
			return $this->db->select('*')
						->from('tb_adminproduct')
						->where('product_category','Microsoft')
						->where('product_subcategory','On Cloud')
						->get()
						->result();
		}

		public function getProductBySubCategoryMicrosoft5()
		{
			return $this->db->select('*')
						->from('tb_adminproduct')
						->where('product_category','Microsoft')
						->where('product_subcategory','SQL Server')
						->get()
						->result();
		}

		public function getProductBySubCategoryMicrosoft6()
		{
			return $this->db->select('*')
						->from('tb_adminproduct')
						->where('product_category','Microsoft')
						->where('product_subcategory','Exchange Server')
						->get()
						->result();
		}

		public function getProductBySubCategoryMicrosoft7()
		{
			return $this->db->select('*')
						->from('tb_adminproduct')
						->where('product_category','Microsoft')
						->where('product_subcategory','SQL CAL')
						->get()
						->result();
		}

		public function getProductBySubCategoryMicrosoft8()
		{
			return $this->db->select('*')
						->from('tb_adminproduct')
						->where('product_category','Microsoft')
						->where('product_subcategory','Windows Server CAL')
						->get()
						->result();
		}

		public function getProductBySubCategoryMicrosoft9()
		{
			return $this->db->select('*')
						->from('tb_adminproduct')
						->where('product_category','Microsoft')
						->where('product_subcategory','Exchange Standard CAL')
						->get()
						->result();
		}

		public function getProductBySubCategoryMicrosoft10()
		{
			return $this->db->select('*')
						->from('tb_adminproduct')
						->where('product_category','Microsoft')
						->where('product_subcategory','Exchange Enterprise CAL')
						->get()
						->result();
		}

	    /////// END GET Sub Category Microsoft ///////

		public function getSubMenuByMicrosofttitle1($where1, $where2)
		{
			/*$this->db->select('*');
			$this->db->from($this->tablesubmenu);
			$this->db->order_by('rank','asc');
			$this->db->where('mainmenu_category','Windows');
			$this->db->where('title','On Premise : Desktop');
			return $this->db->get();*/
			$where1 = 'On Premise : Desktop';
			$where2 = 'Microsoft';

			$this->db->select('*')->from($this->tablesubmenu);
			$this->db->where(array('title_submenu'=>$where1,'mainmenu_category'=>$where2));
			$this->db->order_by('rank','asc');
			return $this->db->get()->result_array();

		}

		public function getSubMenuByMicrosofttitle2($where1, $where2)
		{
			/*$this->db->select('*');
			$this->db->from($this->tablesubmenu);
			$this->db->order_by('rank','asc');
			$this->db->where('mainmenu_category','Windows');
			$this->db->where('title','On Premise : Desktop');
			return $this->db->get();*/
			$where1 = 'On Premise : Server';
			$where2 = 'Microsoft';

			$this->db->select('*')->from($this->tablesubmenu);
			$this->db->where(array('title_submenu'=>$where1,'mainmenu_category'=>$where2));
			$this->db->order_by('rank','asc');
			return $this->db->get()->result_array();

		}

		public function getSubMenuByMicrosofttitle3($where1, $where2)
		{
			/*$this->db->select('*');
			$this->db->from($this->tablesubmenu);
			$this->db->order_by('rank','asc');
			$this->db->where('mainmenu_category','Windows');
			$this->db->where('title','On Premise : Desktop');
			return $this->db->get();*/
			$where1 = 'On Cloud';
			$where2 = 'Microsoft';

			$this->db->select('*')->from($this->tablesubmenu);
			$this->db->where(array('title_submenu'=>$where1,'mainmenu_category'=>$where2));
			$this->db->order_by('rank','asc');
			return $this->db->get()->result_array();

		}

		public function getSubMenuByMicrosofttitle4($where1, $where2)
		{
			/*$this->db->select('*');
			$this->db->from($this->tablesubmenu);
			$this->db->order_by('rank','asc');
			$this->db->where('mainmenu_category','Windows');
			$this->db->where('title','On Premise : Desktop');
			return $this->db->get();*/
			$where1 = 'Remote Desktop';
			$where2 = 'Microsoft';

			$this->db->select('*')->from($this->tablesubmenu);
			$this->db->where(array('title_submenu'=>$where1,'mainmenu_category'=>$where2));
			$this->db->order_by('rank','asc');
			return $this->db->get()->result_array();

		}

		public function getSubMenuByMicrosofttitle5($where1, $where2)
		{
			/*$this->db->select('*');
			$this->db->from($this->tablesubmenu);
			$this->db->order_by('rank','asc');
			$this->db->where('mainmenu_category','Windows');
			$this->db->where('title','On Premise : Desktop');
			return $this->db->get();*/
			$where1 = 'Exchange Server';
			$where2 = 'Microsoft';

			$this->db->select('*')->from($this->tablesubmenu);
			$this->db->where(array('title_submenu'=>$where1,'mainmenu_category'=>$where2));
			$this->db->order_by('rank','asc');
			return $this->db->get()->result_array();

		}

		public function getSubMenuByMicrosofttitle6($where1, $where2)
		{
			/*$this->db->select('*');
			$this->db->from($this->tablesubmenu);
			$this->db->order_by('rank','asc');
			$this->db->where('mainmenu_category','Windows');
			$this->db->where('title','On Premise : Desktop');
			return $this->db->get();*/
			$where1 = 'Exchange CAL';
			$where2 = 'Microsoft';

			$this->db->select('*')->from($this->tablesubmenu);
			$this->db->where(array('title_submenu'=>$where1,'mainmenu_category'=>$where2));
			$this->db->order_by('rank','asc');
			return $this->db->get()->result_array();

		}

		public function getSubMenuByMicrosofttitle7($where1, $where2)
		{
			/*$this->db->select('*');
			$this->db->from($this->tablesubmenu);
			$this->db->order_by('rank','asc');
			$this->db->where('mainmenu_category','Windows');
			$this->db->where('title','On Premise : Desktop');
			return $this->db->get();*/
			$where1 = 'SQL Server';
			$where2 = 'Microsoft';

			$this->db->select('*')->from($this->tablesubmenu);
			$this->db->where(array('title_submenu'=>$where1,'mainmenu_category'=>$where2));
			$this->db->order_by('rank','asc');
			return $this->db->get()->result_array();

		}

		public function getSubMenuByMicrosofttitle8($where1, $where2)
		{
			/*$this->db->select('*');
			$this->db->from($this->tablesubmenu);
			$this->db->order_by('rank','asc');
			$this->db->where('mainmenu_category','Windows');
			$this->db->where('title','On Premise : Desktop');
			return $this->db->get();*/
			$where1 = 'SQL CAL';
			$where2 = 'Microsoft';

			$this->db->select('*')->from($this->tablesubmenu);
			$this->db->where(array('title_submenu'=>$where1,'mainmenu_category'=>$where2));
			$this->db->order_by('rank','asc');
			return $this->db->get()->result_array();

		}

/////////////////////// Begin Select Promotion แถวที่ 1-5 ///////////////////////


		public function getSlidePost1($where)
		{
			/*$this->db->select('*');
			$this->db->from($this->tablesubmenu);
			$this->db->order_by('rank','asc');
			$this->db->where('mainmenu_category','Windows');
			$this->db->where('title','On Premise : Desktop');
			return $this->db->get();*/
			$where = 'Windows';

			$this->db->select('*')->from($this->tableslidepost);
			$this->db->where(array('slide_category'=>$where));
			$this->db->order_by('created_at','asc');
			return $this->db->get()->result_array();

		}

		public function getSlidePost2($where)
		{
			/*$this->db->select('*');
			$this->db->from($this->tablesubmenu);
			$this->db->order_by('rank','asc');
			$this->db->where('mainmenu_category','Windows');
			$this->db->where('title','On Premise : Desktop');
			return $this->db->get();*/
			$where = 'Microsoft';

			$this->db->select('*')->from($this->tableslidepost);
			$this->db->where(array('slide_category'=>$where));
			$this->db->order_by('created_at','asc');
			return $this->db->get()->result_array();

		}

		public function getSlidePost3($where)
		{
			/*$this->db->select('*');
			$this->db->from($this->tablesubmenu);
			$this->db->order_by('rank','asc');
			$this->db->where('mainmenu_category','Windows');
			$this->db->where('title','On Premise : Desktop');
			return $this->db->get();*/
			$where = 'Adobe';

			$this->db->select('*')->from($this->tableslidepost);
			$this->db->where(array('slide_category'=>$where));
			$this->db->order_by('created_at','asc');
			return $this->db->get()->result_array();

		}

		public function getSlidePost4($where)
		{
			/*$this->db->select('*');
			$this->db->from($this->tablesubmenu);
			$this->db->order_by('rank','asc');
			$this->db->where('mainmenu_category','Windows');
			$this->db->where('title','On Premise : Desktop');
			return $this->db->get();*/
			$where = 'Office';

			$this->db->select('*')->from($this->tableslidepost);
			$this->db->where(array('slide_category'=>$where));
			$this->db->order_by('created_at','asc');
			return $this->db->get()->result_array();

		}

		public function getSlidePost5($where)
		{
			/*$this->db->select('*');
			$this->db->from($this->tablesubmenu);
			$this->db->order_by('rank','asc');
			$this->db->where('mainmenu_category','Windows');
			$this->db->where('title','On Premise : Desktop');
			return $this->db->get();*/
			$where = 'AutoCAD';

			$this->db->select('*')->from($this->tableslidepost);
			$this->db->where(array('slide_category'=>$where));
			$this->db->order_by('created_at','asc');
			return $this->db->get()->result_array();

		}

/////////////////////// End Select Slide Post แถวที่ 1-5 ///////////////////////


/////////////////////// Begin Select Promotion แถวที่ 1-5 ///////////////////////

		public function getProductPromotion1($where)
		{
			$where = 'Promotion';

			$this->db->select('*')->from($this->tableproduct);
			$this->db->where(array('product_category'=>$where));
			$this->db->order_by('product_id','desc');
			$this->db->limit(1,0);
			return $this->db->get()->result_array();

		}

		public function getProductPromotion2($where)
		{
			$where = 'Promotion';

			$this->db->select('*')->from($this->tableproduct);
			$this->db->where(array('product_category'=>$where));
			$this->db->order_by('product_id','desc');
			$this->db->limit(1,1);
			return $this->db->get()->result_array();

		}

		public function getProductPromotion3($where)
		{
			$where = 'Promotion';

			$this->db->select('*')->from($this->tableproduct);
			$this->db->where(array('product_category'=>$where));
			$this->db->order_by('product_id','desc');
			$this->db->limit(1,2);
			return $this->db->get()->result_array();

		}

		public function getProductPromotion4($where)
		{
			$where = 'Promotion';

			$this->db->select('*')->from($this->tableproduct);
			$this->db->where(array('product_category'=>$where));
			$this->db->order_by('product_id','desc');
			$this->db->limit(1,3);
			return $this->db->get()->result_array();

		}

		public function getProductPromotion5($where)
		{
			$where = 'Promotion';

			$this->db->select('*')->from($this->tableproduct);
			$this->db->where(array('product_category'=>$where));
			$this->db->order_by('product_id','desc');
			$this->db->limit(1,4);
			return $this->db->get()->result_array();

		}

/////////////////////// End Select Promotion แถวที่ 1-5 ///////////////////////

		// ข้อมูลหมวดหมู่ Promotion
	  	public function getAllProductPromotion($perpage,$offset)
		{
			return $this->db->where('product_category','Promotion')->order_by('product_id','desc')->get($this->tableproduct,$perpage,$offset)->result();
		}

		// ข้อมูลหมวดหมู่ Microsoft
	  	public function getAllProductMicrosoft($perpage,$offset)
		{
			return $this->db->where('product_category','Microsoft')->order_by('product_id','desc')->get($this->tableproduct,$perpage,$offset)->result();
		}

		// ข้อมูลหมวดหมู่ Windows
	  	public function getAllProductWindows($perpage,$offset)
		{
			return $this->db->where('product_category','Windows')->order_by('product_id','desc')->get($this->tableproduct,$perpage,$offset)->result();
		}

		// ข้อมูลหมวดหมู่ Office
	  	public function getAllProductOffice($perpage,$offset)
		{
			return $this->db->where('product_category','Office')->order_by('product_id','desc')->get($this->tableproduct,$perpage,$offset)->result();
		}

		// ข้อมูลหมวดหมู่ Adobe
	  	public function getAllProductAdobe($perpage,$offset)
		{
			return $this->db->where('product_category','Adobe')->order_by('product_id','desc')->get($this->tableproduct,$perpage,$offset)->result();
		}

		public function getAllProduct()
		{
			$this->db->select('*')->from($this->tableproduct);
			$this->db->order_by('product_id','desc');

			return $this->db->get()->result_array();
		}

		public function getAllProductLimit()
		{
			$this->db->select('*')->from($this->tableproduct);
			$this->db->order_by('product_id','desc');
			$this->db->limit(6,0);

			return $this->db->get()->result_array();
		}

		public function getFirstProductThreeRecords()
		{
			$this->db->select('*')->from($this->tableproduct);
			$this->db->order_by('product_id','desc');
			$this->db->limit(3,0);

			return $this->db->get()->result_array();
		}

		public function getSecondProductThreeRecords()
		{
			$this->db->select('*')->from($this->tableproduct);
			$this->db->order_by('product_id','desc');
			$this->db->limit(3,3);

			return $this->db->get()->result_array();
		}


/////////////////////// End Select แสดงข้อมูลแต่ละ Category ///////////////////////


/////////////////////// Begin Count Rows Category ///////////////////////
		public function getCountAllProductPromotion($where)
		{
			$where = 'Promotion';

			$this->db->select("count(*)")->from($this->tableproduct);
			$this->db->where(array('product_category'=>$where));

			return $this->db->get();
		}

		public function getCountAllProductWindows($where)
		{
			$where = 'Windows';

			$this->db->select("count(*)")->from($this->tableproduct);
			$this->db->where(array('product_category'=>$where));

			return $this->db->get();
		}

		public function getCountAllProductMicrosoft($where)
		{
			$where = 'Microsoft';

			$this->db->select("count(*)")->from($this->tableproduct);
			$this->db->where(array('product_category'=>$where));

			return $this->db->get();
		}

		public function getCountAllProductAdobe($where)
		{
			$where = 'Adobe';

			$this->db->select("count(*)")->from($this->tableproduct);
			$this->db->where(array('product_category'=>$where));

			return $this->db->get();
		}

		public function getCountAllProductOffice($where)
		{
			$where = 'Office';

			$this->db->select("count(*)")->from($this->tableproduct);
			$this->db->where(array('product_category'=>$where));

			return $this->db->get();
		}

		public function getCountAllProductAutoCAD($where)
		{
			$where = 'AutoCAD';

			$this->db->select("count(*)")->from($this->tableproduct);
			$this->db->where(array('product_category'=>$where));

			return $this->db->get();
		}
/////////////////////// End Count Rows Category ///////////////////////


		public function getProductDetailById($pro_id)
		{
			return $this->db
						->get_where($this->tableproduct, ['product_id'=>$pro_id])
						->row();
		}

	}