<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First_cordova_app extends CI_Controller {

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

		// $this->load->helper('common');
		$data = [];
		$data['blog'] = $this->getBlogContent();
		$this->load->view('first_cordova_app',$data);
		$this->updateViewCount($data['blog']);
	}

	public function getBlogContent(){
		$select_param['env']              = 'default';        
        $select_param['select_data']      = 'b.id as bid,b.*,bc.*,b.created_on as created';
        $select_param['table_name']       = 'ks_blogs b';
        $select_param['where']            = true;
        // $select_param['where_data']       = ['b.id'=> 2,'b.published'=> 1];
        $select_param['where_data']       = ['b.id'=> 2];
        $select_param['join']             = TRUE;
        $select_param['join_table']       = 'ks_blogs_content bc';
        $select_param['join_type']        = 'LEFT';
        $select_param['join_on']          = 'b.id = bc.blog_id';
        // $select_param['print_query_exit']       = true;
        $data = $this->sm->get_table_data_with_type($select_param);
        return $data[0];
		// echo 'hi';
	}

	 public function updateViewCount($blog){
        // echo '<pre>'; print_r($blog);
        $b_id = $blog->bid;

        $select_param['env']              = 'default';        
        $select_param['select_data']      = 'b.*';
        $select_param['table_name']       = 'ks_blogs b';
        $select_param['where']            = true;
        $select_param['where_data']       = ['b.id'=> $b_id];
        // $select_param['print_query_exit']       = true;
        $data  = $this->sm->get_table_data_with_type($select_param);
        $data  = $data[0];
        $views = $data->views; 
        $newCount = $views + 1;
        $info = [
				'views' => $newCount,
		];
        $upd_info =[];
        $upd_info['env']         = 'default';
        $upd_info['table_name']  = 'ks_blogs';
        $upd_info['update_data'] = $info;
        $upd_info['where_escape']= false;
        $upd_info['where']       = true;
        // $upd_info['print_query_exit']       = true;
        $upd_info['where_data']  = array('id'=>$b_id);
        $update_info = $this->sm->update_table_data_with_type($upd_info);
        // echo $data;

    }

}
