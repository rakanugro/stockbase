<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?> </title>
    <meta name="description" content="Stockbase">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/vendors/datepicker/css/datepicker.css">

    <link href="<?php echo base_url()?>assets/adminlte/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/adminlte/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet">

</head>

<body>


    <!-- Left Panel -->
   <?php 
   $this->load->view('sidebar'); 
   ?>
   <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                       <!--  <button class="search-trigger"><i class="fa fa-search"></i></button> -->
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                       <!--  <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div> -->

                        <!-- <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php echo base_url();?>assets/adminlte/images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php echo base_url();?>assets/adminlte/images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php echo base_url();?>assets/adminlte/images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php echo base_url();?>assets/adminlte/images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div> -->
                    </div>
                </div>

                <!-- <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url();?>assets/adminlte/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div> -->
            </div>

        </header><!-- /header -->
        <!-- Header-->

        
        <div class="breadcrumbs">
            <?php $this->load->view('breadcrumb') ?>
        </div>

        <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 


        <div class="content mt-3">

            <div class="col-lg-12">
                <?php echo form_open_multipart('StockController/store') ?>
                                             <div class="card">
                                                    <div class="card-header">
                                                        <strong>stock barang</strong>
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kode Barang</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="kode_barang" name="kode_barang" placeholder="" class="form-control" required="yes"> </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Nama Barang</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="nama_barang" name="nama_barang" placeholder="" class="form-control" required="y"></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Ref</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="reference" name="reference" placeholder="" class="form-control"></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Supplier</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="supplier" name="supplier" placeholder="" class="form-control" ><!-- <small class="help-block form-text">Please enter a complex password</small> --></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Tanggal Masuk</label></div>
                                                                <div class="col-12 col-md-9"><input type="date" id="tgl_masuk" name="tgl_masuk" placeholder="" class="form-control" ><!-- <small class="help-block form-text">Please enter a complex password</small> --></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Packaging</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="packaging" name="packaging" placeholder="" class="form-control" required="y"></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Quantity</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="quantity" name="quantity" placeholder="" class="form-control" required="y"></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Lot Number</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="lot_number" name="lot_number" placeholder="" class="form-control" required="y"></div>
                                                            </div>
                                                           <!--  <div class="row form-group">
                                                                <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Disabled Input</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="disabled-input" placeholder="Disabled" disabled="" class="form-control"></div>
                                                            </div> -->
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">location</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="location" name="location" placeholder="" class="form-control" ></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Keterangan</label></div>
                                                                <div class="col-12 col-md-9"><textarea name="keterangan" id="keterangan" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Process</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="process" name="process" placeholder="" class="form-control" value="stock" readonly=""></div>
                                                            </div>
                                                               
                                                              
                                                               
                                                        </form>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                                    </div>
                                                </div>
                                                <?php echo form_close() ?>
                                            </div>

            <div class="col-lg-12">
                 <div class="body">
                            <div class="table-responsive">
                                <table id="tabel_barang" class="table table-bordered text-center table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr bgcolor="#b9b9b9">
                                            <th><font color="#FFFFFF">No</font></th>
                                            <th><font color="#FFFFFF">Kode Barang</font></th>
                                            <th><font color="#FFFFFF">Nama Barang</font></th>
                                            <th><font color="#FFFFFF">ref</font></th>
                                            <th><font color="#FFFFFF">Supplier</font></th>
                                            <th><font color="#FFFFFF">Tgl Masuk</font></th>                   
                                            <th><font color="#FFFFFF">Packaging</font></th>
                                            <th><font color="#FFFFFF">Quantity</font></th>
                                            <th><font color="#FFFFFF">Lot Number</font></th>
                                            <th><font color="#FFFFFF">Location</font></th>
                                            <th><font color="#FFFFFF">Ket</font></th>
                                            <th><font color="#FFFFFF">Process</font></th>
                                            <th><font color="#FFFFFF">Action</font></th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr bgcolor="#b9b9b9">
                                            <th><font color="#FFFFFF">No</font></th>
                                            <th><font color="#FFFFFF">Kode Barang</font></th>
                                            <th><font color="#FFFFFF">Nama Barang</font></th>
                                            <th><font color="#FFFFFF">ref</font></th>
                                            <th><font color="#FFFFFF">Supplier</font></th>
                                            <th><font color="#FFFFFF">Tgl Masuk</font></th>                   
                                            <th><font color="#FFFFFF">Packaging</font></th>
                                            <th><font color="#FFFFFF">Quantity</font></th>
                                            <th><font color="#FFFFFF">Lot Number</font></th>
                                            <th><font color="#FFFFFF">Location</font></th>
                                            <th><font color="#FFFFFF">Ket</font></th>
                                            <th><font color="#FFFFFF">Process</font></th>
                                            <th><font color="#FFFFFF">Action</font></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                        <?php 

                                        $no = 1;
                                        foreach ($data_barang as $hasil) :
                                            
                                        
                                        ?>

                                          <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $hasil['kode_barang'] ?></td>
                                            <td><?php echo $hasil['nama_barang'] ?></td>
                                            <td><?php echo $hasil['reference'] ?></td>
                                            <td><?php echo $hasil['supplier'] ?></td>   
                                            <td><?php echo $hasil['tgl_masuk'] ?></td>
                                            <td><?php echo $hasil['packaging'] ?></td>
                                            <td><?php echo $hasil['quantity'] ?></td>
                                            <td><?php echo $hasil['lot_number'] ?></td>
                                            <td><?php echo $hasil['location'] ?></td>
                                            <td><?php echo $hasil['keterangan'] ?></td>
                                            <td><?php echo $hasil['process'] ?></td>

                                          <td>
                                            <!-- <button type="button" class="badge badge-success" data-toggle='modal' data-target="#editform<?php echo $hasil['no_id']; ?>"  > Edit</button> -->                  
                                            <a href="<?php echo base_url() ?>StockController/delete_barang/<?php echo $hasil['no_id'] ?>" class="badge badge-danger" onclick="return confirm('Yakin akan dihapus')">Delete</a>
                                            </td>
                                        </tr>

                                         <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                 </div>   
             </div>  

             <!-- Modal -->
