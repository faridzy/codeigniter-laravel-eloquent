<?php

/**
 * @Author: ELL
 * @Date:   2017-10-26 23:12:51
 * @Last Modified by:   ELL
 * @Last Modified time: 2017-10-27 00:11:32
 */

/**
* 
*/
class Roles extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('role');
	}

	public function index(){
		if(empty($this->session->userdata('activeUser'))){
			redirect('login');
		}

		$role=Role::all();
		$params=[
			'title'=>'Manajemen Role',
			'data'=>$role
		];

		$this->load->view('layouts/header');
		$this->load->view('master/role/index',$params);
		$this->load->view('layouts/footer');

	}

	public function form(){
		$id=$this->input->post('id');
		if($id){
			$role=Role::find($id);
		}else{
			$role=new Role();
		}

		$params=[
			'title'=>'Manajemen Role',
			'data'=>$role
		];

		$this->load->view('master/role/form',$params);
	}

	public function save(){
		$id=intval($this->input->post('id',0));

		if($id){
			$role=Role::find($id);
		}else{
			$role=new Role();
		}

		$role->name =$this->input->post('name');
		try {
		$role->save();

		echo 
		"<div class='alert alert-success'>Role berhasil disimpan!</div>
            <script> scrollToTop(); reload(1500); </script>";	
		} catch (Exception $e) {
			echo "<div class='alert alert-danger'>Terjadi kesalahan! Role gagal disimpan!</div>";
			
		}	
	}

	public function delete(){
		$id=intval($this->input->post('id',0));
		try {
			Role::find($id)->delete();
			echo "<div class='alert alert-success'>Role berhasil dihapus!</div>
            <script> scrollToTop(); reload(1500); </script>";
			
		} catch (Exception $e) {
			echo "
            <div class='alert alert-danger'>Terjadi kesalahan! Role gagal dihapus</div>";
		}
		

	}
}