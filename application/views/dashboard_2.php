<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title?></title>
  <meta content="" name="description">

  <meta content="" name="keywords">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url()?>AdminLTE-2.4.3/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>AdminLTE-2.4.3/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url()?>AdminLTE-2.4.3/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>AdminLTE-2.4.3/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url()?>AdminLTE-2.4.3/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= base_url()?>AdminLTE-2.4.3/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= base_url()?>AdminLTE-2.4.3/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= base_url()?>AdminLTE-2.4.3/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url()?>AdminLTE-2.4.3/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url()?>AdminLTE-2.4.3/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- data table -->
  <link rel="stylesheet" href="<?= base_url()?>AdminLTE-2.4.3/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">


  <!-- Favicons -->
  <link href="<?= base_url()?>FLexStart/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url()?>FLexStart/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>FLexStart/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>FLexStart/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url()?>FLexStart/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url()?>FLexStart/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url()?>FLexStart/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url()?>FLexStart/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <!-- Morris chart -->
  <link rel="stylesheet" href="<?= base_url()?>AdminLTE-2.4.3/bower_components/morris.js/morris.css">

  <!-- Template Main CSS File -->
  <link href="<?= base_url()?>FLexStart/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.6.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="" class="logo d-flex" style="float: left;">
        <span></span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="scrollto" href="#about">Home</a></li>
          <li><a class="scrollto" href="#recent-blog-posts">Voting</a></li>
          <li class="dropdown"><a href="#"><span><?= $this->session->userdata('nama')?></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="scrollto" href="<?= site_url('auth/logout')?>">Log-out</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
    <section id="about" class="recent-blog-post mt-5">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h1 class="text-primary" style="font-size: 30px;"><span>Perolehan Suara</span></h1>
            </header>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                    <div class="box-header with-border">
                        <i class="fa fa-bar-chart-o justify-content-center"></i>
                        <h3 class="box-title justify-content-center">Bar Chart</h3>
                    </div>
                    <div class="box-body">
                        <div id="bar-chart" style="height: 300px;"></div>
                    </div>
                    <!-- /.box-body-->
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Voting</p>
        </header>

        <div class="row">
          <?php foreach($rows as $row):?>
          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="<?= base_url()?>img/<?= $row->foto?>" class="img-fluid" alt=""></div>
              <span class="post-date text-center"><?= $row->nama_kandidat?></span>
              <small class="post-title text-center"><?= $row->nama_calon?></small>
              <div class="row">
                  <div class="col-md-12 text-center">
                      <a href="<?= site_url('warga/visimisi')?>/<?= $row->id_kandidat?>" class="btn btn-primary">Lihat visi & misi</a>
                      <?php
                        if($user->status == 0 ):?>
                          <a href="#" class="btn btn-success" <?= $this->session->userdata('status')==1 ? 'disabled' : ''?> data-nama_kandidat="<?= $row->nama_kandidat?>" data-id_user="<?= $this->session->userdata('id')?>" >Pilih <?= $row->nama_kandidat?></a>
                      <?php else:?>
                          <button class="btn btn-success" <?= $this->session->userdata('status')==1 ? 'disabled' : ''?> data-nama_kandidat="<?= $row->nama_kandidat?>" data-id_user="<?= $this->session->userdata('id')?>" disabled>Pilih <?= $row->nama_kandidat?></button>
                      <?php endif?>
                  </div>
              </div>
            </div>
          </div>
          <?php endforeach?>

        </div>

      </div>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Custom by <a href="https://bootstrapmade.com/">Kelompk kami</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- jQuery 3 -->
