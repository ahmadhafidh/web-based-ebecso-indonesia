<?php $this->load->view('back/head'); ?>
<?php $this->load->view('back/header'); ?>
<?php $this->load->view('back/leftbar'); ?>      

<div class="content-wrapper">
  <section class="content-header">
    <h1><?php echo $title ?></h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><?php echo $module ?></li>
      <li class="active"><a href="<?php echo current_url() ?>"><?php echo $title ?></a></li>
    </ol>
  </section>
  <section class="content">
    <div class="box box-primary">
      <div class="box-body table-responsive padding">
        </a> 
        
        <h4 align="center"><?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?></h4>
        
        <hr/>
        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th style="text-align: center">No.</th>
              <th style="text-align: center">Nama</th>
              <th style="text-align: center">Tanggal Lahir</th>
              <th style="text-align: center">Jenis Kelamin</th>
              <th style="text-align: center">Alamat</th>
              <th style="text-align: center">Desa</th>
              <th style="text-align: center">kecamatan</th>
              <th style="text-align: center">Kota</th>
              <th style="text-align: center">Provinsi</th>
              <th style="text-align: center">BTC</th>
              <th style="text-align: center">TC</th>
              <th style="text-align: center">MS</th>
              <th style="text-align: center">Jenjang</th>
              <th style="text-align: center">namajenjang</th>
              <th style="text-align: center">fakultas</th>
              <th style="text-align: center">Jurusan</th>
              <th style="text-align: center">Jenjang Kuliah</th>
              <th style="text-align: center">Selesai Tahun</th>
              <th style="text-align: center">Ormas</th>
              <th style="text-align: center">Nama Ormas</th>
              <th style="text-align: center">Jabatan Ormas</th>
              <th style="text-align: center">Jenis Pekerjaan</th>
              <th style="text-align: center">Jabatan Posisi</th>
              <th style="text-align: center">Penghasilan</th>
              <th style="text-align: center">Wilayah</th>
              <th colspan="2" style="text-align: center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no=0;
            foreach ($registration_data as $registration){ $no++;?>
            <tr>
              <td style="text-align:center"><?=$no?></td>
              <td style="text-align:center"><?php echo $registration->nama ?></td>
              <td style="text-align:center"><?php echo $registration->tgl_lhr ?></td>
              <td style="text-align:center"><?php echo $registration->jeniskelamin ?></td>
              <td style="text-align:center"><?php echo $registration->alamat ?></td>
              <td style="text-align:center"><?php echo $registration->name_v ?></td>
              <td style="text-align:center"><?php echo $registration->name_d ?></td>
              <td style="text-align:center"><?php echo $registration->name_r ?></td>
              <td style="text-align:center"><?php echo $registration->name_p ?></td>
              <td style="text-align:center"><?php echo $registration->btc ?></td>
              <td style="text-align:center"><?php echo $registration->tc ?></td>
              <td style="text-align:center"><?php echo $registration->ms ?></td>
              <td style="text-align:center"><?php echo $registration->jenjang ?></td>
              <td style="text-align:center"><?php echo $registration->namajenjang ?></td>
              <td style="text-align:center"><?php echo $registration->fakultas ?></td>
              <td style="text-align:center"><?php echo $registration->jurusan ?></td>
              <td style="text-align:center"><?php echo $registration->jenjangkuliah ?></td>
              <td style="text-align:center"><?php echo $registration->selesaitahun ?></td>
              <td style="text-align:center"><?php echo $registration->ormas ?></td>
              <td style="text-align:center"><?php echo $registration->namaormas ?></td>
              <td style="text-align:center"><?php echo $registration->jabatanormas ?></td>
              <td style="text-align:center"><?php echo $registration->jenispekerjaan ?></td>
              <td style="text-align:center"><?php echo $registration->jabatanposisi ?></td>
              <td style="text-align:center"><?php echo $registration->penghasilan ?></td>
              <td style="text-align:center"><?php echo $registration->wilayah ?></td>
              <td style="text-align:center">
              <?php 
              //echo anchor(site_url('admin/registration/update/'.$registration->id_registration),'<i class="glyphicon glyphicon-pencil"></i>','title="Edit", class="btn btn-sm btn-warning"'); echo ' ';
              ?>
              </td>
              <?php if ($this->ion_auth->is_superadmin()): ?>
              <td style="text-align:center">
              <?php 
              echo anchor(site_url('admin/registration/delete/'.$registration->id_registration),'<i class="glyphicon glyphicon-trash"></i>','title="Hapus", class="btn btn-sm btn-danger", onclick="javasciprt: return confirm(\'Apakah Anda yakin ?\')"');  
              ?>
              </td>
              <?php endif?>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>

<!-- DATA TABLES SCRIPT -->
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.min.js') ?>" type="text/javascript"></script>
<script type="text/javascript">
function confirmDialog() {
 return confirm('Apakah anda yakin?')
}
  $('#datatable').dataTable({
    "bPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": false,
    "aaSorting": [[0,'desc']],
    "lengthMenu": [[10, 25, 50, 100, 500, 1000, -1], [10, 25, 50, 100, 500, 1000, "Semua"]]
  });
</script>

<?php $this->load->view('back/footer'); ?>      