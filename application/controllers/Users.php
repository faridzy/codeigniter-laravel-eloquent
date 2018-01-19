<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @Author: ELL
 * @Date:   2017-10-25 00:22:41
 * @Last Modified by:   ELL
 * @Last Modified time: 2018-01-19 09:44:02
 */
/**
* 
*/
class Users extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
       
		$this->load->model('user');
		$this->load->model('role');
	}

	public function index(){
		if(empty($this->session->userdata('activeUser'))){
			redirect('login');
		}

		$user= User::all();

		$params=[
			'title'=>"Manajemen User",
			'data'=>$user,
		];
		$this->load->view('layouts/header');
		$this->load->view('master/users/index',$params);
		$this->load->view('layouts/footer');
	}

	public function form(){
		$id=$this->input->post('id');
		if($id){
			$data=User::find($id);
		}else{
			$data= new User();
		}

		$params=[
			'title'=>'Manajemen User',
			'data'=>$data,
			'role'=>Role::all()
		];
		$this->load->view('master/users/form',$params);
	}

	public function save(){
		$id=intval($this->input->post('id',0));

		if($id){
			$data=User::find($id);
		}else{
			$data=new User();
		}

		$data->name=$this->input->post('name');
		$data->username=$this->input->post('username');
		$data->role_id=$this->input->post('role_id');

		if($this->input->post('password')!=''){
			$data->password=sha1($this->input->post('password'));
		}

		try {
		$data->save();

		echo 
		"<div class='alert alert-success'>User berhasil disimpan!</div>
            <script> scrollToTop(); reload(1500); </script>";	
		} catch (Exception $e) {
			echo "<div class='alert alert-danger'>Terjadi kesalahan! User gagal disimpan!</div>";
			
		}	
	}

	public function editpassword(){
		$id=$this->input->post('id');
		$user=User::find($id);
		if (is_null($user)) {
            echo"
            <div class='alert alert-danger'>Terjadi kesalahan! Data tidak tersedia!</div>";
        }
         $params['user'] = $user;
		$this->load->view('master/users/password-form',$params);
	}

	public function updatepassword(){
		$id=intval($this->input->post('id',0));
		$password=sha1($this->input->post('password'));
		$user=User::find($id);
		$user->password=$password;

		try {
			$user->save();
			echo "<div class='alert alert-success'>Password berhasil disimpan!</div>
            <script> scrollToTop(); reload(1500); </script>";
		} catch (Exception $e) {

			echo "<div class='alert alert-danger'>Terjadi kesalahan! Password gagal disimpan!</div>";
		
		}

	}

	public function delete(){
		$id=intval($this->input->post('id',0));
		try {
			User::find($id)->delete();
			echo "<div class='alert alert-success'>Data berhasil dihapus!</div>
            <script> scrollToTop(); reload(1500); </script>";
			
		} catch (Exception $e) {
			echo "
            <div class='alert alert-danger'>Terjadi kesalahan! Data gagal dihapus</div>";
		}

	}


}