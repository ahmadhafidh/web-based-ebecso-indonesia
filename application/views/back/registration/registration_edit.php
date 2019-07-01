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
  <section class='content'>
    <div class='row'>    
      <?php echo form_open_multipart($action);?>
      <div class="col-md-12"> <?php echo validation_errors() ?> </div> 
      <!-- kolom kiri -->
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-body">
            <div class="form-group"><label>Nama</label>
              <?php echo form_input($nama, $registration->nama);?>
            </div>
            <div class="form-group"><label>Tanggal Lahir</label>
              <?php echo form_input($tgl_lhr, $registration->tgl_lhr);?>
            </div>
            <div class="form-group"><label>Jenis Kelamin</label>
              <?php echo form_input($jeniskelamin, $registration->jeniskelamin);?>
            </div>
            <div class="form-group"><label>Alamat</label>
              <?php echo form_input($alamat, $registration->alamat);?>
            </div>
            <div class="form-group"><label>Desa</label>
              <?php echo form_input($desa, $registration->desa);?>
            </div>
            <div class="form-group"><label>Kecamatan</label>
              <?php echo form_input($kecamatan, $registration->kecamatan);?>
            </div>

          </div>
        </div>
      </div>

      <!-- kolom kanan -->
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-body">
            <div class="row">
              <div class="col-xs-4"><label>Kota</label>
                <?php echo form_input($kota,$registration->kota); ?>
              </div>
              <div class="col-xs-4"><label>Provinsi</label>
                <?php echo form_input($provinsi,$registration->provinsi); ?>
              </div>
              <div class="col-xs-4"><label>BTC</label>
                <?php echo form_input($btc,$registration->btc); ?>
              </div>
              <div class="col-xs-4"><label>TC</label>
                <?php echo form_input($tc,$registration->tc); ?>
              </div>
              <div class="col-xs-4"><label>MS</label>
                <?php echo form_input($ms,$registration->ms); ?>
              </div>
              <div class="col-xs-4"><label>Jenjang</label>
                <?php echo form_input($jenjang,$registration->jenjang); ?>
              </div>
              <div class="col-xs-4"><label>Nama Jenjang</label>
                <?php echo form_input($namajenjang,$registration->namajenjang); ?>
              </div>
              <div class="col-xs-4"><label>Fakultas</label>
                <?php echo form_input($fakultas,$registration->fakultas); ?>
              </div>
              <div class="col-xs-4"><label>Jurusan</label>
                <?php echo form_input($jurusan,$registration->jurusan); ?>
              </div>
              <div class="col-xs-4"><label>Jenjang Kuliah</label>
                <?php echo form_input($jenjangkuliah,$registration->jenjangkuliah); ?>
              </div>
              <div class="col-xs-4"><label>Selesai Tahun</label>
                <?php echo form_input($selesaitahun,$registration->selesaitahun); ?>
              </div>
              <div class="col-xs-4"><label>Ormas</label>
                <?php echo form_input($ormas,$registration->ormas); ?>
              </div>
              <div class="col-xs-4"><label>Nama ormas</label>
                <?php echo form_input($namaormas,$registration->namaormas); ?>
              </div>
              <div class="col-xs-4"><label>Jabatan Ormas</label>
                <?php echo form_input($jabatanormas,$registration->jabatanormas); ?>
              </div>
              <div class="col-xs-4"><label>Jenis Pekerjaan</label>
                <?php echo form_input($jenispekerjaan,$registration->jenispekerjaan); ?>
              </div>
              <div class="col-xs-4"><label>Jabatan Posisi</label>
                <?php echo form_input($jabatanposisi,$registration->jabatanposisi); ?>
              </div>
              <div class="col-xs-4"><label>Penghasilan</label>
                <?php echo form_input($penghasilan,$registration->penghasilan); ?>
              </div>
              <div class="col-xs-4"><label>wilayah</label>
                <?php echo form_dropdown('',$get_combo_wilayah,$registration->wilayah,$wilayah_css);?>
              </div>
              <?php echo form_input($id_registration,$registration->id_registration);?>
              
              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-success"><?php echo $button_submit ?></button>
                <button type="reset" name="reset" class="btn btn-danger"><?php echo $button_reset ?></button>
              </div>
            </div>
          </div>

          <?php echo form_close(); ?>
        </div>
      </section>
    </div>


    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
    <script type="text/javascript">
      function ajaxfilemanager(field_name, url, type, win) 
      {
       var ajaxfilemanagerurl = "<?php echo base_url() ?>assets/plugins/tinymce/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php";
       switch (type) {
        case "image":
        break;
        case "media":
        break;
        case "flash": 
        break;
        case "file":
        break;
        default:
        return false;
      }
      tinyMCE.activeEditor.windowManager.open(
      {
        url: "<?php echo base_url() ?>assets/plugins/tinymce/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php",
        width: 782,
        height: 440,
        inline : "yes",
        close_previous : "no"
      },
      {
        window : win,
        input : field_name
      });
    }
  </script>

  <script type="text/javascript">
    tinyMCE.init(
    {

// General options
mode : "textareas",
elements : "ajaxfilemanager",
file_browser_callback : 'ajaxfilemanager',

theme : "advanced",
plugins : "fullscreen,safari,pagebreak,style,table,save,advhr,advimage,advlink,emotions,iespell,print,inlinepopups,insertdatetime,preview,media,searchreplace,contextmenu,paste,directionality,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount",

// Theme options
theme_advanced_buttons1 : "fullscreen,undo,redo,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull",
theme_advanced_buttons2 : "formatselect,fontselect,fontsizeselect,insertfile,insertimage",
theme_advanced_buttons3 : "sub,sup,search,replace,|,bullist,numlist,|,outdent,indent,emotions,iespell,media,advhr",
theme_advanced_buttons4 : "image,charmap,preview,forecolor,backcolor,hr,removeformat,link,unlink,anchor,cite,visualaid",
theme_advanced_buttons5 : "tablecontrols",

theme_advanced_toolbar_location : "top",
theme_advanced_toolbar_align : "left",
theme_advanced_statusbar_location : "bottom",
theme_advanced_resizing : true,
relative_urls : false,
remove_script_host : false,
});
</script>

<?php $this->load->view('back/footer'); ?>      