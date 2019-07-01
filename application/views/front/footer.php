		<div id="footerwrap">
			<footer class="footer inverse-wrapper">
				<div class="container" id="contact" name="contact">
					<div class="row">
						<div class="col-lg-4">
							<div class="widget2">
								<h4 class="widget2-title"><b>Popular Agenda</b></h4>
								<ul class="post-list">
									<?php foreach ($post_new_data as $l) { ?>
									<li>
										<div class="icon-overlay2">
											<span class="icn-more"></span>
											<img src="<?php echo base_url('assets/images/agenda/'.$l->userfile.''.$l->userfile_type.''); ?>" width="100%" height="90%" alt=""></a>
										</div>
										<div class="meta">
											<h5><?=$l->judul_agenda?></a></h5>
											<em><span class="date"><?=$l->time_upload?></span>
										</div>
									</li>
									<?php } ?>
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="widget2">
								<h4 class="widget2-title"><b>Tags</b></h4>
								<ul class="tag-list2">
									<li><a href="./saved_resource" class="btn2">Web</a></li>
									<li><a href="./saved_resource" class="btn2">Ebecso</a></li>
									<li><a href="./saved_resource" class="btn2">Blog</a></li>
									<li><a href="./saved_resource" class="btn2">Community</a></li>
									<li><a href="./saved_resource" class="btn2">Vlog</a></li>
								</ul>
							</div>
							<div class="widget2">
								<h4 class="widget2-title"><b>Social Media</b></h4>
								<ul class="social2">
									<li><a href="https://www.facebook.com/groups/1600505476873866/"><i class="icon icon-facebook"></i></a></li>
									<li><a href="https://www.instagram.com/ebecso/"><i class="icon icon-instagram"></i></a></li>
									<li><a href="./saved_resource"><i class="icon icon-youtube"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="widget2">
								<h4 class="widget2-title"><b>Get In Touch</b></h4>
								<font color="white">
									<p>Tell us everything that you wanna ask</p>
									<div class="contact-info"> <i class="icon-location"></i> St. Joyo Tambaksari RT.01 RW.01. Merjosari - Lowokwaru, Malang City<br><br>
										<i class="icon-phone"></i> 085 607060 676 <br>
										<i class="icon-phone"></i> 085 791 230 656 <br>
										<i class="icon-mail"></i> <a href="">ebecso.malang@gmail.com</a><br><br>
										<span class="copyright">Copyright &copy; Ebecso 2017</span>
									</div>
								</font>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- jQuery -->
		<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

		<!-- Plugin JavaScript -->
		<script src="<?php echo base_url('assets/js/jquery.form.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/sweetalert.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.easing.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/classie.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/cbpAnimatedHeader.js'); ?>"></script>

		<!-- Contact Form JavaScript -->
		<script src="<?php echo base_url('assets/js/jqBootstrapValidation.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/contact_me.js'); ?>"></script>

		<!-- Custom Theme JavaScript -->
		<script src="<?php echo base_url('assets/js/agency.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/retina.js')?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easing.1.3.js')?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/smoothscroll.js')?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-func.js')?>"></script>
		<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>
	</body>
</html>