<script src="<?= base_url()?>AdminLTE-2.4.3/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url()?>AdminLTE-2.4.3/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- FLOT CHARTS -->
<script src="<?= base_url()?>AdminLTE-2.4.3/bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?= base_url()?>AdminLTE-2.4.3/bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?= base_url()?>AdminLTE-2.4.3/bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="<?= base_url()?>AdminLTE-2.4.3/bower_components/Flot/jquery.flot.categories.js"></script>
<!-- Page script -->
<!-- DataTables -->
<script src="<?= base_url()?>AdminLTE-2.4.3/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>AdminLTE-2.4.3/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url()?>AdminLTE-2.4.3/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>FLexStart/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="<?= base_url()?>FLexStart/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url()?>FLexStart/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url()?>FLexStart/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url()?>FLexStart/assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url()?>FLexStart/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url()?>FLexStart/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <!-- bar chart -->
  <script src="<?= base_url()?>AdminLTE-2.4.3/bower_components/Flot/jquery.flot.categories.js"></script>
  <!-- sweet alert -->
  <script src="<?= base_url()?>sweetalert/sweetalert2.all.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url()?>FLexStart/assets/js/main.js"></script>
  <script>
    $(function () {
        /*
        * Flot Interactive Chart
        * -----------------------
        */
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data = [], totalPoints = 100

        function getRandomData() {

        if (data.length > 0)
            data = data.slice(1)

        // Do a random walk
        while (data.length < totalPoints) {

            var prev = data.length > 0 ? data[data.length - 1] : 50,
                y    = prev + Math.random() * 10 - 5

            if (y < 0) {
            y = 0
            } else if (y > 100) {
            y = 100
            }

            data.push(y)
        }

        // Zip the generated y values with the x values
        var res = []
        for (var i = 0; i < data.length; ++i) {
            res.push([i, data[i]])
        }

        return res
        }

        var interactive_plot = $.plot('#interactive', [getRandomData()], {
        grid  : {
            borderColor: '#f3f3f3',
            borderWidth: 1,
            tickColor  : '#f3f3f3'
        },
        series: {
            shadowSize: 0, // Drawing is faster without shadows
            color     : '#3c8dbc'
        },
        lines : {
            fill : true, //Converts the line chart to area chart
            color: '#3c8dbc'
        },
        yaxis : {
            min : 0,
            max : 100,
            show: true
        },
        xaxis : {
            show: true
        }
        })

        var updateInterval = 500 //Fetch data ever x milliseconds
        var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
        function update() {

        interactive_plot.setData([getRandomData()])

        // Since the axes don't change, we don't need to call plot.setupGrid()
        interactive_plot.draw()
        if (realtime === 'on')
            setTimeout(update, updateInterval)
        }

        //INITIALIZE REALTIME DATA FETCHING
        if (realtime === 'on') {
        update()
        }
        //REALTIME TOGGLE
        $('#realtime .btn').click(function () {
        if ($(this).data('toggle') === 'on') {
            realtime = 'on'
        }
        else {
            realtime = 'off'
        }
        update()
        })
        /*
        * END INTERACTIVE CHART
        */

        /*
        * BAR CHART
        * ---------
        */

        var bar_data = {
        data : [['Calon ke-1', <?= $kandidat1?>], ['Calon ke-2', <?= $kandidat2?>], ['Calon ke-3', <?= $kandidat3?>]],
        color: ['#f3f3f3', 
                'rgba(255, 99, 132, 0.2)', 
                'rgba(255, 286, 86, 0.2)'
      ]
        }
        $.plot('#bar-chart', [bar_data], {
        grid  : {
            borderWidth: 1,
            borderColor: '#f3f3f3',
            tickColor  : '#f3f3f3'
        },
        series: {
            bars: {
            show    : true,
            barWidth: 0.5,
            align   : 'center'
            }
        },
        xaxis : {
            mode      : 'categories',
            tickLength: 0
        }
        })
        /* END BAR CHART */
    });

  $('.btn-success').on('click', function(){
    let nama_kandidat = $(this).data('nama_kandidat');
    let id_user = $(this).data('id_user');
    // sweet alert
    Swal.fire({
    title: 'Apakah anda yakin?',
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yakin'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: 'post',
          url: '<?= site_url('warga/pilih_kandidat')?>',
          dataType: 'json',
          data: {
            'nama_kandidat': nama_kandidat,
            'id_user' : id_user
          },
          success:function(result){
            if(result.success == true){
              Swal.fire({
                title: 'Terimakasih telah berpartisipasi',
                text: "You won't be able to revert this!",
                icon: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oke'
              })
            }
          }
        })
      }
    })
  });

  </script>
</body>

</html>