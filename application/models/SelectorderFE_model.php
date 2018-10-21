
<?php

	class SelectorderFE_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function selectAllOrder()
		{
			return $this->db->select('*')
						->from('tb_order')
						->join('tb_member','tb_member.id=tb_order.member_id')
						->join('tb_shipping','tb_shipping.shipping_id=tb_order.shipping_id')
						->join('tb_payment','tb_payment.payment_id=tb_order.payment_id')
						->where('tb_member.id='.$_SESSION['ses_user_id'])
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

		public function shippingInfoById($order_id)
		{
			return $this->db->select('*')
					->from('tb_shipping')
					->join('tb_order','tb_order.shipping_id=tb_shipping.shipping_id')
					->where('tb_order.order_id',$order_id)
					->get()
					->row();
		}

		public function paymentInfoById($order_id)
		{
			return $this->db->select('*')
					->from('tb_payment')
					->join('tb_order','tb_order.payment_id=tb_payment.payment_id')
					->where('tb_order.order_id',$order_id)
					->get()
					->row();
		}

		public function productInfoById($order_id)
		{
			return $this->db->select('*')
					->from('tb_orderdetails')
					->join('tb_order','tb_order.order_id=tb_orderdetails.order_id')
					->where('tb_order.order_id',$order_id)
					->get()
					->result();
		}
	}

?>