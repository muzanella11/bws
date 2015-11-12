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
    function __construct(){
    	parent::__construct();
    	$this->data = new StdClass; 
    	$this->load->library('templates');
    	$this->load->model('user_model'); 
    }
    
	public function index()
	{
		redirect('');
    }
    public function create_enem_user_check(){
        if($this->input->is_ajax_request()){
            /*$username = "enem_apps";
            $password = "create123";*/
            $this->data = new stdClass();
            $enem_username_default = "30b1571322023198ae3932d5ad4ec7d0";
            $enem_password_default = "befdfed1abc261a2e232ace743acacc7";
            $username = $this->templates->enem_secret($this->templates->anti_injection($this->input->post('username')));
            $password = $this->templates->enem_secret($this->templates->anti_injection($this->input->post('password')));
            
            if($username == ''){
                $dataJson['t'] = 0;
                $dataJson['id'] = 'username';
                $dataJson['message'] = 'Please insert username';
            }
            elseif($username != $enem_username_default){
                $dataJson['t'] = 0;
                $dataJson['id'] = 'username';
                $dataJson['message'] = 'Wrong username';
            }
            elseif($password == ''){
                $dataJson['t'] = 0;
                $dataJson['id'] = 'password';
                $dataJson['message'] = 'Please insert password';
            }
            elseif($password != $enem_password_default){
                $dataJson['t'] = 0;
                $dataJson['id'] = 'password';
                $dataJson['message'] = 'Wrong password';
            }
            else {
                $dataJson['t'] = 1;
            }
            
            if($dataJson['t'] == 1){
                $length = 11;
                $token = $this->templates->get_random_string($length);
                $this->load->model('user_model');
                $token_status = 1;
                //die($token);
                $database = array(
                    'enem_token' => $token,
                    'enem_token_status' => $token_status
                );
                $this->user_model->addEnemTokenUserManagement($database);
                
                $data = $this->user_model->getDataTokenUserManagementByToken($token);
                //die(var_dump($data[0]->enem_token));
                $enem_token = $data[0]->enem_token;
                
                $data_session = array(
                    'enem_token' => $enem_token
                );
                $this->session->set_userdata($data_session);
            }
            
            echo json_encode($dataJson);
        } else {
            redirect('');
        }
    }
    
    public function create_enem_user(){
        if($this->input->is_ajax_request()){
            $enem_email    = $this->templates->anti_injection($this->input->post('email'));
            $enem_username = $this->templates->anti_injection($this->input->post('username'));
            $enem_password = $this->templates->anti_injection($this->input->post('password'));
            $enem_status   = $this->templates->anti_injection($this->input->post('status'));
            
            $enem_digit_patt	= '/([0-9])/';
			$enem_alpha_patt	= '/([a-zA-Z])/';
            $enem_spch_patt	    = '/([\-\_?!*%&^@#$`~,.<>;\':"\\/\/[\]\|{}()=+])/';
            
            $this->load->model('user_model');
            
            if(empty($enem_email)){
                $dataJson['f']       = 0;
                $dataJson['id']      = 'email';
                $dataJson['message'] = 'Please insert email';
            }
            elseif(!filter_var($enem_email, FILTER_VALIDATE_EMAIL)){
                $dataJson['f']       = 0;
                $dataJson['id']      = 'email';
                $dataJson['message'] = 'Wrong format email';
            }
            elseif($this->user_model->getDataEnemAdminByEmail($enem_email)){
                $dataJson['f']       = 0;
                $dataJson['id']      = 'email';
                $dataJson['message'] = 'This email is already registered';
            }
            elseif(empty($enem_username)){
                $dataJson['f']       = 0;
                $dataJson['id']      = 'username';
                $dataJson['message'] = 'Please insert username';
            }
            elseif(strlen($enem_username) < 3){
                $dataJson['f']       = 0;
                $dataJson['id']      = 'username';
                $dataJson['message'] = 'Too short username';
            }
            elseif($enem_username > 20){
                $dataJson['f']       = 0;
                $dataJson['id']      = 'username';
                $dataJson['message'] = 'Too long username';
            }
            elseif(preg_match($enem_spch_patt,$enem_username)){
                $dataJson['f']       = 0;
                $dataJson['id']      = 'username';
                $dataJson['message'] = 'Invalid username';
            }
            elseif($this->user_model->getDataEnemAdminByUsername($enem_username)){
                $dataJson['f']       = 0;
                $dataJson['id']      = 'username';
                $dataJson['message'] = 'This username is already registered';
            }
            elseif(empty($enem_password)){
                $dataJson['f']       = 0;
                $dataJson['id']      = 'password';
                $dataJson['message'] = 'Please insert password';
            }
            elseif($this->templates->length($enem_password) < 8){
				$dataJson['message'] 	= "Please enter your password minimum 8 character";
				$dataJson['f'] 		 	= "0";
				$dataJson['id'] 	 	= "password";
			}
			elseif(!preg_match($enem_digit_patt,$enem_password)){
				$dataJson['message'] 	= "Password must consist of min one number and one letter";
				$dataJson['f'] 		 	= "0";
				$dataJson['id'] 	 	= "password";
			}
			elseif(!preg_match($enem_alpha_patt,$enem_password)){
				$dataJson['message'] 	= "Password must consist of min one number and one letter";
				$dataJson['f'] 		 	= "0";
				$dataJson['id'] 	 	= "password";
			}
            elseif(empty($enem_status)){
                $dataJson['f']       = 0;
                $dataJson['id']      = 'status';
                $dataJson['message'] = 'Please insert status';
            }
            else {
                $dataJson['f'] = 1;
            }
            
            if($dataJson['f'] == 1){
                $enem_password_secret = $this->templates->enem_secret($enem_password);
                $this->load->model('user_model');
                
                $database = array(
                    'enem_username'    => $enem_username,
                    'enem_password'    => $enem_password_secret,
                    'enem_email'       => $enem_email,
                    'enem_user_status' => $enem_status,
                );
                $this->user_model->addEnemUserAdmin($database);
            }
            
            echo json_encode($dataJson);
            
        } else {
            redirect('');
        }
    }
    
	public function signin_apps(){
		if($this->input->is_ajax_request()){
			$this->load->model('user_model');
			$variabel = $this->templates->anti_injection($this->input->post('var'));
			$pass	  =	$this->templates->enem_secret($this->templates->anti_injection($this->input->post('pass')));
			
			if(empty($variabel)){
				$dataJson['message']    =   'Masukkan Email atau Username';
				$dataJson['t']          =   0;
				$dataJson['id']         =   'variabel';
			}
			else if(strpos($variabel,'@')){
				$data_user = $this->user_model->getDataEnemAdminByEmail($variabel);
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
				else if($pass != $data_user[0]->enem_password){
					$dataJson['message']    =   'Password Salah';
					$dataJson['t']          =   0;
					$dataJson['id']         =   'password';
				} else {
					$dataJson['t'] = 1;
				}
			} else {
				$data_user = $this->user_model->getDataEnemAdminByUsername($variabel);
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
				else if($pass != $data_user[0]->enem_password){
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
						'id_admin'           	  =>  $data_user[0]->id_enem_user,
						'name'          	  	  =>  $data_user[0]->enem_name,
						'username'       		  =>  $data_user[0]->enem_username,
						'email'					  =>  $data_user[0]->enem_email,
						'status_admin'            =>  $data_user[0]->enem_user_status,
                        'step_one'                =>  $data_user[0]->enem_step_one,
                        'step_two'                =>  $data_user[0]->enem_step_two,
				);
				$this->session->set_userdata($data_session);
			}
			echo json_encode($dataJson);
		} else {
			redirect('apps/signin');
		}
	}
    
    public function check_step_one(){
        if($this->input->is_ajax_request()){
            $enem_name = $this->input->post('data_enem_ex');
            if(empty($enem_name)){
                $dataJson['message']    =   'Masukkan nama lengkap';
				$dataJson['t']          =   0;
				$dataJson['id']         =   'name';
            }
            echo json_encode($dataJson);
        } else {
            redirect('');
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */