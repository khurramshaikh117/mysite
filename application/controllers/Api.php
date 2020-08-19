<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	/**
	 * API controller for HashOne applion
	 */



	public function __construct() {
	
        parent::__construct();
        $this->load->model('My_model', 'sm');
    }


	public function index()
	{	

		$this->api_handler($post_data);

	}



	function api_handler(){

		$post_data            = $this->input->post();
		// $post_data['action']  = 'checkUserExist';
		$action               = $post_data['action'];
		if(!empty($action)){
			$response         = $this->$action($post_data);	
		}
		
		$return['status']     = true;
		$return['data']       = $response;             
		echo json_encode($return);
	}

	function checkUserExist($data){
		$email = $data['email'];
		$select_param['env']              = 'default';        
        $select_param['select_data']      = 'b.*';
        $select_param['table_name']       = 'ks_hashone_users b';
        $select_param['where']            = true;
        $select_param['where_data']       = ['b.email'=> $email];
        // $select_param['print_query_exit']       = true;
        $rows  = $this->sm->get_table_data_with_type($select_param);
        if(!$rows){
        	$response = $this->registerUser($data);
        }else{
            $user_id = $rows[0]->id;
            $session                = array();
	        $session['user_id']     = $user_id;
	        $session['name']        = $data['name'];
	        $session['email']       = $data['email'];
	        $session['profile_pic'] = $data['profileImg'];
	        $session['redirect']    = 'index';
	     	$response['status']     = true;
	        $response['session']    = $session;
        }
		return $response;
	}

	function registerUser($data){
		$return               = [];
		$params['env']        = 'default';
        $params['table_name'] = 'ks_hashone_users';
        $params['data']  = array(
            'name'       => $data['name'],
            'email'      => $data['email'],
            'profile_pic'=> $data['profileImg'],
            'created_on' => date('Y-m-d H:i:s'),
            'created_by' => 'system'
        );
            // $params['print_query_exit']       = true;
        $user_id = $this->sm->insert_table_data($params);
        if($user_id){
			$session                = array();
	        $session['user_id']     = $user_id;
	        $session['name']        = $data['name'];
	        $session['email']       = $data['email'];
	        $session['profile_pic'] = $data['profileImg'];
	        $session['redirect']    = 'index';
	     	$return['status']       = true;
	        $return['session']      = $session;
        }else{

        	$return['status']       = false;
	        $return['msg']          = 'Something went wrong ! Could not complete registration';
        }
        
        return $return;


	}

	function loginUser($data){
		
	}
}
