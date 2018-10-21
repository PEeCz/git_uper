<?php

	class Invoice_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function selectAllInvoice()
		{
			return $this->db->select('*')
						->from('tb_order')
						->join('tb_member','tb_member.id=tb_order.member_id')
						->join('tb_shipping','tb_shipping.shipping_id=tb_order.shipping_id')
						->get()
						->result();
		}

		public function orderInfoById($order_id)
		{
			return $this->db->select('*')
					->from('tb_order')
					->where('order_id',$order_id)
					->get()
					->row();
		}

		public function customerInfoById($member_id)
		{
			return $this->db->select('*')
					->from('tb_member')
					->where('id',$member_id)
					->get()
					->row();
		}

		public function shippingInfoById($shipping_id)
		{
			return $this->db->select('*')
					->from('tb_shipping')
					->where('shipping_id',$shipping_id)
					->get()
					->row();
		}

		public function orderDetailsInfoById($order_id)
		{
			return $this->db->select('*')
					->from('tb_orderdetails')
					->where('order_id',$order_id)
					->get()
					->result();
		}

		public function paymentDetailsInfoById($payment_id)
		{
			return $this->db->select('*')
						->from('tb_payment')
						->where('payment_id',$payment_id)
						->get()
						->row();
		}

		public function saveCreateInvoice()
		{
			$data = array(
						'edittext_invoice_id' => NULL,
						'month_created' => $this->input->post('month_created'),
						'reference_number' => $this->input->post('reference_number'),
						'txt_thankyou' => $this->input->post('txt_thankyou'),
						'txt_linkwebsite' => $this->input->post('txt_linkwebsite'),
						'txt_phone' => $this->input->post('txt_phone'),
						'txt_emailcontact' => $this->input->post('txt_emailcontact'),
						'order_id' => $this->input->post('order_id')
					);
			$this->db->insert('tb_edittext_invoice', $data);
		}

		public function viewSlipInvoice($order_id)
		{
			return $this->db->select('*')
					->from('tb_edittext_invoice')
					->where('order_id',$order_id)
					->get()
					->row();
		}

		public function pendingOrderInfo($order_id)
		{
			$this->db->set('order_status','Pending');
			$this->db->where('order_id',$order_id);
			$this->db->update('tb_order');
		}

		public function unpendingOrderInfo($order_id)
		{
			$this->db->set('order_status','Success');
			$this->db->where('order_id',$order_id);
			$this->db->update('tb_order');
		}

		public function pendingPaymentInfo($payment_id)
		{
			$this->db->set('payment_status','Pending');
			$this->db->where('payment_id',$payment_id);
			$this->db->update('tb_payment');
		}

		public function unpendingPaymentInfo($payment_id)
		{
			$this->db->set('payment_status','Success');
			$this->db->where('payment_id',$payment_id);
			$this->db->update('tb_payment');
		}
	}