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

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->

    <link rel="stylesheet" href="<?php echo base_url() ?>dist/css/bootstrap-datepicker.min.css">
    <script src="<?php echo base_url() ?>dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url() ?>dist/locales/bootstrap-datepicker.id.min.js"></script>
  
    <link rel="stylesheet" href="<?php echo base_url() ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <link type="text/css" rel="stylesheet" href="<?=base_url();?>vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" />
    <link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

     <style type="text/css">
      /*.nav-link{
        color: #FFFFFF !important;
      }*/

      .ftco-degree-bg:after{
        content: none !important;
      }
    </style>

  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      
        <div class="col-md-12">
          <?php echo $this->session->flashdata('tambah1'); ?>
          <?php echo $this->session->flashdata('hapus1'); ?>

           <div class="container">
            <div class="row">
              <a class="navbar-brand" href="<?php echo base_url() ?>C_produkPembeli/lihatProdukNew"><span>Kiko</span> <span style="color: #fdee00">Good</span> Garage</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="<?php echo base_url()?>C_produkPembeli/lihatProdukNew" class="nav-link">Beranda</a></li>
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
                      <div class="row justify-content-center">
                         <button type="button" class="btn btn-primary btn-lg marleft20" data-dismiss="modal">Close</button>&nbsp;&nbsp;
                        <button type="button" onclick="save();" class="btn btn-info btn-lg marleft20 active">Login</button>
                    </div>
                    </div>

                  </form>
                
                </div>

               </div>
               <div class="modal-footer justify-content-center">
                  <br>
                  
                <hr />
                <div class="col-md-12">
                  <div class="row justify-content-center">
                      <h6>Belum punya akun?</h6>  
                    </div>
                    <div class="row justify-content-center">
                      <button type="button" class="btn btn-info btn-lg marleft20 active" onclick="registermodel()" style="width: 300px !important;">Register</button>
                    </div>  
                </div>
                
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
                      <input type="text" class="form-control" id="date" name="tanggal_lahir" placeholder="Tanggal Lahir" required">
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
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url() ?>images/car-11.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Data Member <i class="ion-ios-arrow-forward"></i></a></span> <span>Edit Data Member</span></p>
            <h1 class="mb-3 bread">Edit Data Member</h1>
          </div>
        </div>
      </div>
    </section>

    

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-7 ftco-animate" style="margin-bottom: -80px !important">
            <h3><b>Edit Data Member</b></h3>
            <hr/>
            <div class="row d-flex mb-5 contact-info">
            
              <div class="col-md-10 block-9 mb-md-5">
                <form class="bg-light p-5 contact-form" action="<?php echo base_url().'C_dataAkun/prosesUpdateAkun' ?>" method="POST">
                  <!-- <input type="hidden" name="totalBayar" value=""> -->
                  <input type="hidden" name="idAkun" value="<?php echo $member[0]->idAkun ?>">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="namaLengkap" value="<?php echo $member[0]->namaLengkap ?>" required>
                  </div>
                 <div class="form-group">
                    <input type="text" class="form-control" placeholder="Password" name="password" value="<?php echo $member[0]->password ?>" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="No Telepon" name="noTelepon" value="<?php echo $member[0]->noTelepon ?>" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="datemember" name="tglLahir" placeholder="Tanggal Lahir" value="<?php echo $member[0]->tglLahir ?>" required">
                  </div>
                  <div class="form-group">
                    <textarea cols="10" rows="4" name="alamatLengkap" class="form-control" placeholder="Alamat Lengkap" required><?php echo $member[0]->alamatLengkap ?></textarea>
                  </div>
                   <div class="form-group">
                       <input class="form-control" type="file" name="userfile" value="<?php echo $member[0]->foto ?>">
                        <span><i>Format file : JPG/PNG | Maksimal Upload : 10 Mb</i></span>
                    </div>
                  <div class="form-group">
                  <br>
                    <div class="row justify-content-left">
                           <p class="mb-0"><a href="<?php echo base_url()?>C_dataAkun/lihatmemberNew" class="btn btn-primary py-3 px-5">Kembali</a></p>&nbsp;&nbsp;
                          <input type="submit" name="submit" value="Simpan" class="btn btn-success py-3 px-5" style="margin-left: 15px !important;">
                      </div>
                  </div>
                </form>
              </div>
            </div>
           
            
          </div> <!-- .col-md-8 -->
          <div class="col-md-5 sidebar ftco-animate">

            <div class="sidebar-box ftco-animate">
              <h3><b>Data Poin</b></h3>
              <hr/>
              <div class="block-21 mb-4 d-flex">
                <!-- <a class="blog-img mr-4" style="background-image: url(<?php echo base_url() ?>images/image_1.jpg);"></a> -->
                <div class="text">
                  <h3 class="heading">
                     <p style="color: #000000 !important;">Total Poin : <?php echo $member[0]->poin ?></p>
                  </h3>
                 
                </div>
              </div>
              
            </div>

            <div class="sidebar-box ftco-animate" style="margin-top: -70px !important;">

              <h3><b>Foto</b></h3>
              <hr/>
              <div class="about-author d-flex p-4 bg-light">
                <div class="bio mr-5" style="margin-left: -25px !important;">
                  <img src="<?php echo base_url() ?>gambar_proyek/<?php echo $member[0]->foto ?>" style="width: 150px !important;" alt="Image placeholder" class="img-fluid mb-4">
                  <!-- <img src="<?php echo base_url() ?>gambar_proyek/<?php echo $profil[0]->foto ?>" style="cursor: pointer !important;height: 100px; width: 120px;"> -->
                </div>
              </div>
                
            </div>
            
          </div>

        </div>
      </div>

      
    </section> <!-- .section -->

    <footer class="ftco-footer ftco-bg-dark ftco-section" style="margin-top: -90px !important;">
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
    
   <script type="text/javascript">

    function registermodel(){

      $('#loginmodel').modal('hide');

    $('#registermodel').modal('show');
        
  }

  function saveregister(){

    var namaLengkap = $('#namaLengkap').val();
    var noTelepon   = $('#noTelepon').val();
    var password  = $('#password').val();
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
     //         dataType: "text",
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

  $( function() {

      $( "#date" ).datepicker({
        autoclose:true,
        todayHighlight:true,
        format:'yyyy-mm-dd',
        language: 'id',
      });

      $( "#datemember" ).datepicker({
        autoclose:true,
        todayHighlight:true,
        format:'yyyy-mm-dd',
        language: 'id',
      });


    } );

  </script>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <!-- <script src="<?php echo base_url() ?>js/jquery.min.js"></script> -->
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
  <!-- <script src="<?php echo base_url() ?>js/bootstrap-datepicker.js"></script> -->
  <script src="<?php echo base_url() ?>js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url() ?>js/scrollax.min.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
  <!-- <script src="<?php echo base_url() ?>js/google-map.js"></script> -->
  <script src="<?php echo base_url() ?>js/main.js"></script>
    
  </body>
</html>