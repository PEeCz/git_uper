<?php
class Contact_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation'); // เรียกใช้ form validation
        $this->form_validation->set_error_delimiters('<div class="bg-danger" style="padding:3px 10px;">', '</div>');
        $this->load->library('user_agent');  /// เรียกใช้ user agent class
        $this->load->library('email');  // เรียกใช้ email class
    }

    // สร้างฟังก์ชั่นสำหรับส่งอีเมล โดยรับค่าตัวแปร $mailData เป้น array
    public function send($mailData){

        /// BEGIN MAIL SETTINGS
//        $config['mailtype'] = 'html';
//        $config['wordwrap'] = TRUE;
//        $this->email->initialize($config);
        ///// END MAIL SETTINGS

        // ส่งจากอีเมล - ชื่อ
        $this->email->from($mailData['mail_email'],$mailData['mail_name']);
        $this->email->to('demo@localhost.com','Demo User'); // ส่งถึง

        $this->email->subject($mailData['mail_title']); // หัวข้อที่ส่ง
        $this->email->message($mailData['mail_detail']);  // รายละเอียด
        return $this->email->send();   // คืนค่าการทำงานว่าเป็น true หรือ false

    }
}