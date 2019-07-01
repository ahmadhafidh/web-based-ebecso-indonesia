<script type="text/javascript">

$(function(){

$.ajaxSetup({
type:"POST",
url: "<?php echo base_url('index.php/ebecso/ambil_data') ?>",
cache: false,
});

$("#provinsi").change(function(){

var value=$(this).val();
if(value>0){
$.ajax({
data:{modul:'kabupaten',id:value},
success: function(respond){
$("#kota").html(respond);
}
})
}

});


$("#kota").change(function(){
var value=$(this).val();
if(value>0){
$.ajax({
data:{modul:'kecamatan',id:value},
success: function(respond){
$("#kecamatan").html(respond);
}
})
}
})

$("#kecamatan").change(function(){
var value=$(this).val();
if(value>0){
$.ajax({
data:{modul:'kelurahan',id:value},
success: function(respond){
$("#desa").html(respond);
}
})
} 
})

})

</script>
<!-- ==== GREYWRAP ==== -->
<div id="greywrap">
	<div class="row">
		<div class="col-lg-4 callout">

		</div><!-- col-lg-4 -->

		<div class="col-lg-4 callout">

			<img src="assets/img/ebecso.png">
			<h3 class="section-subheading text-muted" ><font color="green">From Unity We're Family.</font></h3>

		</div><!-- col-lg-4 -->	

		<div class="col-lg-4 callout">

		</div><!-- col-lg-4 -->	
	</div><!-- row -->
</div><!-- greywrap -->

<!-- ==== ABOUT ==== -->
<div class="container" id="about" name="about">
	<div class="row white">
		<br>
		<h1 class="centered">A LITTLE STORY ABOUT EBECSO</h1>
		<hr>

		<div class="col-lg-6">
			<p>EBECSO terbentuk pada tanggal 21 0ktober 2014di kota Malang yang di tengarai adanya keinginan kuat dari para alumni untuk dapat saling bersilaturahmi antar sesama alumni, niat ini sebenarnya sudah lama ada namun belum dapat terealisasikan, akhirnya salah seorang senior yang bernama Hidayatullah TC .... menyampaian niat baik yang belum terealisasikan tersebut kepada seorang alumni bernama Fikri sobah TC 120. Akhirnya dengan mengumpilkan niat kuat Fikri mengumpulkan teman-teman alumni yang ada di Malang raya namun karena Jarkom belum memadai , Fikri mengumpulkan teman-teman seangkatan yang ada di Malang terutama yang berkuliah di UNISMA (Universitas Islam Malang ) karena kebetulan Fikri juga berkuliah di UNISMA jadi, jarkom untuk dapat menghubungi teman-teman seangkatan yang ada di UNISMA lebih mudah, kemudian pada tanggal 21 Oktober 2014 berkumpullah 8 orang untuk mendiskusikan nama , visi, dan misi yang tepat untuk organisasi yang akan di bentuk, awalnya kami merasa kesulitan untuk menentukan nama, visi dan misi lalu kemudian Fikri berinisiatif untuk meminta saran dari Mr.kalend O ( Pendiri BEC ) akhirnya setelah Fikri menemui Mr. Kalend O terbentuklah nama EBECSO yang mempunyai visi dan misi sebagai berikut :</p>
			
		</div><!-- col-lg-6 -->

		<div class="col-lg-6">
			<p>Visi :<br/> Terjalinnya silaturahmi antar alumni se_Malang Raya untuk bisa saling berbagi dengan harapan dapat saling memotivasi satu sama lain.
<br/>Misi :<br/> -Mempererat silaturahmi antar alumni
            -Memupuk semangat baru dalam belajar bhs inggris
            -Saling berbagi pengalaman
