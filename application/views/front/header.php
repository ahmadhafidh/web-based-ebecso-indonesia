<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv=”Refresh” content=”0;URL=https://www.ebecso.id” />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
  <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
  <link rel="shortcut icon" href="assets/ico/favicon.png">

  <title> EBECSO</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/full-slider.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/icomoon.css">
  <link href="assets/css/animate-custom.css" rel="stylesheet">
  <style>
  divregister {
    transition: all linear 0.5s;
    background-color: lightblue;
    height: 100px;
    width: 100%;
    position: relative;
    top: 0;
    left: 0;
  }
  </style>

   <!-- Datepicker load  -->
  <script src="<?php echo base_url('assets/datepicker/js/jquery.min.js');?>"></script>
 
  <script src="<?php echo base_url('assets/admin/plugins/daterangepicker/daterangepicker.js');?>"></script>
    <!-- datepicker -->
  <script src="<?php echo base_url('assets/admin/plugins/datepicker/bootstrap-datepicker.js');?>"></script>

  <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">


  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

  <script src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
      <![endif]-->
    </head>

    <body data-spy="scroll" data-offset="0" data-target="#navbar-main">


      <div id="navbar-main">
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="#home" class="smoothScroll">Home</a></li>
                <!-- <li> <a href="#about" class="smoothScroll"> </a></li> -->
                <!-- <li> <a href="#services" class="smoothScroll"> Services</a></li> -->
                <li> <a href="#agenda" class="smoothScroll"> Agenda</a></li>
                <li> <a href="#registration" class="smoothScroll"> Registration</a></li>
                <li> <a href="#teamwork" class="smoothScroll"> Teamwork</a></li>
                <li> <a href="#contact" class="smoothScroll"> Contact</a></li>
              </div><!--/.nav-collapse -->
            </div>
          </div>
        </div>

		
		
		
	<script src="<?php echo base_url('assets/slidershow/js/jssor.slider-22.2.16.min.js');?>" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <style>
        /* jssor slider loading skin oval css */

        .jssorl-oval img {
            animation-name: jssorl-oval;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-oval {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        .jssora22l.jssora22lds      (disabled)
        .jssora22r.jssora22rds      (disabled)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
        .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
        .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-oval" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="<?php echo base_url('assets/slidershow/img/oval.svg');?>" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;">
            <?php
				foreach ($post_featured_data as $post_featured){
			?>
			<div>
                <img data-u="image" src="<?php echo base_url('assets/images/agenda/'.$post_featured->userfile.$post_featured->userfile_type);?>" />
                <div style="position:absolute;top:370px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(255,255,255,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;"><?php echo $post_featured->judul_agenda; ?></div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;"><?php echo $post_featured->wilayah; ?></div>
                </div>
            </div>
			<?php
				}
			?>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>