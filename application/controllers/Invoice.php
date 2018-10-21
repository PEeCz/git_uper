<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
	class Invoice extends CI_Controller
	{
	    public function __construct()
	    {
	        parent::__construct();
	    }

	    public function manageInvoice()
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	//$data['permission'] = $this->checkPermission();
		    	//$data['member'] = $this->user_session();

		    	$data['all_invoice'] = $this->Invoice_model->selectAllInvoice();


		    	$data['header1'] = "backend/srcback/Header_v1";
		    	$data['sidebar1'] = "backend/srcback/Sidebar_v1";
		    	$data['content1'] = "backend/srcback/invoice/table_invoice";
		    	$data['settingbar1'] = "backend/srcback/Settingbar_v1";


		    	$this->load->view('backend/template/dashboard', $data);
		    }
	    }

	    public function viewInvoice($order_id)
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	//$data['permission'] = $this->checkPermission();
		    	//$data['member'] = $this->user_session();

				$order_info = $this->Invoice_model->orderInfoById($order_id);
				$data['order_information'] = $this->Invoice_model->orderInfoById($order_id);
				$data['customer_info'] = $this->Invoice_model->customerInfoById($order_info->member_id);
				$data['shipping_info'] = $this->Invoice_model->shippingInfoById($order_info->shipping_id);
				$data['order_details'] = $this->Invoice_model->orderDetailsInfoById($order_info->order_id);
				$data['payment_details'] = $this->Invoice_model->paymentDetailsInfoById($order_info->payment_id);

				/*echo "<pre>";
				print_r($data);
				exit();*/


		    	$data['header1'] = "backend/srcback/Header_v1";
		    	$data['sidebar1'] = "backend/srcback/Sidebar_v1";
		    	$data['content1'] = "backend/srcback/invoice/customer_table";
		    	$data['content2'] = "backend/srcback/invoice/shipping_table";
		    	$data['content3'] = "backend/srcback/invoice/view_invoice";
		    	$data['content4'] = "backend/srcback/invoice/payment_table";
		    	$data['settingbar1'] = "backend/srcback/Settingbar_v1";


		    	$this->load->view('backend/template/dashboard', $data);
		    }
	    }

	    public function viewSlipInvoice($order_id)
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	//$data['permission'] = $this->checkPermission();
		    	//$data['member'] = $this->user_session();

				$order_info = $this->Invoice_model->orderInfoById($order_id);
				$data['order_information'] = $this->Invoice_model->orderInfoById($order_id);
				$data['customer_info'] = $this->Invoice_model->customerInfoById($order_info->member_id);
				$data['shipping_info'] = $this->Invoice_model->shippingInfoById($order_info->shipping_id);
				$data['order_details'] = $this->Invoice_model->orderDetailsInfoById($order_info->order_id);
				$data['viewslip_invoicetext'] = $this->Invoice_model->viewSlipInvoice($order_info->order_id);


		    	$data['header1'] = "backend/srcback/Header_v1";
		    	$data['sidebar1'] = "backend/srcback/Sidebar_v1";
		    	$data['content1'] = "backend/srcback/invoice/view_slipinvoice";
		    	$data['settingbar1'] = "backend/srcback/Settingbar_v1";


		    	$this->load->view('backend/template/dashboard', $data);
		    }
	    }

	    public function createInvoice($order_id)
	    {
	    	if($_SESSION['ses_user_level']==0){
	    		redirect(base_url());
	    	}else{
		    	//$data['permission'] = $this->checkPermission();
		    	//$data['member'] = $this->user_session();

				$data['order_info'] = $this->Invoice_model->orderInfoById($order_id);
				/*$data['order_information'] = $this->Invoice_model->orderInfoById($order_id);
				$data['customer_info'] = $this->Invoice_model->customerInfoById($order_info->member_id);
				$data['shipping_info'] = $this->Invoice_model->shippingInfoById($order_info->shipping_id);
				$data['order_details'] = $this->Invoice_model->orderDetailsInfoById($order_info->order_id);*/

				/*echo "<pre>";
				print_r($data);
				exit();*/


		    	$data['header1'] = "backend/srcback/Header_v1";
		    	$data['sidebar1'] = "backend/srcback/Sidebar_v1";
		    	$data['content1'] = "backend/srcback/invoice/create_invoice";
		    	$data['settingbar1'] = "backend/srcback/Settingbar_v1";


		    	$this->load->view('backend/template/dashboard', $data);
		    }
	    }

	    public function saveCreateInvoice()
	    {
	    	$this->Invoice_model->saveCreateInvoice();

	    	redirect('Invoice/manageInvoice');
	    }

	    public function pendingOrder($order_id)
	    {
	    	$this->Invoice_model->pendingOrderInfo($order_id);
	    	redirect('Invoice/manageInvoice');
	    }

	    public function unpendingOrder($order_id)
	    {
	    	$this->Invoice_model->unpendingOrderInfo($order_id);
	    	redirect('Invoice/manageInvoice');
	    }

	    public function pendingPayment($payment_id)
	    {
	    	$this->Invoice_model->pendingPaymentInfo($payment_id);
	    	redirect('Invoice/manageInvoice');
	    }

	    public function unpendingPayment($payment_id)
	    {
	    	$this->Invoice_model->unpendingPaymentInfo($payment_id);
	    	redirect('Invoice/manageInvoice');
	    }
	}

?>