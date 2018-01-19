<?php

/**
 * @Author: ELL
 * @Date:   2017-10-25 00:22:41
 * @Last Modified by:   ELL
 * @Last Modified time: 2017-10-27 01:25:11
 */
/**
* 
*/

class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
       
		$this->load->model('user');
	}


	public function index(){
		if(empty($this->session->userdata('activeUser'))){
			$this->load->view('login');
		 }
		else{
		 	redirect('backend');
		}
	}

	public function login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		 $activeUser = User::where([
         'username' => $username,
         'password' => sha1($password)
     	])->first();
		

        if(!is_null($activeUser)){
        $activeUser->last_login = date('Y-m-d H:i:s');
        $activeUser->save();
         $sessionUser=array(
         	'name'=>$activeUser->name,
         	'username'=>$activeUser->username,
         	'role'=>$activeUser->getRole->name
         );
          $this->session->set_userdata('activeUser',$sessionUser);
          echo "<div class='alert alert-success'>Login Berhasil!</div>
                  <script>reload(1000);</script>";

        }
        else{
          echo "<div class='alert alert-danger'>Login Gagal ! Username atau Password Salah/User telah dinonaktifkan</div>";
        }
	}

	public function logout(){
		$this->session->unset_userdata('activeUser');
		redirect('login');
	}
}