Sampai saat ini keanggotaan EBECSO mencapai ratusan orang dari berbagai kota dan universitas yang ada di malang, harapan selanjutnya semoga organisasi ini mampu menciptakan manfaat yang baik tidak hanya bagi alumni namun juga bagi lingkungan sekitar, harapan lainnya adalah semoga akan terbentuk EBECSO-EBECSO dari kota-kota yang lain sehingga rasa kekeluargaan dan tali silaturahmi antar sesama alumni tetap terjalin erat.
Tanggal 21 Oktober di pilih sebagai tanggal berdirinya EBECSO Malang karena pada tanggal tersebut awal mula berkumpulnya para alumni BEC yang mengawali terbentuknya EBECSO.</p>
		</div><!-- col-lg-6 -->
	</div><!-- row -->
</div><!-- container -->

<!-- ==== PORTFOLIO ==== -->
<div class="container" id="agenda" name="agenda">
	<br>
	<div class="row">
		<br>
		<h1 class="centered">WE CREATE COOL AGENDA</h1>
		<hr>
		<br>
		<br>
	</div><!-- /row -->
	<div class="container">
		<div class="row">

			<?php
			foreach ($agenda_data as $l) {

				?>
				<!-- PORTFOLIO IMAGE 1 -->
				<div class="col-md-4 ">
					<div class="grid mask">
						<figure>
							<img class="img-responsive" src="<?php echo base_url('assets/images/agenda/'.$l->userfile.''.$l->userfile_type.''); ?>" alt="" style="width:100%;height:200px;">
							<figcaption>
								<h5><?=$l->judul_agenda?></h5>

								<a data-toggle="modal" href="#<?=$l->judul_agenda?>" class="btn btn-primary btn-lg"> Take a Look</a>
							</figcaption><!-- /figcaption -->
						</figure><!-- /figure -->
					</div><!-- /grid-mask -->
				</div><!-- /col -->



						 <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						 a modal for each of your projects. -->

						 <div class="modal fade" id="<?=$l->judul_agenda?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						 	<div class="modal-dialog">
						 		<div class="modal-content">
						 			<div class="modal-header">
						 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>						 				
						 				<h4 class="modal-title"><?=$l->judul_agenda?></h4>
						 			</div>
						 			<div class="modal-body">
						 				<p><img class="img-responsive" src="<?php echo base_url('assets/images/agenda/'.$l->userfile.''.$l->userfile_type.''); ?>" alt=""></p>
						 				<p><?=$l->isi_agenda?></p>
						 			</div>
						 			<div class="modal-footer">
						 				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						 			</div>
						 		</div><!-- /.modal-content -->
						 	</div><!-- /.modal-dialog -->
						 </div><!-- /.modal -->

						 <?php
						}
						?>
					</div><!-- /row -->
					<br>
					<br>

				</div><!-- /row -->

			</div><!-- /container -->

			<!-- ==== TEAM MEMBERS ==== -->
			<div id="greywrap">
				<div class="row">
					<div class="container" id="registration" name="registration">
						<br>

						<div id="registrasi" class="container">
							<div class="row">
								<div class="col-lg-10 col-lg-offset-1 text-center">
									<h2>● Register ●</h2>
									<hr class="small" size="6" color="blue">
									<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Register Here</button><br/><br/>
									<img src="<?php echo base_url('assets/img/register/down.png');?>" width="50px"><br/><br/>
									<a href="https://www.facebook.com/groups/1600505476873866/" class="btn btn-info btn-lg" data-toggle="modal" target="_blank">
										Gabung Event di Facebook
									</a>
									<br/>
									<br/>
									<br/>
									<br/>
									<br/>
								</div>
							</div>
						</div>

						<!-- Modal Data A -->
						<div class="modal fade" id="myModal1" role="dialog" tabindex="-1" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 align="center" class="modal-title">Registration Form</h4>
										<h4 align="center">A. Data Pribadi</h4>
										<label for="wilayah"> Wilayah:</label>
										<!-- <form role="form"> -->
										<?php echo form_open('ebecso/register1', 'id="MyForm1"'); ?>

										<select id="wilayah" class="form-control" name="wilayah" width="60px" required>
											<option value="">- Choose City -</option>
											<?php foreach ($Wilayah as $key) {
												echo '<option value="'.$key->nama_wilayah.'">'.$key->nama_wilayah.'</option>';
											} ?>
										</select>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<div class="row">
												<div class="col-md-4" >
													<label for="nama">Nama Lengkap:</label>
													<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" pattern="[A-Za-z .]{5,30}" title="Masukkan Nama Lengkap" required></br>
													<label for="nama">Tanggal Lahir:</label>
													<script>
														$(function() {
															$('.datepicker').datepicker({
																autoclose: true,
																format: "yyyy-mm-dd",
																todayHighlight: true,
																orientation: "top auto",
																todayBtn: true,
																todayHighlight: true,
															// startDate: '-0d',
														});
														});
													</script>
													<input type="text" id="datepicker" placeholder="Tanggal Lahir" class="form-control datepicker" name="tgl_lhr" required /><br/>

													<label for="jeniskelamin">Jenis Kelamin:</label>
													<select id="jeniskelamin" class="form-control" name="jeniskelamin" width="60px" required>
														<option value="">- Pilih Jenis Kelamin -</option>
														<option value="Laki Laki">Laki Laki</option>
														<option value="Perempuan">Perempuan</option>
													</select></br>
													<label for="alamat">Alamat Lengkap:</label>
													<textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat" pattern="[A-Za-z .]{5,30}" title="Masukkan Alamat Lengkap" required></textarea></br>
												</div>
												<div class="col-md-4">
												
												<div class='form-group'>
