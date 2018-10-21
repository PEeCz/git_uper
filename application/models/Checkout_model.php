<?php

	class Checkout_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function saveShippingDetails($data)
		{
			$this->db->set('shipping_created_at', 'NOW()', FALSE)
	        		->insert('tb_shipping',$data);
			$shipping_id = $this->db->insert_id();
			return $shipping_id;
		}

		public function savePaymentInfo($data)
		{
			$this->db->insert('tb_payment',$data);
			$payment_id = $this->db->insert_id();
			return $payment_id;
		}

		public function saveOrderInfo($data)
		{
			$this->db->insert('tb_order',$data);
			$payment_id = $this->db->insert_id();
			return $payment_id;
		}

		public function saveOrderDetailsInfo($data)
		{
			$this->db->insert('tb_orderdetails',$data);
			$payment_id = $this->db->insert_id();
			return $payment_id;
		}

		public function selectOrderFinish()
		{
			/*$this->db->select('*');
			$this->db->from('tb_order');
			//$this->db->join('tb_orderdetails','tb_order.order_id=tb_orderdetails.order_id');
			$this->db->join('tb_payment','tb_order.order_id=tb_payment.payment_id');
			$this->db->join('tb_shipping','tb_order.order_id=tb_payment.payment_id');*/

			//return $result;

			/*echo "<pre>";
			print_r($result);
			exit();*/
		}
	}