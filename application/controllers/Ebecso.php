<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ebecso extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('Agenda_model', 'Agenda');
    $this->load->model('Featured_model', 'Featured');
    $this->load->model('Wilayah_model', 'Wilayah');
    $this->load->model('Ebecso_model', 'Ebecso');
	$this->load->model('model_select');

  }

  function index(){
    $data['Wilayah'] = $this->Wilayah->get_data();
    $data['agenda_data']                    = $this->Agenda->get_all();
    // $data['wilayah_data']                   = $this->Wilayah->get_combo_wilayah();
    $data['post_new_data']                  = $this->Agenda->get_all_limit_agenda();
    $data['post_featured_data']             = $this->Featured->get_all();
	$data['provinsi']=$this->model_select->provinsi();


    $this->load->view('front/header',$data);
    $this->load->view('front/ebecso_view', $data);
    $this->load->view('front/footer', $data);
  }

  function ambil_data(){

$modul=$this->input->post('modul');
$id=$this->input->post('id');

if($modul=="kabupaten"){
echo $this->model_select->kabupaten($id);
}
else if($modul=="kecamatan"){
echo $this->model_select->kecamatan($id);
}
else if($modul=="kelurahan"){
echo $this->model_select->kelurahan($id);
}
}
  
  // register section a
  function register1(){
    $namawilayah                   = $this->input->post('wilayah');

    $_SESSION['dataregister'] = array(
      'wilayah'       => $namawilayah,
      'nama'          => $this->input->post('nama'),
      'tgl_lhr'       => $this->input->post('tgl_lhr'),
      'jeniskelamin'  => $this->input->post('jeniskelamin'),
      'alamat'        => $this->input->post('alamat'),
	  'provinsi'      => $this->input->post('provinsi'),
	  'kota'          => $this->input->post('kota'),
	  'kecamatan'     => $this->input->post('kecamatan'),
      'desa'          => $this->input->post('desa'),
      'btc'           => $this->input->post('btc'),
      'tc'            => $this->input->post('tc'),
      'ms'            => $this->input->post('ms')
      );

  }

  function register2(){
    $_SESSION['dataregister'] = $_SESSION['dataregister'] +
    array(
      'jenjang'       => $this->input->post('jenjang'),
      'namajenjang'   => $this->input->post('namajenjang'),
      'fakultas'      => $this->input->post('fakultas'),
      'jurusan'       => $this->input->post('jurusan'),
      'jenjangkuliah' => $this->input->post('jenjang'),
      'selesaitahun'  => $this->input->post('selesaitahun'),
      'ormas'         => $this->input->post('ormas'),
      'namaormas'     => $this->input->post('namaormas'),
      'jabatanormas'  => $this->input->post('jabatanormas')
      );
  }

  function register3(){
    $jenispekerjaan                = $this->input->post('jenispeker');
    $jabatanposisi                 = $this->input->post('jabatanpos');

    $_SESSION['dataregister'] = $_SESSION['dataregister'] +
    array(
      'jenispekerjaan'  => $jenispekerjaan,
      'jabatanposisi'   => $jabatanposisi,
      'penghasilan'     => $this->input->post('penghasilan')
      );

      // tambahkan data-data yang dikumpulkan dari register1-register3 ke database
    $this->Ebecso->insert_data('registration', $_SESSION['dataregister']);
  }

  function apa(){
    
    echo "<pre>";
    print_r($_SESSION['dataregister']);
    echo "</pre>";
    
  }
}