<label>Provinsi</label>
<select class='form-control' name="provinsi" id='provinsi'>
<option value='0'>--pilih--</option>
<?php 
foreach ($provinsi as $prov) {
echo "<option value='$prov[id]'>$prov[name_p]</option>";
}
?>
</select>
</div>

<div class='form-group'>
<label>Kabupaten/kota</label>
<select class='form-control' name="kota" id='kota'>
<option value='0'>--pilih--</option>
</select>
</div>


<div class='form-group'>
<label>Kecamatan</label>
<select class='form-control' name="kecamatan" id='kecamatan'>
<option value='0'>--pilih--</option>
</select>
</div>


<div class='form-group'>
<label>Kelurahan/desa</label>
<select class='form-control' name="desa" id='desa'>
<option value='0'>--pilih--</option>
</select>
</div>
												
													
												</div>
												<div class="col-md-4">
													<label>Periode:</label></br>
													<label for="btc">BTC-CTC:</label>
													<input type="text" name="btc" class="form-control" id="btc" placeholder="BTC - CTC" pattern="[0-9]{2,10}" title="Masukkan Angkatan BTC Anda" required></br>
													<label for="tc">TC:</label>
													<input type="text" name="tc" class="form-control" id="tc" placeholder="TC" pattern="[0-9]{2,10}" title="Masukkan Angkatan TC Anda" required></br>
													<label for="ms">MS:</label>
													<input type="text" name="ms" class="form-control" id="ms" placeholder="MS" pattern="[0-9]{2,10}" title="Masukkan Angkatan MS Anda" >
												</div>
											</div>
										</div>

									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-info">Next</button>
										<?php echo form_close(); ?>
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>

						<!-- modal data B -->
						<div class="modal fade" id="myModal2" role="dialog" tabindex="-1" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 align="center" class="modal-title">Registration Form</h4>
										<h4 align="center">B. JENJANG PENDIDIKAN LANJUTAN & SOSIAL KEMASYARAKATAN</h4>
									</div>

									<div class="modal-body">
										<?php echo form_open('ebecso/register2', 'id="MyForm2"'); ?>
										<div class="form-group">
											<div class="row">
									<div class="col-md-4">
										<label for="jenjang">Melanjutkan Ke:</label><br/>
										<div style="text-align:left;">
											<input type="radio" id="jenjang" name="jenjang" value="Sekolah" required/>
											<label for="jenjang">Sekolah</label></br>
											<input type="radio" id="jenjang" name="jenjang" value="Perguruan Tinggi" required/>
											<label>Perguruan Tinggi</label></br>
										</div>
										
										<br>
										<label for="namajenjang">Nama Sekolah / Kampus / PT:</label>
										<input type="text" class="form-control" id="namajenjang" name="namajenjang" placeholder="Nama Sekolah / Kampus / PT" required /></br>
										<label for="fakultas">Fakultas :</label>
										<input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Fakultas" required /></br>
										<label for="jurusan">Jurusan :</label>
										<input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan" required /></br>
									</div>
									<div class="col-md-4">
										<label>Jenjang:</label><br/>
										<input type="radio" id="jenjangkuliah" name="jenjangkuliah" value="S1" required/>
										<label for="jenjangkuliah">S1</label>
										&nbsp;&nbsp;&nbsp;
										<input type="radio" id="jenjangkuliah" name="jenjangkuliah" value="S2" required/>
										<label for="jenjangkuliah">S2</label>
										&nbsp;&nbsp;&nbsp;
										<input type="radio" id="jenjangkuliah" name="jenjangkuliah" value="S3" required/>
										<label for="jenjangkuliah">S3</label>
										<br><br>
										<label for="selesaitahun">Selesai Tahun :</label><br>
										<input type="text" class="form-control" id="selesaitahun" name="selesaitahun" placeholder="Selesai Tahun" required /></br>
									</div>
									<div class="col-md-4">
										<label>Aktif di Ormas:</label><br/>
										<input type="radio" id="ormas" name="ormas" value="Ya" required/>
										<label for="ormas">Ya</label>
										&nbsp;&nbsp;&nbsp;
										<input type="radio" id="ormas" name="ormas" value="Tidak" required/>
										<label>Tidak</label>
										<br><br>
										<label for="namaormas">Nama Ormas :</label>
										<input type="text" class="form-control" id="namaormas" name="namaormas" placeholder="Nama Ormas" required /></br>
										<label>Jabatan di Ormas:</label><br/>
										<div style="text-align:left;">
											<input type="radio" id="jabatanormas" name="jabatanormas" value="Pimpinan" required/>
											<label for="jabatanormas">Pimpinan</label><br/>
											<input type="radio" id="ormas" name="jabatanormas" value="Pengurus" required/>
											<label>Pengurus</label><br/>
											<input type="radio" id="ormas" name="jabatanormas" value="Anggota" required/>
											<label>Anggota</label><br/>
										</div>
									</div>
								</div>

										</div>

									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-info">Next</button>
										<?php echo form_close(); ?>
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>

						<!-- Modal 3 -->
						<div class="modal fade" id="myModal3" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title" align="center">Registration Form</h4>
										<h4 align="center">C. PEKERJAAN</h4>
									</div>

									<div class="modal-body">
										<?php echo form_open('ebecso/register3', 'id="MyForm3"'); ?>
										<div class="form-group">
											<div class="row">

												<div class="col-md-3">


													<label>Jenis Pekerjaan:</label><br/>
													<div style="text-align:left;">
													
														<input type="radio" id="jenispeker" name="jenispeker" value="Buruh" required/>
														<label for="jenispeker">Buruh</label> <br/>

														<input type="radio" id="jenispeker" name="jenispeker" value="Tani" required/>
														<label>Tani</label><br/>

														<input type="radio" id="jenispeker" name="jenispeker" value="Nelayan" required/>
														<label>Nelayan</label> <br/>

														<input type="radio" id="jenispeker" name="jenispeker" value="Pedagang" required/>
														<label>Pedagang</label><br/>

														<input type="radio" id="jenispeker" name="jenispeker" value="TNI" required/>
														<label>TNI</label><br/>

														<input type="radio" id="jenispeker" name="jenispeker" value="Pengajar" required/>
														<label>Pengajar</label><br/>

														<input type="radio" id="jenispeker" name="jenispeker" value="Wiraswasta" required/>
														<label>Wiraswasta</label><br/>

														<input type="radio" id="jenispeker" name="jenispeker" value="Karyawan" required/>
														<label>Karyawan</label> <br/>

														<input type="radio" id="jenispeker" name="jenispeker" value="PNS" required/>
														<label>PNS</label><br/>

														<input type="radio" id="jenispeker" name="jenispeker" value="Polri" required/>
														<label>Polri</label>

													

													</div>
												</div>

												<div class="col-md-4">
													<label>Nama Instansi Perusahaan:</label><br/>

													<label>Jabatan / Posisi:</label><br/>
													<div style="text-align:left;">
														<input type="radio" id="jabatanpos" name="jabatanpos" value="Pemilik" required/>
														<label for="jabatanpos">Pemilik</label> <br/>

														<input type="radio" id="jabatanpos" name="jabatanpos" value="Pimpinan / Manager" required/>
														<label >Pimpinan / Manager</label><br/>

														<input type="radio" id="jabatanpos" name="jabatanpos" value="Staf" required/>
														<label >Staf</label> <br/>

														<input type="radio" id="jabatanpos" name="jabatanpos" value="Pengajar / Dosen" required/>
														<label >Pengajar / Dosen</label><br/>

														<input type="radio" id="jabatanpos" name="jabatanpos" value="Guru" required/>
														<label >Guru</label><br/>

														<input type="radio" id="jabatanpos" name="jabatanpos" value="Marketing / Sales" required/>
														<label >Marketing / Sales</label> <br/>
													</div>
												</div>

												<div class="col-md-5">
													<label>Penghasilan Perbulan/rata-rata perbulan:</label><br/>
													<div style="text-align:left;">
											<input type="radio" id="penghasilan" name="penghasilan" value="kurang dari 1.000.000">
											<label> kurang dari < 1.000.000</label> <br/>

											<input type="radio" id="penghasilan" name="penghasilan" value="1.000.000 - 2.000.000">
											<label>1.000.000 - 2.000.000</label><br/>

											<input type="radio" id="penghasilan" name="penghasilan" value="2.000.000-3.000.000">
											<label>2.000.000 - 3.000.000</label><br/>

											<input type="radio" id="penghasilan" name="penghasilan" value="3.000.000 - 5.000.000">
											<label>3.000.000 - 5.000.000</label><br/>

											<input type="radio" id="penghasilan" name="penghasilan" value="5.000.000 s.d Lebih">
											<label>5.000.000 s.d Lebih</label><br/>
										</div>
												</div>
											</div>
										</div>
										<div class="pull-right">
											<input type="submit" name="name" value="Submit" class="btn btn-info">
											<!-- <button class="btn btn-info">Submit</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div><!-- container -->


		</div>
	</div>



	<!-- ==== TEAM MEMBERS ==== -->
	<div class="container" id="teamwork" name="teamwork">
		<br>
		<div class="row white centered">
			<h1 class="centered">MEET OUR AWESOME TEAM</h1>
			<hr>
			<br>
			<br>

			<div class="col-sm-2 centered">
			</div>
			
			<div class="col-sm-4 centered">
				<img class="img img-circle" src="assets/img/team/FikriFaqoth.jpg" height="170px" width="170px" alt="">
				<br>
				<h4><b>Fikri Shobah</b></h4>
				<a href="https://www.facebook.com/fikri.faqoth?ref=ts&fref=ts" class="icon icon-facebook"></a>
				<a href="" class="icon icon-instagram"></a>
				<p>Chief of Ebecso</p>
			</div><!-- col-lg-3 -->

			<div class="col-sm-4 centered">
				<img class="img img-circle" src="assets/img/team/ime.jpg" height="170px" width="170px" alt="">
				<br>
				<h4><b>Ima Safitri</b></h4>
				<a href="https://www.facebook.com/ima.safitri.nurlaylia" class="icon icon-facebook"></a>
				<a href="" class="icon icon-instagram"></a>
				<p>The Treasurer of Ebecso</p>
			</div><!-- col-lg-3 -->

			<div class="col-sm-2 centered">
			</div>
		</div><!-- container -->