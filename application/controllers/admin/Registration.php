<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Registration_model');
    $this->load->model('Wilayah_model');

    $this->data['module'] = 'Registration';    

    /* cek login */
    if (!$this->ion_auth->logged_in()){
      // apabila belum login maka diarahkan ke halaman login
      redirect('admin/auth/login', 'refresh');
    }
    elseif($this->ion_auth->is_user()){
      // apabila belum login maka diarahkan ke halaman login
      redirect('admin/auth/login', 'refresh');
    }
  }

  public function index()
  {
    $this->data['title'] = "Data Registration";
    
    $this->data['registration_data'] = $this->Registration_model->get_all();
    $this->load->view('back/registration/registration_list', $this->data);
  }

  // public function create() 
  // {
  //   $this->data['title']          = 'Tambah Agenda Baru';
  //   $this->data['action']         = site_url('admin/agenda/create_action');
  //   $this->data['button_submit']  = 'Submit';
  //   $this->data['button_reset']   = 'Reset';

  //   $this->data['id_agenda'] = array(
  //     'name'  => 'id_agenda',
  //     'id'    => 'id_agenda',
  //     'type'  => 'hidden',
  //   );

  //   $this->data['judul_agenda'] = array(
  //     'name'  => 'judul_agenda',
  //     'id'    => 'judul_agenda',
  //     'type'  => 'text',
  //     'class' => 'form-control',
  //     'value' => $this->form_validation->set_value('judul_agenda'),
  //   );

  //   $this->data['isi_agenda'] = array(
  //     'name'  => 'isi_agenda',
  //     'id'    => 'isi_agenda',      
  //     'class' => 'form-control',
  //     'value' => $this->form_validation->set_value('isi_agenda'),
  //   );

  //   $this->data['wilayah'] = array(
  //     'name'  => 'wilayah',
  //     'id'    => 'wilayah',
  //     'type'  => 'text',
  //     'class' => 'form-control',
  //     'value' => $this->form_validation->set_value('wilayah'),
  //   );

  //   $this->data['author'] = array(
  //     'name'  => 'author',
  //     'id'    => 'author',
  //     'type'  => 'text',
  //     'class' => 'form-control',
  //     'value' => $this->form_validation->set_value('author'),
  //   );

  //   $this->data['publish'] = array(
  //     'Ya'    => 'Ya',
  //     'Tidak' => 'Tidak',
  //   );    

  //   $this->data['publish_css'] = array(
  //     'name'  => 'publish',
  //     'id'    => 'publish',
  //     'type'  => 'text',
  //     'class' => 'form-control',
  //   );    

  //   $this->data['get_combo_wilayah'] = $this->Wilayah_model->get_combo_wilayah(); 

  //   $this->load->view('back/agenda/agenda_add', $this->data);
  // }
  
  // public function create_action() 
  // {
  //   $this->_rules();

  //   if ($this->form_validation->run() == FALSE) 
  //   {
  //     $this->create();
  //   } 
  //     else 
  //     {
  //       /* Jika file upload tidak kosong*/
  //       /* 4 adalah menyatakan tidak ada file yang diupload*/
  //       if ($_FILES['userfile']['error'] <> 4) 
  //       {
  //         $nmfile = $this->input->post('judul_agenda');

  //         /* memanggil library upload ci */
  //         $config['upload_path']      = './assets/images/agenda/';
  //         $config['allowed_types']    = 'jpg|jpeg|png|gif';
  //         $config['max_size']         = '2048'; // 2 MB
  //         $config['max_width']        = '2000'; //pixels
  //         $config['max_height']       = '2000'; //pixels
  //         $config['file_name']        = $nmfile; //nama yang terupload nantinya

  //         $this->load->library('upload', $config);

  //         if (!$this->upload->do_upload())
  //         {   //file gagal diupload -> kembali ke form tambah
  //           $this->create();
  //         } 
  //           //file berhasil diupload -> lanjutkan ke query INSERT
  //           else 
  //           { 
  //             $userfile = $this->upload->data();
  //             $thumbnail                = $config['file_name']; 
  //             // library yang disediakan codeigniter
  //             $config['image_library']  = 'gd2'; 
  //             // gambar yang akan dibuat thumbnail
  //             $config['source_image']   = './assets/images/agenda/'.$userfile['file_name'].''; 
  //             // membuat thumbnail
  //             $config['create_thumb']   = TRUE;               
  //             // rasio resolusi
  //             $config['maintain_ratio'] = FALSE; 
  //             // lebar
  //             $config['width']          = 400; 
  //             // tinggi
  //             $config['height']         = 200; 

  //             $this->load->library('image_lib', $config);
  //             $this->image_lib->resize();

  //             $data = array(
  //               'judul_agenda'  => $this->input->post('judul_agenda'),
  //               'isi_agenda'    => $this->input->post('isi_agenda'),
  //               'wilayah'      => $this->input->post('wilayah'),
  //               'author'        => $this->input->post('author'),
  //               'publish'       => $this->input->post('publish'),
  //               'userfile'      => $nmfile,
  //               'userfile_type' => $userfile['file_ext'],
  //               'userfile_size' => $userfile['file_size'],
  //               'uploader'      => $this->session->userdata('identity')
  //             );

  //             // eksekusi query INSERT
  //             $this->Agenda_model->insert($data);
  //             // set pesan data berhasil dibuat
  //             $this->session->set_flashdata('message', 'Data berhasil dibuat');
  //             redirect(site_url('admin/agenda'));
  //           }
  //       }
  //       else // Jika file upload kosong
  //       {
  //         $data = array(
  //           'judul_agenda'  => $this->input->post('judul_agenda'),
  //           'isi_agenda'    => $this->input->post('isi_agenda'),
  //           'wilayah'      => $this->input->post('wilayah'),
  //           'author'        => $this->input->post('author'),
  //           'publish'        => $this->input->post('publish'),
  //           'uploader'      => $this->session->userdata('identity')
  //         );

  //         // eksekusi query INSERT
  //         $this->Agenda_model->insert($data);
  //         // set pesan data berhasil dibuat
  //         $this->session->set_flashdata('message', 'Data berhasil dibuat');
  //         redirect(site_url('admin/agenda'));
  //       }
  //     }  
  // }
  
  public function update($id) 
  {
    $row = $this->Registration_model->get_by_id($id);
    $this->data['registration'] = $this->Registration_model->get_by_id($id);

    if ($row) 
    {
      $this->data['title']          = 'Update registration';
      $this->data['action']         = site_url('admin/registration/update_action');
      $this->data['button_submit']  = 'Update';
      $this->data['button_reset']   = 'Reset';

      $this->data['id_registration'] = array(
        'name'  => 'id_registration',
        'id'    => 'id_registration',
        'type'=> 'hidden',
        );

      $this->data['nama'] = array(
        'name'  => 'nama',
        'id'    => 'nama',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['tgl_lhr'] = array(
        'name'  => 'tgl_lhr',
        'id'    => 'tgl_lhr',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['jeniskelamin'] = array(
        'name'  => 'jeniskelamin',
        'id'    => 'jeniskelamin',
        'type'  => 'text',
        'class' => 'form-control',
        ); 

      $this->data['alamat'] = array(
        'name'  => 'alamat',
        'id'    => 'alamat',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['desa'] = array(
        'name'  => 'desa',
        'id'    => 'desa',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['kecamatan'] = array(
        'name'  => 'kecamatan',
        'id'    => 'kecamatan',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['kota'] = array(
        'name'  => 'kota',
        'id'    => 'kota',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['provinsi'] = array(
        'name'  => 'provinsi',
        'id'    => 'provinsi',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['btc'] = array(
        'name'  => 'btc',
        'id'    => 'btc',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['tc'] = array(
        'name'  => 'tc',
        'id'    => 'tc',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['ms'] = array(
        'name'  => 'ms',
        'id'    => 'ms',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['jenjang'] = array(
        'name'  => 'jenjang',
        'id'    => 'jenjang',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['namajenjang'] = array(
        'name'  => 'namajenjang',
        'id'    => 'namajenjang',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['fakultas'] = array(
        'name'  => 'fakultas',
        'id'    => 'fakultas',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['jurusan'] = array(
        'name'  => 'jurusan',
        'id'    => 'jurusan',
        'type'  => 'text',
        'class' => 'form-control',
        ); 

      $this->data['jenjangkuliah'] = array(
        'name'  => 'jenjangkuliah',
        'id'    => 'jenjangkuliah',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['selesaitahun'] = array(
        'name'  => 'selesaitahun',
        'id'    => 'selesaitahun',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['ormas'] = array(
        'name'  => 'ormas',
        'id'    => 'ormas',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['namaormas'] = array(
        'name'  => 'namaormas',
        'id'    => 'namaormas',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['jabatanormas'] = array(
        'name'  => 'jabatanormas',
        'id'    => 'jabatanormas',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['jenispekerjaan'] = array(
        'name'  => 'jenispekerjaan',
        'id'    => 'jenispekerjaan',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['jabatanposisi'] = array(
        'name'  => 'jabatanposisi',
        'id'    => 'jabatanposisi',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['penghasilan'] = array(
        'name'  => 'penghasilan',
        'id'    => 'penghasilan',
        'type'  => 'text',
        'class' => 'form-control',
        );

      $this->data['wilayah_css'] = array(
        'name'  => 'wilayah',
        'id'    => 'wilayah',
        'class' => 'form-control',
        );

      $this->data['get_combo_wilayah'] = $this->Wilayah_model->get_combo_wilayah(); 

      $this->load->view('back/registration/registration_edit', $this->data);
    } 
    else 
    {
      $this->session->set_flashdata('message', 'Data tidak ditemukan');
      redirect(site_url('admin/registration'));
    }
  }
  
  public function update_action() 
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) 
    {
      $this->update($this->input->post('id_registration'));
    } 
    else 
    {
      $data = array(
        'nama'            => $this->input->post('nama'),
        'tgl_lhr'         => $this->input->post('tgl_lhr'),
        'jeniskelamin'    => $this->input->post('jeniskelamin'),
        'alamat'          => $this->input->post('alamat'),
        'desa'            => $this->input->post('desa'),
        'kecamatan'       => $this->input->post('kecamatan'),
        'kota'            => $this->input->post('kota'),
        'provinsi'        => $this->input->post('provinsi'),
        'btc'             => $this->input->post('btc'),
        'tc'              => $this->input->post('tc'),
        'ms'              => $this->input->post('ms'),
        'jenjang'         => $this->input->post('jenjang'),
        'namajenjang'     => $this->input->post('namajenjang'),
        'fakultas'        => $this->input->post('fakultas'),
        'jurusan'         => $this->input->post('jurusan'),
        'jenjangkuliah'   => $this->input->post('jenjangkuliah'),
        'selesaitahun'    => $this->input->post('selesaitahun'),
        'ormas'           => $this->input->post('ormas'),
        'namaormas'       => $this->input->post('namaormas'),
        'jabatanormas'    => $this->input->post('jabatanormas'),
        'jenispekerjaan'  => $this->input->post('jenispekerjaan'),
        'jabatanposisi'   => $this->input->post('jabatanposisi'),
        'penghasilan'     => $this->input->post('penghasilan'),
        'wilayah'         => $this->input->post('wilayah'),
        
        );

$this->Registration_model->update($this->input->post('id_registration'), $data);
$this->session->set_flashdata('message', 'Edit Data Berhasil');
redirect(site_url('admin/Registration'));
}
}  
public function delete($id) 
{
  $row = $this->Registration_model->get_by_id($id);

  if ($row) 
  {
    $this->Registration_model->delete($id);
    $this->session->set_flashdata('message', 'Data berhasil dihapus');
    redirect(site_url('admin/registration'));
  } 
      // Jika data tidak ada
  else 
  {
    $this->session->set_flashdata('message', 'Data tidak ditemukan');
    redirect(site_url('admin/registration'));
  }
}

public function _rules() 
{
  $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
  $this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'trim|required');
  $this->form_validation->set_rules('jeniskelamin', 'Jenis Kelamin', 'trim|required');
  $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
  $this->form_validation->set_rules('desa', 'Desa', 'trim|required');
  $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
  $this->form_validation->set_rules('kota', 'Kota', 'trim|required');
  $this->form_validation->set_rules('provinsi', 'Tanggal Lahir', 'trim|required');
  $this->form_validation->set_rules('btc', 'BTC', 'trim|required');
  $this->form_validation->set_rules('tc', 'TC', 'trim|required');
  // $this->form_validation->set_rules('ms', 'MS', 'trim|required');
  $this->form_validation->set_rules('jenjang', 'Jenjang', 'trim|required');
  $this->form_validation->set_rules('namajenjang', 'Nama Jenjang', 'trim|required');
  $this->form_validation->set_rules('fakultas', 'fakultas', 'trim|required');
  $this->form_validation->set_rules('jurusan', 'jurusan', 'trim|required');
  $this->form_validation->set_rules('jenjangkuliah', 'jenjangkuliah', 'trim|required');
  $this->form_validation->set_rules('selesaitahun', 'selesaitahun', 'trim|required');
  $this->form_validation->set_rules('ormas', 'ormas', 'trim|required');
  $this->form_validation->set_rules('namaormas', 'namaormas', 'trim|required');
  $this->form_validation->set_rules('jabatanormas', 'jabatanormas', 'trim|required');
  $this->form_validation->set_rules('jenispekerjaan', 'jenispekerjaan', 'trim|required');
  $this->form_validation->set_rules('jabatanposisi', 'jabatanposisi', 'trim|required');
  $this->form_validation->set_rules('penghasilan', 'penghasilan', 'trim|required');
  $this->form_validation->set_rules('wilayah', 'wilayah', 'trim|required');

    // set pesan form validasi error
  $this->form_validation->set_message('required', '{field} wajib diisi');

  $this->form_validation->set_rules('id_registration', 'id_registration', 'trim');
  $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert">', '</div>');
}

}