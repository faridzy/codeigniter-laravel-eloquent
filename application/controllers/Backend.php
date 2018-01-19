<?php

/**
 * @Author: ELL
 * @Date:   2017-10-25 10:08:22
 * @Last Modified by:   ELL
 * @Last Modified time: 2017-10-25 23:37:27
 */

/**
* 
*/
class Backend extends CI_Controller
{
	
	public function index(){
		if(empty($this->session->userdata('activeUser'))){
			redirect('login');
		}
		$this->load->view('layouts/header');
		$this->load->view('backend');
		$this->load->view('layouts/footer');
	}
}