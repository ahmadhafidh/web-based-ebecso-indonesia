<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Wilayah extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

    $this->lang->load('auth');

    // Load model Ion_auth_model dan buat alias data_user
    $this->load->model('Ion_auth_model');

    $this->load->model('Wilayah_model');

    $this->data['module'] = 'Wilayah';    


  }
  public function index()
  {

    $this->data['title'] = "Data Wilayah";
    // Cek sudah/ belum
    if (!$this->ion_auth->logged_in()){
      redirect('admin/auth/login', 'refresh');
    }
    // Cek superadmin/ bukan
    elseif (!$this->ion_auth->is_superadmin()){
      redirect('admin/dashboard', 'refresh');
    }else{

      $this->data['wilayah_data'] = $this->Wilayah_model->get_all();
      $this->load->view('back/wilayah/wilayah_list', $this->data);
    }
  }

  public function create() 
  {
    $this->data['title']          = 'Tambah Wilayah Baru';
    $this->data['action']         = site_url('admin/wilayah/create_action');
    $this->data['button_submit']  = 'Submit';
    $this->data['button_reset']   = 'Reset';

    $this->data['id_wilayah'] = array(
      'name'  => 'id_wilayah',
      'id'    => 'id_wilayah',
      'type'  => 'hidden',
      );


    $this->data['nama_wilayah'] = array(
      'name'  => 'nama_wilayah',
      'id'    => 'nama_wilayah',
      'type'  => 'text',
      'class' => 'form-control',
      'value' => $this->form_validation->set_value('nama_wilayah'),
      );

    $this->load->view('back/wilayah/wilayah_add', $this->data);
  }
  
  public function create_action() 
  {
    // $this->load->helper('judul_seo_helper');
    $this->_rules();

    if ($this->form_validation->run() == FALSE) 
    {
      $this->create();
    } 
    else 
    {
      $data = array(
        'nama_wilayah'  => $this->input->post('nama_wilayah')
          // 'kategori_seo'  => $this->input->post('nama_wilayah'))

        );

        // eksekusi query INSERT
      $this->Wilayah_model->insert($data);
        // set pesan data berhasil dibuat
      $this->session->set_flashdata('message', 'Data berhasil dibuat');
      redirect(site_url('admin/wilayah'));
    }  
  }
  
  public function update($id) 
  {
    $row = $this->Wilayah_model->get_by_id($id);
    $this->data['wilayah'] = $this->Wilayah_model->get_by_id($id);

    if ($row) 
    {
      $this->data['title']          = 'Update wilayah';
      $this->data['action']         = site_url('admin/wilayah/update_action');
      $this->data['button_submit']  = 'Update';
      $this->data['button_reset']   = 'Reset';

      $this->data['id_wilayah'] = array(
        'name'  => 'id_wilayah',
        'id'    => 'id_wilayah',
        'type'  => 'hidden',
        );

      $this->data['nama_wilayah'] = array(
        'name'  => 'nama_wilayah',
        'id'    => 'nama_wilayah',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->load->view('back/wilayah/wilayah_edit', $this->data);
    } 
    else 
    {
      $this->session->set_flashdata('message', 'Data tidak ditemukan');
      redirect(site_url('admin/wilayah'));
    }
  }
  
  public function update_action() 
  {
    // $this->load->helper('judul_seo_helper');
    $this->_rules();

    if ($this->form_validation->run() == FALSE) 
    {
      $this->update($this->input->post('id_wilayah'));
    } 
    else 
    {
      $data = array(
        'nama_wilayah'  => $this->input->post('nama_wilayah')
        );

      $this->Wilayah_model->update($this->input->post('id_wilayah'), $data);
      $this->session->set_flashdata('message', 'Edit Data Berhasil');
      redirect(site_url('admin/Wilayah'));
    }
  }
  
  public function delete($id) 
  {
    $row = $this->Wilayah_model->get_by_id($id);
    
    if ($row) 
    {
      $this->Wilayah_model->delete($id);
      $this->session->set_flashdata('message', 'Data berhasil dihapus');
      redirect(site_url('admin/wilayah'));
    } 
      // Jika data tidak ada
    else 
    {
      $this->session->set_flashdata('message', 'Data tidak ditemukan');
      redirect(site_url('admin/wilayah'));
    }
  }

  public function _rules() 
  {
    $this->form_validation->set_rules('nama_wilayah', 'nama_wilayah', 'trim|required');

    // set pesan form validasi error
    // $this->form_validation->set_message('required', '{field} wajib diisi');

    $this->form_validation->set_rules('id_wilayah', 'id_wilayah', 'trim');
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert">', '</div>');
  }

}