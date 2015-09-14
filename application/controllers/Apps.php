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
	public function index()
	{
	   $this->data = new stdClass();
	   if($this->session->userdata('user_id')){
			$this->data->css   = $this->templates->folder_css(array("bootstrap.min.css","navbar-fixed-top.css","carousel.css"));
			$this->data->js    = $this->templates->folder_js(array("bootstrap.min.js"));

			$this->data->title           = "Enem Apps";
			$this->data->content_header 	= "templates/header/header_not_login";
			$this->data->content_body    = 'templates/bws';
			$this->data->content_footer    = '';
			$this->data->no_image		=	$this->templates->no_avatar();
			//$this->load->model('user_model');


				$this->load->view('header',$this->data);
				$this->load->view('body');
				$this->load->view('footer');
	   } else {
			redirect('apps/signin');
	   }
	   
    }
	public function Signin(){
		//die('haha');
		$this->data = new stdClass();
		$this->data->css   = $this->templates->folder_css(array("bootstrap.min.css"));
		$this->data->js    = $this->templates->folder_js(array("bootstrap.min.js"));
		
		$this->data->title = "Signin Enem Apps";
		$this->data->content_header 	= "";
		$this->data->content_body    = 'templates/admin/signin/enem_apps_signin';
		$this->data->content_footer    = '';
		$this->data->no_image		=	$this->templates->no_avatar();
		
		$this->load->view('header',$this->data);
		$this->load->view('body');
		$this->load->view('footer');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */