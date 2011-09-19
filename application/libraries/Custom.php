<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Custom Library Related to SceneCredit
 * @autoloaded YES
 * @path \system\application\libraries\Custom.php
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @copyright 2010 Prospace LLC
 * @version 1.0
 * 
 */
class Custom {

private $CI;			// CodeIgniter instance


function custom(){
	
	$this->CI =& get_instance();	
	
}



/**
 * Get users
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return array $users */ 
	
	function get_users( $user_id){
		
		$join_array = array(
									'templates' => 'users.template_id = templates.id'
									);
		
			return $this->CI->my_database_model->select_from_table( 
			$table = 'users', 
			$select_what = 'users.*, templates.name as template_name', 
			$where_array = array('users.id' => $user_id), 
			$use_order = FALSE, 
			$order_field = '', 
			$order_direction = 'desc', 
			$limit = 1, 
			$use_join = TRUE, 
			$join_array
			);
			
	}
	

	/**
	 * register_process
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @access public
	 */
	 
	function register_process( $post_array ){	
		
		
		if( $post_array['email'] == ''){
			return array(
				'is'=>'false',
				'key'=>'email',
				'message'=>'Email field must not be blank.'
			);
		};

		if( $post_array['password'] == ''){
			return array(
				'is'=>'false',
				'key'=>'password',
				'message'=>'Password field must not be blank.'
			);
		};
		

		$table = 'users';
		
	  $where_array = array('email' => $post_array['email']);

	  if( $this->CI->my_database_model->check_if_exist($where_array, $table)){
	   	
	   			$validation['is'] = 'false';
	   			$validation['key']='email';
	   			$validation['message']='You have already registered on this site.';
	   	
	   			return $validation;


	  }else{
	  	
	  	
	  			$this->CI->load->helper('security');
	  	
					$insert_what = array(
					                        'email' => $post_array['email'],
					                        'password' =>   do_hash(  $post_array['password'], 'md5' ),
					                        'template_id' => 1
					                );
					
					$user_id = $this->CI->my_database_model->insert_table(
													$table, 
													$insert_what
													); 
													
					$insert_what = array(
					                        'user_id' => $user_id
					                );
					
					$user_id = $this->CI->my_database_model->insert_table(
													$table= 'resumes', 
													$insert_what
													); 													
					
//					$this->CI->load->library('email');
//
//					$this->CI->email->from('jamesming#gmail.com', 'James Ming');
//					$this->CI->email->to($post_array['email']);
//					// $this->CI->email->cc('another@another-example.com');
//					// $this->CI->email->bcc('them@their-example.com');
//					
//					$this->CI->email->subject('Email Test');
//					$this->CI->email->message( base_url().'index.php/home/validate_account/' . $user_id);
//					
//					$this->CI->email->send();
					
					
					/** SEND EMAIL OUT	
					** $url = '<?php echo base_url    ?>index.php/home/validate_account/' . $user_id;
					**/
					
					$validation['is'] = 'true';				
					$validation['key']= 'email';								
					$validation['message']='Thank you for registering.  Please check your email to continue the registration process.';							
													
		   		return 	$validation	;							
					  	
		}



	
	}
	
	/**
	 * login_process
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @access public
	 */
	
	
	public function login_process(  $post_array ){
		
		$table = 'users';
		
		if( $post_array['email'] == ''){
			return array(
				'is'=>'false',
				'key'=>'email',
				'message'=>'Email field must not be blank.'
			);
		};

		if( $post_array['password'] == ''){
			return array(
				'is'=>'false',
				'key'=>'password',
				'message'=>'Password field must not be blank.'
			);
		};
		
	  if( !$this->CI->my_database_model->check_if_exist(
	  	$where_array = array('email' => $post_array['email']), 
	  	$table
	  )){
	   	
			return array(
				'is'=>'false',
				'key'=>'email',
				'message'=>'Account is not found in system.'
			);

	  }


		$where_array = array(
			'email' => $post_array['email'],
			'password' => md5($post_array['password'])
		);
		
		$users = $this->CI->my_database_model->select_from_table( 
			$table, 
			$select_what =  'id, welcomed', 
			$where_array, 
			$use_order = FALSE, 
			$order_field = '', 
			$order_direction = 'desc', 
			$limit = 1
			);

	  if( count( $users ) > 0 ){
		
					return array(
						'is'=>'true',
						'id'=>$users[0]->id,
						'welcomed'=>$users[0]->welcomed
					);	
		
		}else{
		
			return array(
				'is'=>'false',
				'key'=>'password',
				'message'=>'Wrong password submitted.'
			);		
		
		};
						
	}
		
	
	/**
	 * check_for_duplicate_email
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @access public
	 */
	 
	public function check_for_duplicate_email($email){	

		$table = 'users';
		
		$where_array = array('email' => $email);

	  if( $this->CI->my_database_model->check_if_exist($where_array, $table)){
	   	
				echo 'true';

		}else{
	   	
				echo 'false';	
		}

	}
	
	

	
	
/**
 * update_checkbox( 
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return string  */ 
	
	function update_checkbox( $user_id, $post_array ){

			return $this->CI->my_database_model->update_table_where(
								$table = $post_array['table'], 
								$where_array = array('id' => $user_id ), 
								$set_what_array =  array(
										$post_array['field'] => $post_array['checked']
									)
						);
		
		
		
	}
	
/**
 * update_radio( 
 *
 * {@source }
 * @package BackEnd
 * @author James Ming <jamesming@gmail.com>
 * @access public
 * @return string  */ 
	
	function update( $user_id = 1, $post_array ){
	
				foreach( $post_array  as  $key => $value){
					
						$fields_array = array(
						                      $key => array(
						                                               'type' => 'varchar(255)'
						                                    )
						              ); 	
						              
						$this->CI->my_database_model->add_column_to_table_if_exist(
						$table='digital', 
						$fields_array
						);		              	
					
				}

/*			return $this->CI->my_database_model->update_table_where(
								$table = $post_array['table'], 
								$where_array = array('id' => $user_id ), 
								$set_what_array =  array(
										$post_array['field'] => $post_array['value']
									)
						);
*/
		

		
	}	
	
	
}


/* End of file Tool.php */ 
/* Location: \system\application\libraries\Custom.php */
