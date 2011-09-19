<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends CI_Controller {
	
	
   public function __construct(){
   	
        parent::__construct();
        
        $this->load->library('custom');
        
        $this->data = array();

   }
   

   public function index(){
   	
		$this->load->view('forms/index_view', 
			array(
			'data' => $this->data
			)
		);  
   	
 
   }
   

 
   
}

/* End of file welcome.php */
/* Location: ./application/controllers/forms.php */