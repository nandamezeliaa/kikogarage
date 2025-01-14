<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kiko Good Garage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/logokiko.jpeg">
	<link rel="icon" href="<?php echo base_url() ?>asset/images/logokiko.jpeg">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url() ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url() ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">

     <style type="text/css">
    	/*.nav-link{
    		color: #FFFFFF !important;
    	}*/
    </style>

  </head>
  <body>
    
	 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo base_url() ?>C_produkPembeli/lihatProdukNew"><span>Kiko</span> <span style="color: #fdee00">Good</span> Garage</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="<?php echo base_url() ?>C_produkPembeli/lihatProdukNew" class="nav-link">Beranda</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/CarWash') ?>" class="nav-link">Cars Wash</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Interior') ?>" class="nav-link">Interior</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Eksterior') ?>" class="nav-link">Eksterior</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/pencarianNew/Coating') ?>" class="nav-link">Coating</a></li>
	          <li class="nav-item"><a href="<?php echo base_url('C_produkPembeli/datareservasi') ?>" class="nav-link">Data Reservasi</a></li>
	          <?php if ($this->session->userdata('nama') AND $this->session->userdata('pass')) { ?>
		          	
		          	<li class="nav-item dropdown" style="cursor: pointer;">
	                  <ul class="nav">
		                    <li class="dropdown" style="cursor: pointer;">
		                      <p class="nav-link" style="padding-top: 14px !important;"><?=$this->session->userdata('namaLengkap3')?></p>

		                      <ul class="dropdown-menu">
		                          <li><a href="<?php echo base_url() ?>C_transaksiProduk/allTransaksiNew" class="dropdown-item">All Reservasi</a></li>
		                          <li><a href="<?php echo base_url() ?>C_dataAkun/lihatmemberNew" class="dropdown-item">Member</a></li>
	                      		  <li><a href="<?=base_url('C_dataAkun/logout')?>" class="dropdown-item">Logout</a></li>
		                      </ul>
		                    </li>
		                </ul>
	                </li>

	                <?php }else{ ?>

	                <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#loginmodel">Login</a></li>

	                <?php } ?>
	        </ul>
	      </div>
	    </div>
	  </nav>

	  <div class="modal fade" id="loginmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	     <div class="modal-dialog" role="document">
	        <div class="modal-content">
	        	<div id="login">
		           <div class="modal-header">
		             
		              <div class="col-md-11">
				          <h4 class="modal-title textBlack" align="left">Form Login</h4>
				        </div>
				        <div class="col-md-1">
				           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        </div>
		           </div>
		           <div class="modal-body">
		              
		              <div class="col-md-12 block-12">
			            <form action="<?php echo base_url().'C_dataAkun/prosesLogin'?>" method="POST" id="regForm">
			              <div class="form-group">
			                <input type="text" class="form-control" id="username" placeholder="Nama Depan" name="username" required>
			              </div>
			              <div class="form-group">
			                <input type="password" class="form-control" id="passwordlogin" placeholder="Password" name="password" required>
			              </div>
			              
			              <div class="form-group">
			                <!-- <input type="submit" name="submit" value="Kirim" class="btn btn-primary py-3 px-5"> -->
			                 <button type="button" class="btn btn-primary btn-lg marleft20" data-dismiss="modal">Close</button>
			                <button type="button" onclick="save();" class="btn btn-info btn-lg marleft20 active">Login</button>
			              </div>

			            </form>
			          
			          </div>

		           </div>
		           <div class="modal-footer justify-content-center">
		           		<br>
				        <hr />
				        <button type="button" class="btn btn-info btn-lg marleft20 active" onclick="registermodel()" style="width: 300px !important;">Register</button>
		           </div>
		         </div>


	        </div>

	     </div>
	  </div>

	  <div class="modal fade" id="registermodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	     <div class="modal-dialog" role="document">
	        <div class="modal-content">
	        	<div id="login">
		           <div class="modal-header">
		             
		              <div class="col-md-11">
				          <h4 class="modal-title textBlack" align="left">Form Registrasi</h4>
				        </div>
				        <div class="col-md-1">
				           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        </div>
		           </div>
		           <form action="<?php echo base_url().'C_dataAkun/prosesCreateAkun'?>" method="POST" name="createAkun" enctype="multipart/form-data" id="regisForm">

		           <div class="modal-body">
		              
		              <div class="col-md-10 block-10">

			              <div class="form-group">
			                <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Nama Lengkap" required>
			              </div>
			              <div class="form-group">
			                <input type="text" class="form-control" id="noTelepon" name="noTelepon" placeholder="No Telepon" required>
			              </div>
			              <div class="form-group">
			                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
			              </div>

			              <div class="form-group">
			                <textarea cols="10" rows="4" name="alamatLengkap" class="form-control" placeholder="Alamat Lengkap" required></textarea>
			              </div>
			               
			              <div class="form-group">
			                 <input class="form-control" type="file" name="userfile" required>
                    		<span><i>Format file : JPG/PNG | Maksimal Upload : 10 Mb</i></span>
			              </div>

			          </div>

		           </div>
		           <div class="modal-footer justify-content-center">
		           			<button type="button" class="btn btn-primary btn-lg marleft20" data-dismiss="modal">Close</button>
			                <button type="button" onclick="saveregister();" class="btn btn-info btn-lg marleft20 active">Submit</button>
		           </div>
		           </form>
		         </div>


	        </div>

	     </div>
	  </div>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url() ?>images/car-8.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>All Reservasi <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">All Reservasi</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<?php 
    					if (!empty($pembayaran)) { ?>
    				<div class="car-list">
    					
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th class="bg-primary heading">Detail</th>
						        <!-- <th class="bg-dark heading">Per Day Rate</th>
						        <th class="bg-black heading">Leasing</th> -->
						      </tr>
						    </thead>
						    <tbody>

						   	<?php foreach ($pembayaran as $allTransaksi) { 

						   		if (empty($allTransaksi->tglTransaksi)) {
			                      $dateUpdate = '-';
			                    }else{
			                      $dateUpdate = date_format (new DateTime($allTransaksi->tglPembayaran), 'H:i:s').' - '.date_format (new DateTime($allTransaksi->tglTransaksi), 'd M Y');
			                    }

			                ?>

						      <tr class="">
						      	<td class="product-name">
						      		<!-- <div class="img" style="background-image:url(<?php echo base_url() ?>gambar_proyek/<?php echo $allTransaksi->gambar ?>);">
						      			
						      		</div> -->
						      		<h5>Status</h5>
						      		<span class="subheading"><?php echo $allTransaksi->statusPembayaran; ?></span>
						      	</td>
						        <td class="product-name">
						        	<h3>No Antrian : <?php echo $allTransaksi->noAntrian; ?></h3>
						        	<!-- <p class="mb-0 rated"> -->
						        		<span class="subheading"> No Plat : <?php echo $allTransaksi->noPlat; ?></span>
						        		
						        	<!-- </p> -->
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom">
						        		<!-- <a href="<?php echo base_url() ?>C_transaksiProduk/lihatTransaksi/'.$allTransaksi->kodeUnik.'/'.$allTransaksi->KdTukang">Lihat Detail</a> -->
						        		<?php echo anchor('C_transaksiProduk/lihatTransaksiNew/'.$allTransaksi->kodeUnik.'/'.$allTransaksi->KdTukang,'Detail',array('class'=>'btn-round', 'style'=>'padding: 10px 50px !important;'));?>
						        	</p>
						        	<div class="price-rate" style="text-align: justify !important;margin-left: 40px !important;">
						        		<!-- <span class="subheading">Status : <?php echo $allTransaksi->statusPembayaran; ?></span><br> -->
						        		<!-- <span class="subheading">No Antrian : <?php echo $allTransaksi->noAntrian; ?></span><br> -->
						        		<span class="subheading">Tgl Reservasi : <?php echo $dateUpdate; ?></span><br>
						        		<span class="subheading">Jenis Booking : <?php echo $allTransaksi->jenisBooking; ?></span><br>
						        		<!-- <span class="subheading">No Plat : <?php echo $allTransaksi->noPlat; ?></span> -->
							        	<h3>
							        		<span class="num"><small class="currency"></small>Harga : Rp. <?php echo  number_format($allTransaksi->totalBayar, 0,",","."); ?></span>
							        		<!-- <span class="per">/per hour</span> -->
							        	</h3>
							        	
						        	</div>

						        </td>
						       
						      </tr><!-- END TR-->

						      <?php } ?>

						   
						      <!-- END TR-->
						    </tbody>
						  </table>

						  <?php echo $pag; ?>

					  </div>
					  <?php }else{ ?>


					  <section class="ftco-section bg-light" style="margin-top: -80px !important; margin-bottom: -200px !important;">

					      <div class="container" style="margin-top: -50px !important;">
					        
					        <div class="row">

					              <div class="col-md-8">
					                <div class="car-wrap rounded ftco-animate">

					                  <div class="text">
					                  <h4 class="mb-0"><b>Reservasi Kosong</b></h4>
					                  <h4 class="mb-0"><b>Harap Reservasi Terlebih Dahulu</b></h4>
					                  <br>
					                  <p class="mb-0"><a href="<?php echo base_url()?>C_produkPembeli/lihatProdukNew" class="btn btn-primary py-3 px-4">Reservasi Sekarang</a></p>
					                  <br>
					                  </div>
					                  
					                </div>
					              </div>
					                
					        </div>
					      </div>
			    		</section>

					  	<?php }?>

    			</div>
    		</div>
			</div>
		</section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container" style="margin-top: -75px !important;margin-bottom: -85px !important;">
        <div class="row mb-5">
          

          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Informasi</h2>
              <ul class="list-unstyled">
                <li><a href="<?php echo base_url() ?>webbackend/C_dataKiko/lihatAboutUsFoNew" class="py-2 d-block">Tentang Kami</a></li>
                <!-- <li><a href="<?php echo base_url() ?>webbackend/C_dataKiko/lihatDataArtikelFo" class="py-2 d-block">Artikel</a></li> -->
                <li><a href="<?php echo base_url() ?>webbackend/C_dataKiko/lihatDataGaleriFoNew"" class="py-2 d-block">Galeri</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="<?php echo base_url() ?>webbackend/C_pesanMasuk/kirimPesanNew" class="py-2 d-block">Kontak Kami</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Kiko Good Garage</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jalan Soewoko No. 30 Jetis, Kec. Lamongan, Kab. Lamongan 62211</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">085856442607</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">kikogoodgarage@gmail.com</span></a></li>
	              </ul>

	            </div>
	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5" style="margin-top: -10px !important;">
	                <li class="ftco-animate"><a href="https://twitter.com/login" target="_blank" title="Twitter"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="https://www.instagram.com/accounts/login/" target="_blank" title="Instagram"><span class="icon-instagram"></span></a></li>
	              </ul>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: -55px !important;">
          <div class="col-md-12 text-center">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by Farhan Sutrisno
          </div>
        </div>
      </div>
    </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script type="text/javascript">

  	function registermodel(){

  		$('#loginmodel').modal('hide');

		$('#registermodel').modal('show');
		    
	}

	function saveregister(){

		var namaLengkap = $('#namaLengkap').val();
		var noTelepon 	= $('#noTelepon').val();
		var password 	= $('#password').val();
		var valid = 1;
	  	
		if(namaLengkap == ''){
			valid = 0;
			var msg = 'Nama Lengkap Tidak Boleh Kosong';
		}

		if(password == ''){
			valid = 0;
			var msg = 'Password Tidak Boleh Kosong Tidak Boleh Kosong';
		}

		if(noTelepon == ''){
			valid = 0;
			var msg = 'No Telepon Tidak Boleh Kosong Tidak Boleh Kosong';
		}

		if(valid == 1){

			document.getElementById("regisForm").submit();
			
		}else{
			alert(msg);
		}
		    
	}
  	
	function save(){

		var username=$('#username').val();
		var passwordlogin=$('#passwordlogin').val();
		var valid = 1;
	  	
		if(username == ''){
			valid = 0;
			var msg = 'Username Tidak Boleh Kosong';
		}

		if(passwordlogin == ''){
			valid = 0;
			var msg = 'Password Tidak Boleh Kosong';
		}

		if(valid == 1){


			document.getElementById("regForm").submit();
			
			// $.ajax({
			//       type:"post",
   //                url: "<?php echo base_url(); ?>C_dataAkun/prosesLogin",
		 //      	  dataType: "text",
			//       data: {
			//           username: username,
			//           password: password
			//       },
			//       success: function(data) {
			//           console.log(username);
			//           console.log(password);
			//           $('#loginmodel').modal('hide');
			          
	  //                 window.location.href = "<?php echo base_url() ?>C_produkPembeli/lihatProdukNew";
	                  
			//       },
			//       error: function(xhr, ajaxOptions, thrownError)
			//       {
			//           alert("Failed to get where column list, please try again");
			
			//       }
			// });

		}else{
			alert(msg);
		}
		    
	}

	</script>
  
  <script src="<?php echo base_url() ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url() ?>js/popper.min.js"></script>
  <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url() ?>js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url() ?>js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url() ?>js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url() ?>js/aos.js"></script>
  <script src="<?php echo base_url() ?>js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url() ?>js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url() ?>js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url() ?>js/scrollax.min.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
  <!-- <script src="<?php echo base_url() ?>js/google-map.js"></script> -->
  <script src="<?php echo base_url() ?>js/main.js"></script>
    
    
  </body>
</html>