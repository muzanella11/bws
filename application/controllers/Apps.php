<?php

/**
 * @author f1108k
 * @copyright 2015
 */



?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apps extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct(){
    	parent::__construct();
    	$this->data = new StdClass; 
    	$this->load->library('templates');
    	$this->load->model('user_model'); 
    }
	public function index()
	{
	   
	   if($this->session->userdata('id_admin')){
			if($this->session->userdata('step_one') === '0'){
                redirect('apps/step_one');
            }
            else if($this->session->userdata('step_two') === '0'){
                redirect('apps/step_two');
            }
            else {
                $this->data->css   = $this->templates->folder_css(array("bootstrap.min.css","enem_apps.css","animate.css"));
        		$this->data->js    = $this->templates->folder_js(array("bootstrap.min.js"));
                
                $this->data->title           	= "Enem Apps";
                $this->data->content_navigation = "enem_apps/apps/navigation/enem_left_navigation";
        		$this->data->content_header 	= "enem_apps/apps/header/enem_header";
        		$this->data->content_body    	= "enem_apps/apps/dashboard/enem_dashboard";
        		$this->data->content_footer    	= "";
                
                $enem_id = $this->session->userdata('id_admin');
                $data_enem_admin = $this->user_model->getDataEnemAdminById($enem_id);
                
                $this->data->no_avatar = $this->templates->no_avatar();
                
                $this->load->view('enem_apps/apps_main',$this->data);
            }
	   } else {
			redirect('apps/signin');
	   }
	   
    }
    
    public function Slidingmenu(){
        $this->data = new stdClass();
        $this->load->view('enem_apps/apps_slidingmenu');
    }
    
    public function test2(){
        $this->data = new stdClass();
        $this->data->css   = $this->templates->folder_css(array("bootstrap.min.css","enem_apps.css"));
		$this->data->js    = $this->templates->folder_js(array("bootstrap.min.js"));
        
        $this->data->title           	= "Enem Apps";
        $this->data->content_navigation = '';
		$this->data->content_header 	= "";
		$this->data->content_body    	= 'enem_apps/test2';
		$this->data->content_footer    	= '';
        
        $this->load->view('enem_apps/apps_main',$this->data);
    }
    
    public function Test(){
        $this->data = new stdClass();
        $this->data->css   = $this->templates->folder_css(array("bootstrap.min.css","enem_apps.css"));
		$this->data->js    = $this->templates->folder_js(array("bootstrap.min.js"));
        
        $this->data->title           	= "Enem Apps";
		$this->data->content_header 	= "";
		$this->data->content_body    	= '';
		$this->data->content_footer    	= '';
        
        $this->load->view('enem_apps/apps_main',$this->data);
    }
    
    public function Enem_user_signin(){
        $this->data = new stdClass();
        $this->data->css   = $this->templates->folder_css(array("bootstrap.min.css","enem_apps.css","animate.css"));
		$this->data->js    = $this->templates->folder_js(array("bootstrap.min.js"));
        
        $this->data->title           	= "Create Enem User";
        $this->data->content_navigation = '';
		$this->data->content_header 	= "";
		$this->data->content_body    	= 'enem_apps/apps/create_enem_user/enem_user_signin';
		$this->data->content_footer    	= '';
        
        $this->load->view('enem_apps/apps_main',$this->data);
    }
    
    public function Enem_user_signout(){
        //$this->session->sess_destroy();
        //die(var_dump($this->session->userdata()));
        if($this->session->userdata('enem_token')){
			$this->load->model('user_model');
            
            $data_token      =   $this->user_model->getDataTokenUserManagementByToken($this->session->userdata('enem_token'));
                $data_session   =   array(
						'enem_token'           	  =>  $data_token[0]->enem_token,
                );
            
            $this->session->unset_userdata($data_session);
            $this->user_model->offTokenUserManagement($data_token[0]->enem_token);
            redirect('apps/enem_user_signin');
		} else {
            redirect('');
		}
    }
    
    public function Create_enem_user(){
        $this->data = new stdClass();
        $this->load->model('user_model');
        $token = $this->session->userdata('enem_token');
        $data_token = $this->user_model->getDataTokenUserManagementByToken($token);
        
        if(!empty($token) && $token == $data_token[0]->enem_token && $data_token[0]->enem_token_status == 1){
        	$this->data = new stdClass();
            $this->data->css   = $this->templates->folder_css(array("bootstrap.min.css","enem_apps.css","animate.css"));
        	$this->data->js    = $this->templates->folder_js(array("bootstrap.min.js"));
            
            $this->data->title           	= "Create Enem User";
            $this->data->content_navigation = '';
        	$this->data->content_header 	= "";
        	$this->data->content_body    	= 'enem_apps/apps/create_enem_user/create_enem_user';
        	$this->data->content_footer    	= '';
            
            $this->load->view('enem_apps/apps_main',$this->data);
        } else {
        	redirect('apps/enem_user_signin');
        }
    }
    
	public function Signin(){
		//die('haha');
		if(!$this->session->userdata('id_admin')){
            $this->data = new stdClass();
            $this->data->css   = $this->templates->folder_css(array("bootstrap.min.css","enem_apps.css","animate.css"));
            $this->data->js    = $this->templates->folder_js(array("bootstrap.min.js"));
            
            $this->data->title = "Signin Enem Apps";
            $this->data->content_navigation = '';
            $this->data->content_header 	= "";
            $this->data->content_body    = 'enem_apps/apps/signin/enem_apps_signin';
            $this->data->content_footer    = '';
            $this->data->no_avatar		=	$this->templates->no_avatar();
            
            $this->load->view('enem_apps/apps_main',$this->data);
		} else {
		  redirect('apps');
		}
	}
    
    public function Step_one(){
        //die('step one');
        $this->data->css   = $this->templates->folder_css(array("bootstrap.min.css","enem_apps.css","animate.css"));
        $this->data->js    = $this->templates->folder_js(array("bootstrap.min.js"));
        
        $this->data->title = "Enem Apps Step One";
        $this->data->content_navigation = '';
        $this->data->content_header 	= "";
        $this->data->content_body    = 'enem_apps/apps/wizard/enem_apps_step_one';
        $this->data->content_footer    = '';
        $this->data->no_avatar		=	$this->templates->no_avatar();
        
        $this->load->view('enem_apps/apps_main',$this->data);
    }
    
    public function Step_two(){
        //die('step one');
        $this->data->css   = $this->templates->folder_css(array("bootstrap.min.css","enem_apps.css","animate.css"));
        $this->data->js    = $this->templates->folder_js(array("bootstrap.min.js"));
        
        $this->data->title = "Enem Apps Step Two";
        $this->data->content_navigation = '';
        $this->data->content_header 	= "";
        $this->data->content_body    = 'enem_apps/apps/wizard/enem_apps_step_two';
        $this->data->content_footer    = '';
        $this->data->no_avatar		=	$this->templates->no_avatar();
        
        $this->load->view('enem_apps/apps_main',$this->data);
    }
	
	public function Signout(){
	   if($this->session->userdata('id_admin')){
	       $enem_id = $this->session->userdata('id_admin');
           $data_user = $this->user_model->getDataEnemAdminById($enem_id);
           
           $data_session   =   array(
					'id_admin'           	  =>  $data_user[0]->id_enem_user,
					'name'          	  	  =>  $data_user[0]->enem_name,
					'username'       		  =>  $data_user[0]->enem_username,
					'email'					  =>  $data_user[0]->enem_email,
					'status_admin'            =>  $data_user[0]->enem_user_status,
                    'step_one'                =>  $data_user[0]->enem_step_one,
                    'step_two'                =>  $data_user[0]->enem_step_two,
			);
			$this->session->set_userdata($data_session);
            
            redirect('apps/signin');
	   } else {
	       redirect('apps/signin');
	   }
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */