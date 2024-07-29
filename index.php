<?php
include ('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ADMIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

          <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><b>A</b>LT</span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><b>MENU UTAMA</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
            </nav>
          </header>
          <!-- Left side column. contains the logo and sidebar -->
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!-- sidebar menu: : style can be found in sidebar.less -->
              <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active treeview">
                  <a href="?p=booking">
                    <i class="fa fa-inbox"></i> <span>BOOKING</span>
                  </a>
                  <a href="?p=room">
                    <i class="fa fa-inbox"></i> <span>ROOM</span>
                  </a>
<!--               <ul class="treeview-menu">
                <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul> -->
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php
        if(isset($_GET['p'])){
          $p = $_GET['p'];
          switch ($p) {
            case 'booking':
            include('booking.php');
            break;

            case 'room':
            include('room.php');
            break;
          }
        } else {
          include('booking.php');
        }
        ?>
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2017 All rights reserved.
        </footer>
      </div><!-- ./wrapper -->

      <!-- jQuery 2.1.4 -->
      <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button);
      </script>
      <!-- Bootstrap 3.3.5 -->
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <!-- daterangepicker -->
      <script src="plugins/daterangepicker/moment.min.js"></script>
      <script src="plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Sparkline -->
      <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
      <!-- jvectormap -->
      <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="plugins/knob/jquery.knob.js"></script>
      <!-- Bootstrap WYSIHTML5 -->
      <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
      <!-- Slimscroll -->
      <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
      <!-- FastClick -->
      <script src="plugins/fastclick/fastclick.min.js"></script>
      <!-- AdminLTE App -->
      <script src="dist/js/app.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="dist/js/demo.js"></script>
      <script src="js/jquery.dataTables.min.js"></script> 
      <script type="text/javascript">
        $("#tabel-room").DataTable({
          "columnDefs": [
          { "targets": [3,4], "orderable": false }
          ]
        });
        $("#tbl-book").DataTable({
          "columnDefs": [
          { "targets": [6], "orderable": false }
          ]
        });
        $(".eroom").click(function(){
          var id = this.name;
          window.location.href= "?p=room&e="+id;
        });
        $(".hroom").click(function(){
          var id = this.name;
          window.location.href= "proses.php?h="+id;
        });
        $('#edatepicker').daterangepicker({
          "timePicker": true,
          "timePicker24Hour": true,
          "timePickerIncrement": 15,
          "linkedCalendars": false,
          // "setDate": '',
          "minDate": moment(),
          "endDate": moment().add(1, 'hour'),
          "locale": {
            "format": "DD/MM/YYYY H:mm",
            "separator": " - ",
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "daysOfWeek": [
            "Su",
            "Mo",
            "Tu",
            "We",
            "Th",
            "Fr",
            "Sa"
            ],
            "monthNames": [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
            ]
          }
        });
        $('#datepicker').daterangepicker({
          "timePicker": true,
          "timePicker24Hour": true,
          "timePickerIncrement": 15,
          "linkedCalendars": false,
          // "setDate": '',
          "minDate": moment(),
          "endDate": moment().add(1, 'hour'),
          "locale": {
            "format": "DD/MM/YYYY H:mm",
            "separator": " - ",
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "daysOfWeek": [
            "Su",
            "Mo",
            "Tu",
            "We",
            "Th",
            "Fr",
            "Sa"
            ],
            "monthNames": [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
            ]
          }
        });
        $(document).ready( function(){
          $('.konfirmasi').click( function(){
            var name = $(this).attr('name');
            $.ajax({
              url: 'proses.php',
              type: 'post',
              data: {'konfirmasi':name},
              success: function(response){
                if (response = 'oke') {
                  window.location.href='?p=booking';
                }
              }
            })
          })
          $('.cek_in').click( function(){
            var name = $(this).attr('name');
            $.ajax({
              url: 'proses.php',
              type: 'post',
              data: {'cek_in':name},
              success: function(response){
                if (response = 'oke') {
                  window.location.href='?p=booking';
                }
              }
            })
          })
          $('.cek_out').click( function(){
            var name = $(this).attr('name');
            $.ajax({
              url: 'proses.php',
              type: 'post',
              data: {'cek_out':name},
              success: function(response){
                if (response = 'oke') {
                  window.location.href='?p=booking';
                }
              }
            })
          })
          $('.button_hapus_booking').click( function(){
            var name = $(this).attr('name');
            $.ajax({
              url: 'proses.php',
              type: 'post',
              data: {'idhapusbook':name},
              success: function(response){
                if (response == 'oke') {
                  alert('Hapus Data Booking Berhasil.');
                  window.location.href='?p=booking';
                } else {
                  alert('Hapus Data Booking Gagal.');
                  window.location.href='?p=booking';
                }
              }
            })
          })
          $('.button_edit_booking').click( function(){
            var name = $(this).attr('name');
            $('#emodal-book').modal('show');
            $.ajax({
              url: 'proses.php',
              type: 'post',
              data: {"edbook":name},
              dataType: 'json',
              success: function(json){
                $("input[name=ebnama]").val(json.nama_pembooking);
                $("input[name=ebno_telp]").val(json.telp_pembooking);
                $("input[name=ebunit_kerja]").val(json.unit_kerja);
                $("textarea[name=ebagenda_rapat]").val(json.agenda_rapat);
              }
            })
          })
          $('#form_cari').submit( function(e){
            var data = $('#form_cari').serialize(); 
            $.ajax({
              type: "post",
              url: "proses.php",
              data: data,
              dataType: "json",
              success: function(json){
                if (json == 'no') {
                  $("#hid-room").val('');
                  $("#imgbr").attr('src', 'image/no-img.png');
                  $("#fdet").text('');
                  $(".alert-book").addClass("hidden");
                  $(".btn-book, .btn-tersedia").addClass("hidden");
                  alert('Room tidak tersedia. silahkan ganti tanggal atau jam dengan waktu yang lain');
                } else {
                  if (json.gambar == false) {
                    var date = $("#datepicker").val();
                    $("#hid-room").val(json.id_room);
                    $("#imgbr").attr('src', 'image/no-img.png');
                    $("#fdet").text(json.detail_room);
                    $(".alert-book").removeClass("hidden");
                    $(".btn-book, .btn-tersedia").removeClass("hidden");
                    $("input[name=bdate]").val(date);
                    $("input[name=bid_room]").val(json.id_room);
                  } else {
                    var date = $("#datepicker").val();
                    $("#hid-room").val(json.id_room);
                    $("#imgbr").attr('src', json.gambar);
                    $("#fdet").text(json.detail_room);
                    $(".alert-book").removeClass("hidden");
                    $(".btn-book, .btn-tersedia").removeClass("hidden");
                    $("input[name=bdate]").val(date);
                    $("input[name=bid_room]").val(json.id_room);
                  }
                }
              }
            })
            e.preventDefault();
          })
          $(".btn-book").click( function(){
            $("#modal-book").modal("show");
          })
          $("#form-btn-save").submit( function(e){
            $.ajax({
              type: "post",
              url: "proses.php",
              data: $("#form-btn-save").serialize(),
              success: function(response){
                if (response == 'ok') {
                  alert('Booking Berhasil');
                  window.location.href='?p=booking';
                } else {
                  alert('Booking Gagal');
                  window.location.href='?p=booking';
                }
              }
            })
            e.preventDefault();
          })
        })
</script>
</body>
</html>
