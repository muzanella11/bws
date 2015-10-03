<?php

/**
 * @author f1108k
 * @copyright 2015
 */



?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

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
		redirect('');
    }
	public function signin_apps(){
		if($this->input->is_ajax_request()){
			$this->load->model('user_model');
			$variabel = htmlspecialchars($this->input->post('var'));
			$pass	=	htmlspecialchars($this->input->post('pass'));
			
			if(empty($variabel)){
				$dataJson['message']    =   'Masukkan Email atau Username';
				$dataJson['t']          =   0;
				$dataJson['id']         =   'variabel';
			}
			else if(strpos($variabel,'@')){
				$data_user = $this->user_model->getDataAdminByEmail($variabel);
				if(empty($data_user)){
					$dataJson['message']    =   'Email salah';
					$dataJson['t']          =   0;
					$dataJson['id']         =   'variabel';
				}
				else if(empty($pass)){
					$dataJson['message']    =   'Masukkan Password';
					$dataJson['t']          =   0;
					$dataJson['id']         =   'password';
				}
				else if($pass != $data_user[0]->password){
					$dataJson['message']    =   'Password Salah';
					$dataJson['t']          =   0;
					$dataJson['id']         =   'password';
				} else {
					$dataJson['t'] = 1;
				}
			} else {
				$data_user = $this->user_model->getDataAdminByUsername($variabel);
				if(empty($data_user)){
					$dataJson['message'] = 'Username salah';
					$dataJson['t']		 = 0;
					$dataJson['id']		 = 'variabel';
				}
				else if(empty($pass)){
					$dataJson['message']    =   'Masukkan Password';
					$dataJson['t']          =   0;
					$dataJson['id']         =   'password';
				}
				else if($pass != $data_user[0]->password){
					$dataJson['message']    =   'Password Salah';
					$dataJson['t']          =   0;
					$dataJson['id']         =   'password';

				} else {
					$dataJson['t'] = 1;
				}
			}
			
			if($dataJson['t'] == 1){
				// Kalo udah Login
				$data_session   =   array(
						'id_admin'           	  =>  $data_user[0]->id_admin,
						'name'          	  	  =>  $data_user[0]->name,
						'username'       		  =>  $data_user[0]->username,
						'email'					  =>  $data_user[0]->email,
						'status_admin'            =>  $data_user[0]->status_admin
				);
				$this->session->set_userdata($data_session);
			}
			echo json_encode($dataJson);
		} else {
			redirect('apps/signin');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */