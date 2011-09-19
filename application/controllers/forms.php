<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends CI_Controller {
	
	
   public function __construct(){
   	
        parent::__construct();
        
        $this->user_id = 1;
        
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
   
   public function digital(){
   	
        $data = array(
        	'which_request' => 'Digital'
        );
   	
				$this->load->view('forms/digital_view', 
					array(
					'data' => $data
					)
				);  
   	
 
   }
   
   
   
   public function print_form(){
   	
        $data = array(
        	'which_request' => 'Print'
        );
   	
				$this->load->view('forms/print_view', 
					array(
					'data' => $data
					)
				);  
   	
 
   }
   
   public function onair(){
   	
        $data = array(
        	'which_request' => 'On Air GFX'
        );
   	
				$this->load->view('forms/onair_view', 
					array(
					'data' => $data
					)
				);  
   	
 
   }   
   

   public function update(){
   	
	 		$this->load->library('custom');
	 		
			echo $this->custom->update( 
						$this->user_id, 
						$this->input->post() 
				 		);
 
   }   
   
   
   

   public function test(){

		$table = 'digital';
		$this->my_database_model->	create_generic_table($table );
		
		$table = 'print';
		$this->my_database_model->	create_generic_table($table );
		
		$table = 'air';
		$this->my_database_model->	create_generic_table($table );
		
//
//$fields_array = array(
//                      'press_picture_checkbox' => array(
//                                               'type' => 'int(1)'
//                                    ),
//                      'links_picture_checkbox' => array(
//                                               'type' => 'int(1)'
//                                    ),
//                      'contact_picture_checkbox' => array(
//                                               'type' => 'int(1)'
//                                    ),
//                      'bio_picture_checkbox' => array(
//                                               'type' => 'int(1)'
//                                    )
//              ); 
//              
//              
//              
//$this->my_database_model->add_column_to_table_if_exist(
//	$table, 
//	$fields_array
//);
		
		
		   
		}
}

/* End of file welcome.php */
/* Location: ./application/controllers/forms.php */