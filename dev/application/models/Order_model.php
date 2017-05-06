<?php
class Order_model extends CI_Model
{

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }

    public function insOrder()
    {
    	$refno = "PN".strtotime(date('Y-m-d H:i:s.u'));
    	$data = array(
    		'order_reference_no' => $refno,
    		'final_order_value' => '800',
    		'name' => trim($_SESSION['user_info']['name']),
    		'email' => trim($_SESSION['user_info']['email']),
    		'contact' => trim($_SESSION['user_info']['contact']),
    		'alternate_contact' => trim($_SESSION['user_info']['alternate_contact']),
    		'vendor' => trim($_SESSION['user_info']['vendor']),
    		'created_on' => date("Y-m-d H:i:s")
    		);
    	$this->db->insert('print_paytm_order', $data);
    	return $this->db->insert_id();

    }


    public function insOrderDetail($orderid)
    {
    	foreach( $_SESSION['data'] as $key => $value )
    	{
    		$printPages = ($value['optradio']=="cus")?"Custom":"All";
    		$data = array(
    			'order_reference_id' => $orderid,
    			'file_name' => $_SESSION['file'][$key],
    			'print_page' => $printPages,
    			'paper_size' => $value['paper_size'],
    			'print_option' => $value['print_option'],
    			'slides_per_page' => $value['pages'],
    			'orientation' => $value['orientation'],
    			'sides' => $value['print_sided'],
    			'copy_count' => trim($value['no_of_copy']),
    			'page_count' => trim($value['total_no_pages']),
    			'page_from' => trim($value['from']),
    			'page_to' => trim($value['to']),
    			'binding' => $value['binding'],
    			'pickup_date' => trim($value['pick_up_date'])
    		);

    		$this->db->insert('print_paytm_order_detail', $data);
    	}
    }

}
?>