<?php foreach($data_barang as $hasil) : ?>
<div class="modal fade" id="editform<?php echo $hasil['no_id']; ?>" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">

                <?php echo form_open_multipart('StockController/edit_stock') ?>                

                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Edit</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                  <div class="form-group">
                        <label for="id_client">Kode Barang</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?php echo $hasil['kode_barang'] ?>" placeholder="" readonly="" />
                    </div>
                    <div class="form-group">
                        <label for="alamat">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="" value="<?php echo $hasil['nama_barang'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="alamat">Ref</label>
                        <input type="text" class="form-control" id="reference" name="reference" placeholder="" value="<?php echo $hasil['reference'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="namaclient">Supplier</label>
                        <input type="text" class="form-control" id="supplier" name="supplier" placeholder="" value="<?php echo $hasil['supplier'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="npwp">Tgl masuk</label>
                        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" placeholder="" value="<?php echo $hasil['tgl_masuk'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="npwp">Packaging</label>
                        <input type="text" class="form-control" id="packaging" name="packaging" placeholder="" value="<?php echo $hasil['packaging']?>" />
                    </div>
                    <div class="form-group">
                        <label for="npwp">Quantity</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="" value="<?php echo $hasil['quantity'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="npwp">Lot Number</label>
                        <input type="text" class="form-control" id="lot_number" name="lot_number" placeholder="" value="<?php echo $hasil['lot_number'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="npwp">Location</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="" value="<?php echo $hasil['location'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="npwp">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="edit ket" value="<?php echo $hasil['keterangan'] ?>" />
                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger submitBtn" onclick="kirimContactForm()">Save</button>
            </div>
            <?php echo form_close(); ?>
        </div>

    </div>

</div>
<?php endforeach; ?>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="<?php echo base_url();?>assets/adminlte/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/assets/js/main.js"></script>


    <script src="<?php echo base_url();?>assets/adminlte/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/assets/js/dashboard.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/assets/js/widgets.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/vendors/datepicker/js/bootstrap-datepicker.js"></script>

    <script src="<?php echo base_url();?>assets/adminlte/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url();?>assets/adminlte/assets/js/init-scripts/data-table/datatables-init.js"></script>

</body>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
    
     $('#notifications').slideDown('slow').delay(2000).slideUp('slow');

    /* $("#tgl_masuk").datepicker({
    format: 'yyyy/mm/dd'
    }); */
     
});
         


       
    </script>
 <script type="text/javascript">

  function edit_call()
  {
    jQuery(document).ready(function ($) {
    $('#editform').modal('show');

    /*$('#tgl_masuk').datepicker({
    format: 'yyyy/mm/dd'
    }); */
});

    

  }




</script>   
<script type="text/javascript">
jQuery(document).ready(function ($) {
    $(function () {

        $('#tabel_barang').DataTable({

            "paging" : true,
            "lengthChange" : true,
            "searching" : true,
            "ordering" : true,
            "info" : true,
            "autoWidth" : true

        });

    });
});
</script>   
</html>
