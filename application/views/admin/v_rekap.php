<!--Counter Inbox-->
<?php 
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $jum_pesan=$query->num_rows();
 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Rekap Berita </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <?php 
    $this->load->view('admin/v_header');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php 
    $this->load->view('admin/siderbar');
  ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rekap Berita
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Rekap Berita</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row"> 
        <div class="col-xs-12">
          <div class="box">
            <!-- <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Rekap Berita</a>
              <a class="btn btn-warning btn-flat" href="#"><span class="fa fa-print"></span> Cetak Laporan</a>
            </div> -->
            <!--Panel Form pencarian -->
            <div class="row">
              <div class="col-xs-12">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <form class="form-inline" >
                      <div class="form-group">
                        <select class="form-control" id="Tanggal" name="Tanggal" placeholder="Tanggal" required="">
                          <option>Tanggal</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="Bulan" name="Bulan" placeholder="Bulan" required="">
                          <option>Bulan</option>
                          <option>Januari</option>
                          <option>Februari</option>
                          <option>Maret</option>
                          <option>April</option>
                          <option>Mei</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="Tahun" name="Tahun" placeholder="Tahun" required="">
                          <option>Tahun</option>
                          <option>2021</option>
                          <option>2022</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="Media" name="Media" placeholder="Media" required="">
                      </div>
                      <button type="submit" class="btn btn-primary">Cari</button>
                      <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <!-- /.box-header -->
            <!-- <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Media</th>  
                <th>File</th> 
                <th style="text-align:center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $no=0;
                    foreach ($data->result_array() as $i) :
                       $no++;
                       $id_rekap=$i['id_rekap'];
                       $judul_rekap=$i['judul_rekap'];
                       $waktu_upload=$i['tanggal'];
                       $tanggal_rekap=$i['tanggal_rekap'];
                       $bulan_rekap=$i['bulan_rekap'];
                       $tahun_rekap=$i['tahun_rekap'];
                       $media_rekap=$i['media_rekap'];
                       $file_rekap=$i['file_rekap'];
                       
                    ?>
                <tr>
                  <td><?php echo $judul_rekap;?></td>
                  <td><?php echo $tanggal_rekap;?></td>
                  <td><?php echo $bulan_rekap;?></td>
                  <td><?php echo $tahun_rekap;?></td>
                  <td><?php echo $media_rekap;?></td>
                  <td><p src="<?php echo base_url().'assets/pdf/'.$file_rekap;?>"><?php echo $file_rekap;?></p></td>
                  <td style="text-align:center;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id_rekap;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id_rekap;?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
            <?php endforeach;?>
                  
                </tbody>
              </table>
            </div> -->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
     
    </div>
    &copy; Copyright <strong>KLIPING DIGITAL</strong>. All Rights Reserved.
  </footer>

  
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!--Modal Add Rekap-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Rekap Berita</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/rekap/simpan_rekap'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Judul Berita</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xjudul_rekap" class="form-control" id="inputUserName" placeholder="Judul Berita" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal Berita</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtanggal_rekap" class="form-control" id="inputUserName" placeholder="Tanggal Berita" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Bulan Berita</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xbulan_rekap" class="form-control" id="inputUserName" placeholder="Bulan Berita" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tahun Berita</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtahun_rekap" class="form-control" id="inputUserName" placeholder="Tahun Berita" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Media Berita</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xmedia_rekap" class="form-control" id="inputUserName" placeholder="Media Berita" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">File Berita</label>
                                        <div class="col-sm-7">
                                            <input type="file" name="filefoto" class="form-control" id="inputUserName" required/>
                                        </div>
                                    </div>
                               

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

  <!--Modal Edit Album-->
  <?php foreach ($data->result_array() as $i) :
              $id_rekap=$i['id_rekap'];
                       $judul_rekap=$i['judul_rekap'];
                       $waktu_upload=$i['tanggal'];
                       $tanggal_rekap=$i['tanggal_rekap'];
                       $bulan_rekap=$i['bulan_rekap'];
                       $tahun_rekap=$i['tahun_rekap'];
                       $media_rekap=$i['media_rekap'];
                       $file_rekap=$i['file_rekap'];
            ?>
  
        <div class="modal fade" id="ModalEdit<?php echo $id_rekap;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Rekap Berita</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/rekap/update_rekap'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">       
                                <input type="hidden" name="kode" value="<?php echo $id_rekap;?>"/> 
                                  <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Judul Berita</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xjudul_rekap" class="form-control" value="<?php echo $judul_rekap;?>" id="inputUserName" placeholder="Judul Berita" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tanggal Berita</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtanggal_rekap" class="form-control" value="<?php echo $tanggal_rekap;?>" id="inputUserName" placeholder="Tanggal Berita" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Bulan Berita</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xbulan_rekap" class="form-control" value="<?php echo $bulan_rekap;?>" id="inputUserName" placeholder="Bulan Berita" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Tahun Berita</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtahun_rekap" class="form-control" value="<?php echo $tahun_rekap;?>" id="inputUserName" placeholder="Tahun Berita" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Media Berita</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xmedia_rekap" class="form-control" value="<?php echo $media_rekap;?>" id="inputUserName" placeholder="Media Berita" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">File Berita</label>
                                        <div class="col-sm-7">
                                            <input type="file" name="filefoto" class="form-control" value="<?php echo $file_rekap;?>" id="inputUserName" required/>
                                        </div>
                                    </div>
                               
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  <?php endforeach;?>
  <!--Modal Edit Album-->

  <?php foreach ($data->result_array() as $i) :
              $id_rekap=$i['id_rekap'];
                       $judul_rekap=$i['judul_rekap'];
                       $waktu_upload=$i['tanggal'];
                       $tanggal_rekap=$i['tanggal_rekap'];
                       $bulan_rekap=$i['bulan_rekap'];
                       $tahun_rekap=$i['tahun_rekap'];
                       $media_rekap=$i['media_rekap'];
                       $file_rekap=$i['file_rekap'];
            ?>
  <!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id_rekap;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Rekap Berita</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/rekap/hapus_rekap'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">       
                    <input type="hidden" name="kode" value="<?php echo $id_rekap;?>"/> 
                     <!-- <input type="hidden" value="<?php echo $album_cover;?>" name="gambar"> -->
                            <p>Apakah Anda yakin mau menghapus Posting <b><?php echo $judul_rekap;?></b> ?</p>
                               
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  <?php endforeach;?>


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>
    
    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Album Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Album berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Album Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>

</body>
</html>
