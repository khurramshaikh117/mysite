<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
        parent::__construct();
        $this->load->model('My_model', 'sm');
      
    }
	public function index()
	{	
		$data = [];
		$data['active_blogs'] = $this->getActiveBlogs();
		$this->load->view('welcome_message',$data);
	}

	public function getActiveBlogs(){
		$select_param['env']              = 'default';        
        $select_param['select_data']      = '*';
        $select_param['table_name']       = 'ks_blogs';
        $select_param['where']            = true;
        $select_param['where_data']       = ['published'=> 1];
        // $select_param['print_query_exit']       = true;
        $data = $this->sm->get_table_data_with_type($select_param);
        return $data;
		// echo 'hi';
	}
}
