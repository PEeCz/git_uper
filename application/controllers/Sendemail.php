<?php

defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
	class Sendemail extends CI_Controller
	{
	    public function Contact()
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

	    	$this->load->view('frontend/template/Main_v', $data);
	    }

	    public function send()
	    {
	    	$subject = "Question License from ".$this->input->post("name");
	    	$file_data = $this->upload_file();

	    	if(is_array($file_data)){
	    		$message = '
	    		<h3 align="center">License Details</h3>
				<table border="1" width="100%" cellpadding="5">
					<tr>
						<td width="30%">Name</td>
						<td width="70%">'.$this->input->post("name").'</td>
					</tr>
					<tr>
						<td width="30%">Email</td>
						<td width="70%">'.$this->input->post("email").'</td>
					</tr>
					<tr>
						<td width="30%">Subject</td>
						<td width="70%">'.$this->input->post("subject").'</td>
					</tr>
					<tr>
						<td width="30%">Mobile Number</td>
						<td width="70%">'.$this->input->post("mobile").'</td>
					</tr>
					<tr>
						<td width="30%">Details</td>
						<td width="70%">'.$this->input->post("detail").'</td>
					</tr>
				</table>
	    		';
	    		$config = Array(
			         'protocol'  => 'smtp',
			         'smtp_host' => 'smtpout.secureserver.net',
			         'smtp_port' => 80,
			         'smtp_user' => 'xxxxxxxxxx',
			         'smtp_pass' => 'xxxxxxxxxx',
			         'mailtype'  => 'html',
			         'charset'  => 'iso-8859-1',
			         'wordwrap'  => TRUE
			    );
	    		$this->load->library('email', $config);
	    		$this->email->set_newline("\r\n");
	    		$this->email->from($this->input->post("email"));
	    		$this->email->to('support@volumelicense.com');
	    		$this->email->subject($subject);
	    		$this->email->message($message);
	    		$this->email->attach($file_data['full_path']);
	    		if($this->email->send()){
	    			if(delete_files($file_data['file_path'])){
	    				$this->session->set_flashdata('message','Application Sended');
	    				redirect('Sendemail/Contact');
	    			}else{
	    				if(delete_files($file_data['file_path'])){
	    					$this->session->set_flashdata('message','There is an error in attach file');
	    					redirect('Sendemail/Contact');
	    				}
	    			}
	    		}
	    	}else{
	    		$this->session->set_flashdata('message','There is an error in attach file');
	    		redirect('Sendemail/Contact');
	    	}
	    }

	    public function upload_file()
	    {
	    	$config['upload_path'] = './upload/contactemail/';
	    	$config['allowed_types'] = 'doc|docx|pdf|jpg|jpeg|gif|png';
	    	$this->load->library('upload', $config);
	    	if($this->upload->do_upload('filename')){
	    		return $this->upload->data();
	    	}else{
	    		return $this->upload->display_errors();
	    	}
	    }
	}