<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index(){
		$this->load->model('Agenda_model');
		$this->load->model('Wilayah_model');
		$this->load->model('Registration_model');
		$this->load->model('Featured_model');
		$this->load->model('Ion_auth_model');

		/* cek status login */
		if (!$this->ion_auth->logged_in()){
			// apabila belum login maka diarahkan ke halaman login
			redirect('admin/auth/login', 'refresh');
		}
		elseif($this->ion_auth->is_user()){
			// apabila belum login maka diarahkan ke halaman login
			redirect('admin/auth/login', 'refresh');
		}
		else{
			$this->data = array(
				'title' 					=> 'Dashboard',
				'button' 					=> 'Tambah',
				'total_agenda' 				=> $this->Agenda_model->total_rows(),
				'total_user' 				=> $this->Ion_auth_model->total_rows(),
				'total_registration' 		=> $this->Registration_model->total_rows(),
				'total_featured' 			=> $this->Featured_model->total_rows(),
				'total_wilayah' 			=> $this->Wilayah_model->total_rows()
				);

			$this->load->view('back/dashboard',$this->data);
		}
	}
	
}
