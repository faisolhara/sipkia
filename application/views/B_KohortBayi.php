<!DOCTYPE html>
<html lang="en">
<head>        
    <!-- META SECTION -->
    <title>SIPKIA</title>            
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="<?php echo site_url("assets")."/";?>favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->        
    <?php include("assets/temaBidanDesa.php");  ?>         
    <!-- EOF CSS INCLUDE -->                                      
</head>
<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <?php include("assets/menuBidanDesa.php") ?>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- TOGGLE NAVIGATION -->
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                </li>
                <!-- END TOGGLE NAVIGATION -->
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right" >
                    <a style="width:100px;"href="#" class="mb-control" data-box="#mb-signout">Logout&nbsp<span class="fa fa-sign-out"></span></a>                        
                </li> 
                <!-- END SIGN OUT -->
                <!-- MESSAGES -->

            </ul>
            <!-- END X-NAVIGATION VERTICAL -->                     

            <!-- PAGE TITLE -->
            <div class="page-title">                    
                <h2><span class="fa fa-arrow-circle-o-left"></span>&nbsp Register Kohort Bayi</h2>
            </div>
            <!-- END PAGE TITLE --> 

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">  
                <div class="row">
                    <div class="col-md-12">

                        <!-- START DATATABLE EXPORT -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="btn-group pull-left">
                                    <button class="btn btn-info dropdown-toggle" data-toggle="modal" data-target="#modal_tambahRegister">
                                        <i class="fa fa-plus"></i> Tambah Register Bayi
                                    </button>
                                </div>
                                <div class="btn-group pull-right">
                                    <button class="btn btn-danger" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                    <ul class="dropdown-menu">
                                        <li class="divider"></li>
                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/csv.png' width="24"/> CSV</a></li>
                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/txt.png' width="24"/> TXT</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/xls.png' width="24"/> XLS</a></li>
                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/word.png' width="24"/> Word</a></li>
                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/png.png' width="24"/> PNG</a></li>
                                        <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo site_url("assets")."/";?>img/icons/pdf.png' width="24"/> PDF</a></li>
                                    </ul>
                                </div>                                    

                            </div>
                            <div class="panel-body">
                                <table id="customers2" class="table datatable dataTable table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id Register</th>
                                            <th>Nama Bayi</th>
                                            <th>Nama Ibu</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Berat Badan Lahir (gram)</th>
                                            <th>Saat Lahir</th>
                                            <th>Kelola</th>
                                            <th>Pelayanan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $row): ?>
                                            <tr style="font-size:10pt;">
                                                <td><?php echo $row->idBayi; ?></td>
                                                <td><?php echo $row->namaBayi; ?></td>       
                                                <td><?php echo $row->namaIbu; ?></td>       
                                                <td><?php echo $row->tanggalLahir; ?></td>       
                                                <td><?php echo $row->jenisKelamin; ?></td>       
                                                <td><?php echo $row->beratBadanLahir; ?></td>       
                                                <td><?php echo $row->saatLahir; ?></td>                
                                                <td width="15%">
                                                    <a data-toggle="tooltip" title="Detail Register" >
                                                        <button data-toggle="modal" data-target="#modal_detailRegister<?php echo $row->idBayi;?>">
                                                            <span class="glyphicon glyphicon-zoom-in"></span>
                                                        </button>                  
                                                    </a>
                                                    <a  data-toggle="tooltip" title="Ubah Register">
                                                        <button data-toggle="modal" data-target="#modal_ubahRegister<?php echo $row->idBayi;?>" >
                                                            <span class="fa fa-edit"></span>
                                                        </button>
                                                    </a>
                                                    <a  class="mb-control" data-box="#mb-hapusRegister"data-toggle="tooltip" title="Hapus Register">
                                                        <button data-toggle="modal" data-target="#modal_detailRegister<?php echo $row->idBayi;?>">
                                                            <span class="glyphicon glyphicon-trash"></span>
                                                        </button>
                                                    </a>
                                                </td>
                                                <td width="30%">
                                                    <a data-toggle="tooltip" title="">
                                                        <button data-toggle="modal" data-target="#modal_tambahPelayanan<?php echo $row->idBayi;?>"class="btn btn-sm btn-info">
                                                            <i class="fa fa-plus"></i>Tambah Pelayanan
                                                        </button>
                                                    </a>&nbsp
                                                    <a data-toggle="tooltip" title="">
                                                        <button data-toggle="modal" data-target="#modal_lihatPelayanan<?php echo $row->idBayi;?>" class="btn btn-sm btn-success">
                                                            <span class="glyphicon glyphicon-zoom-in"></span>Lihat Pelayanan
                                                        </button>
                                                    </a>
                                                </td>       
                                            </tr>
                                        <?php endforeach ?>           
                                    </tbody>
                                </table>                                    
                            </div>
                        </div>
                        <!-- END DATATABLE EXPORT -->                            
                    </div>
                </div>

            </div>         
            <!-- END PAGE CONTENT WRAPPER -->
        </div>            
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->    

    <!-- MESSAGE BOX LOGOUT-->
    <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
        <div class="mb-container">
            <div class="mb-middle">
                <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                <div class="mb-content">
                    <p>Anda yakin mau keluar dari sistem?</p>                    
                    <p>Tekan Tidak jika anda ingin melanjutkan pekerjaan. Tekan Ya untuk keluar dari sistem.</p>
                </div>
                <div class="mb-footer">
                    <div class="pull-right">
                        <a href="<?php echo site_url("C_Login/logout") ?>" class="btn btn-success btn-lg">Ya</a>
                        <button class="btn btn-default btn-lg mb-control-close">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MESSAGE BOX-->

    <!-- MESSAGE BOX HAPUS REGISTER-->
    <div class="message-box message-box-danger animated fadeIn" data-sound="alert" id="mb-hapusRegister">
        <div class="mb-container">
            <div class="mb-middle">
                <div class="mb-title"><span class="fa fa-trash-o"></span> Hapus <strong>Register</strong> ?</div>
                <div class="mb-content">
                    <p>Anda yakin mau menghapus register ini?</p>                    
                    <p>Tekan Tidak jika anda ingin membatalkan. Tekan Ya untuk menghapus data register.</p>
                </div>
                <div class="mb-footer">
                    <div class="pull-right">
                        <a href="<?php echo site_url("C_Bidan/hapusRegister")."/".$this->session->userdata('desa')."/bayi/".$row->idBayi; ?>" class="btn btn-success btn-lg">Ya</a>
                        <button class="btn btn-default btn-lg mb-control-close">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MESSAGE BOX-->

    <!-- MESSAGE BOX HAPUS PELAYANAN-->
    <div class="message-box message-box-danger animated fadeIn" data-sound="alert" id="mb-hapusPelayanan">
        <div class="mb-container">
            <div class="mb-middle">
                <div class="mb-title"><span class="fa fa-trash-o"></span> Hapus <strong>Pelayanan</strong> ?</div>
                <div class="mb-content">
                    <p>Anda yakin mau menghapus data pelayanan ini?</p>  
                    <P><STRONG><h3 style="color:white;">Semua Data Pelayanan Akan Terhapus!</h3></STRONG></P>                  
                    <p>Tekan Tidak jika anda ingin membatalkan. Tekan Ya untuk menghapus data pelayanan.</p>
                </div>
                <div class="mb-footer">
                    <div class="pull-right">
                        <a href="<?php echo site_url("C_Bidan/hapusPelayanan")."/".$this->session->userdata('desa')."/bayi/".$row->idBayi; ?>" class="btn btn-success btn-lg">Ya</a>
                        <button class="btn btn-default btn-lg mb-control-close">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MESSAGE BOX-->

    <!-- Lihat Pelayanan-->
    <?php foreach ($data as $row) {?>
    <div class="modal" id="modal_lihatPelayanan<?php echo $row->idBayi;?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="">
        <div class="modal-dialog modal-lg" style="padding-top:100px;">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Pelayanan Kohort bayi <?php echo $row->namaBayi;?></h4>
              </div>                    
              <div class="modal-body">
                <!-- PAGE CONTENT WRAPPER -->
                <div class="panel panel-default tabs">                            
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Tahun 2016</a></li>
                        <li><a href="#tab-second" role="tab" data-toggle="tab">Tahun 2017</a></li>
                    </ul>
                    <div class="panel-body tab-content">
                        <div class="tab-pane active" id="tab-first">
                            <div class="row">
                                <div class="col-md-12">        
                                    <table id="customers2" class="table table-bordered table-hover table-striped ">
                                        <thead>
                                            <tr>
                                                <th>Januari</th>
                                                <th>Februari</th>
                                                <th>Maret</th>
                                                <th>April</th>
                                                <th>Mei</th>
                                                <th>Juni</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="font-size:10pt;">
                                                <td width="16%"><?php echo $row->bulan1; ?></td>                
                                                <td width="16%"><?php echo $row->bulan2; ?></td>                
                                                <td width="16%"><?php echo $row->bulan3; ?></td>                
                                                <td width="16%"><?php echo $row->bulan4; ?></td>                
                                                <td width="16%"><?php echo $row->bulan5; ?></td>                
                                                <td width="16%"><?php echo $row->bulan6; ?></td>                
                                            </tr>      
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-12">        
                                    <table id="customers2" class="table table-bordered table-hover table-striped ">
                                        <thead>
                                            <tr>
                                                <th>Juli</th>
                                                <th>Agustus</th>
                                                <th>September</th>
                                                <th>Oktober</th>
                                                <th>November</th>
                                                <th>Desember</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="font-size:10pt;">
                                                <td width="16%"><?php echo $row->bulan7; ?></td>                
                                                <td width="16%"><?php echo $row->bulan8; ?></td>                
                                                <td width="16%"><?php echo $row->bulan9; ?></td>                
                                                <td width="16%"><?php echo $row->bulan10; ?></td>                
                                                <td width="16%"><?php echo $row->bulan11; ?></td>                
                                                <td width="16%"><?php echo $row->bulan12; ?></td>
                                            </tr>      
                                        </tbody>
                                    </table>
                                </div>
                            </div>                        
                        </div>
                        <div class="tab-pane" id="tab-second">
                            <div class="row">
                                <div class="col-md-12">        
                                    <table id="customers2" class="table table-bordered table-hover table-striped ">
                                        <thead>
                                            <tr>
                                                <th>Januari</th>
                                                <th>Februari</th>
                                                <th>Maret</th>
                                                <th>April</th>
                                                <th>Mei</th>
                                                <th>Juni</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="font-size:10pt;">
                                                <td width="16%"><?php echo $row->bulan13; ?></td>                
                                                <td width="16%"><?php echo $row->bulan14; ?></td>                
                                                <td width="16%"><?php echo $row->bulan15; ?></td>                
                                                <td width="16%"><?php echo $row->bulan16; ?></td>                
                                                <td width="16%"><?php echo $row->bulan17; ?></td>                
                                                <td width="16%"><?php echo $row->bulan18; ?></td>                
                                            </tr>      
                                        </tbody>
                                    </table>

                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-12">        
                                    <table id="customers2" class="table table-bordered table-hover table-striped ">
                                        <thead>
                                            <tr>
                                                <th>Juli</th>
                                                <th>Agustus</th>
                                                <th>September</th>
                                                <th>Oktober</th>
                                                <th>November</th>
                                                <th>Desember</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="font-size:10pt;">
                                                <td width="16%"><?php echo $row->bulan19; ?></td>                
                                                <td width="16%"><?php echo $row->bulan20; ?></td>                
                                                <td width="16%"><?php echo $row->bulan21; ?></td>                
                                                <td width="16%"><?php echo $row->bulan22; ?></td>                
                                                <td width="16%"><?php echo $row->bulan23; ?></td>                
                                                <td width="16%"><?php echo $row->bulan24; ?></td>
                                            </tr>      
                                        </tbody>
                                    </table>
                                </div>
                            </div>                        
                        </div>                                        
                    </div>
                </div>
            </div>
            <div class="modal-footer ">
                <a  class="mb-control" data-box="#mb-hapusPelayanan"data-toggle="tooltip">
                    <button class="btn btn-danger pull-left" data-toggle="modal" data-target="#modal_hapusPelayanan<?php echo $row->idBayi;?>">
                        <span class="glyphicon glyphicon-trash"></span> Hapus Pelayanan
                    </button>
                </a>
                <button data-toggle="modal" data-target="#modal_ubahPelayanan<?php echo $row->idBayi;?>" class="btn btn-primary pull-right">
                    <span class="fa fa-edit fa-right">&nbsp Edit Pelayanan
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>
<?php }  ?>

<!-- Tambah pelayanan-->
<?php foreach ($data as $row) {?>
<div class="modal" id="modal_tambahPelayanan<?php echo $row->idBayi;?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Tambah Pelayanan bayi <?php echo $row->namaBayi;?></h4>
          </div>                    
          <div class="modal-body">
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12 block" >        
                        <form class="form-horizontal" method="POST" action="<?php echo site_url("C_Bidan/tambahPelayanan")."/".$this->session->userdata('desa')."/bayi/".$row->idBayi; ?>" role="form">
                            <div class="panel panel-default">
                                <div class="panel-body">                                                                                   
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <h3>Pilih pelayanan yang diberikan</h3><br>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="row">Berat Badan (wajib diisi)</div>
                                                    <div class="input-group">
                                                        <input type="number" required name="beratBadan" class="form-control" /> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="checkbox" value="ASI Eksklusif" name="pelayanan3" class="icheckbox" /> 
                                                        ASI Eksklusif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="checkbox" value="Kondisi sehat" name="pelayanan4" class="icheckbox" /> 
                                                        Kondisi Sehat
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="checkbox" value="Vitamin K1" name="pelayanan6" class="icheckbox" /> 
                                                        Vitamin K1
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="checkbox" value="Vitamin A" name="pelayanan7" class="icheckbox" /> 
                                                        Rujuk
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    Pelayanan MTBS
                                                    <div class="row">                                    
                                                        <label class="check"><input value="Dapat Pelayanan MTBS" type="radio" class="iradio" name="mtbs"/> Dapat MTBS</label>
                                                    </div>
                                                    <div class="row">                                    
                                                        <label class="check"><input value="Tidak dapat pelayanan MTBS" type="radio" class="iradio" name="mtbs"/> Tidak dapat MTBS</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    Hasil DDKK
                                                    <div class="row">                                    
                                                        <label class="check"><input value="Hasil DDKK sesuai" type="radio" class="iradio" name="pelayanan2"/> Sesuai</label>
                                                    </div>
                                                    <div class="row">                                    
                                                        <label class="check"><input value="Hasil DDKK meragukan" type="radio" class="iradio" name="pelayanan2"/> Meragukan</label>
                                                    </div>
                                                    <div class="row">                                    
                                                        <label class="check"><input value="Hasil DDKK ditemukan penyimpangan" type="radio" class="iradio" name="pelayanan2"/> Meragukan</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="check">Kunjungan Neonatal</label>
                                                    </div>
                                                    <div class="row">
                                                        <label class="check"><input value="Kunjungan neonatal pertama" type="radio" class="iradio" name="kunjunganNeonatal"/> Kunjungan neonatal pertama</label>
                                                    </div>
                                                    <div class="row">
                                                        <label class="check"><input value="Kunjungan neonatal kedua" type="radio" class="iradio" name="kunjunganNeonatal"/> Kunjungan neonatal kedua</label>
                                                    </div>
                                                    <div class="row">
                                                        <label class="check"><input value="Kunjungan neonatal ketiga" type="radio" class="iradio" name="kunjunganNeonatal"/> Kunjungan neonatal ketiga</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="check">Komplikasi</label>
                                                    </div>
                                                    <div class="row">
                                                        <label class="check"><input value="Komplikasi asfiksia" type="radio" class="iradio" name="komplikasi"/> Asfiksa</label>
                                                    </div>
                                                    <div class="row">
                                                        <label class="check"><input value="Komplikasi trauma lahir" type="radio" class="iradio" name="komplikasi"/> Trauma lahir</label>
                                                    </div>
                                                    <div class="row">
                                                        <label class="check"><input value="Komplikasi infeksi" type="radio" class="iradio" name="komplikasi"/> Infeksi</label>
                                                    </div>
                                                    <div class="row">
                                                        <label class="check"><input value="Komplikasi kelainan kogenital" type="radio" class="iradio" name="komplikasi"/> Kelainan kogenital</label>
                                                    </div>
                                                    <div class="row">
                                                        <label class="check"><input value="Komplikasi hipotermi" type="radio" class="iradio" name="komplikasi"/> Hipotermi</label>
                                                    </div>
                                                    <div class="row">
                                                        <label class="check"><input value="Tidak komplikasi" type="radio" class="iradio" name="komplikasi"/> Tidak Komplikasi</label>
                                                    </div>
                                                    <div class="row">
                                                        <label class="check">Pelayanan Komplikasi Neonatal</label>
                                                    </div>
                                                    <div class="row">
                                                        <label class="check"><input value="Ditangani" type="checkbox" class="icheckbox" name="neonatalKomplikasi"/> Ditangani</label>
                                                    </div>
                                                    <div class="row">
                                                        <label class="check"><input value="Tidak ditangani" type="checkbox" class="icheckbox" name="neonatalKomplikasi"/>Tidak ditangani</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    Imunisasi
                                                    <div class="row">                                    
                                                        <label class="check"><input value="Imunisasi HB" type="checkbox" class="icheckbox" name="imunisasiHB"/> HB</label>
                                                    </div>
                                                    <div class="row">                                    
                                                        <label class="check"><input value="Imunisasi BCG" type="checkbox" class="icheckbox" name="imunisasiBCG"/> BCG</label>
                                                    </div>
                                                    <div class="row">                                    
                                                        <label class="check"><input value="Imunisasi Polio" type="checkbox" class="icheckbox" name="imunisasiPolio"/> Polio</label>
                                                    </div>
                                                    <div class="row">                                    
                                                        <label class="check"><input value="Imunisasi Campak" type="checkbox" class="icheckbox" name="imunisasiCampak"/> Campak</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        Deteksi Cakupan
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="checkbox" value="KN1" name="KN1" class="icheckbox" /> 
                                                        Deteksi Pertama KN 1
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="checkbox" value="KN Lengkap" name="KNLengkap" class="icheckbox" /> 
                                                        Deteksi KN Lengkap
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="checkbox" value="Bayi paripurna" name="bayiParipurna" class="icheckbox" /> 
                                                        Deteksi Paripurna
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="checkbox" value="Vitamin A" name="vitaminA" class="icheckbox" /> 
                                                        Vitamin A > 6 bulan
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tambahan pelayanan</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control" name="tambahan" cols="30"rows="6"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    Tempat Pelayanan
                                                    <div class="row">                                    
                                                        <label class="check"><input value="Puskesmas" type="radio" class="iradio" name="tempat" checked="checked" /> Puskesmas</label>
                                                    </div>
                                                    <div class="row">                                    
                                                        <label class="check"><input value="Polindes" type="radio" class="iradio" name="tempat"/> Polindes</label>
                                                    </div>
                                                    <div class="row">                                    
                                                        <label class="check"><input value="Posyandu" type="radio" class="iradio" name="tempat"/> Posyandu</label>
                                                    </div>
                                                    <div class="row">                                    
                                                        <label class="check"><input value="Kunjugan rumah" type="radio" class="iradio" name="tempat"/> Kunjungan rumah</label>
                                                    </div>
                                                    <div class="row">                                    
                                                        <label class="check"><input value="Bidan praktek swasta" type="radio" class="iradio" name="tempat"/> Bidan Praktek Swasta</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer ">
                                    <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-floppy-o fa-right">&nbsp Simpan</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>                    
            </div>
            <!-- END PAGE CONTENT WRAPPER -->   
        </div>

    </div>
</div>
</div>
<?php }  ?>

<!-- Edit Pelayanan-->
<?php foreach ($data as $row) {?>
<div class="modal" id="modal_ubahPelayanan<?php echo $row->idBayi;?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Edit Pelayanan Register Kohort bayi <?php echo $row->namaBayi;?></h4>
          </div>                    
          <div class="modal-body">
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12 block" >        
                        <form class="form-horizontal" method="POST" action="<?php echo site_url("C_Bidan/ubahPelayanan")."/".$this->session->userdata('desa')."/bayi/".$row->idBayi; ?>" role="form">
                            <div class="panel panel-default">
                                <div class="panel-body">                                                                                   
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h4><label class="col-md-7 control-label">Tahun 2016</label></h4>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Januari</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan1" value="<?php echo $row->bulan1;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Februari</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan2" value="<?php echo $row->bulan2?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Maret</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan3" value="<?php echo $row->bulan3;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">April</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan4" value="<?php echo $row->bulan4;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Mei</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan5" value="<?php echo $row->bulan5;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Juni</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan6" value="<?php echo $row->bulan6;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Juli</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan7" value="<?php echo $row->bulan7;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Agustus</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan8" value="<?php echo $row->bulan8;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">September</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan9" value="<?php echo $row->bulan9;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Oktober</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan10" value="<?php echo $row->bulan10;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">November</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan11" value="<?php echo $row->bulan11;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Desember</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan12" value="<?php echo $row->bulan12;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h4><label class="col-md-9 control-label">Tahun 2017</label></h4>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Januari</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan13" value="<?php echo $row->bulan13;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Februari</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan14" value="<?php echo $row->bulan14?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Maret</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan15" value="<?php echo $row->bulan15;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">April</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan16" value="<?php echo $row->bulan16;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Mei</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan17" value="<?php echo $row->bulan17;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Juni</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan18" value="<?php echo $row->bulan18;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Juli</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan19" value="<?php echo $row->bulan19;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Agustus</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan20" value="<?php echo $row->bulan20;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">September</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan21" value="<?php echo $row->bulan21;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Oktober</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan22" value="<?php echo $row->bulan22;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">November</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan23" value="<?php echo $row->bulan23;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Desember</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <input size="200" name="bulan24" value="<?php echo $row->bulan24;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer ">
                                    <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-floppy-o fa-right">&nbsp Simpan</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>                    
            </div>
            <!-- END PAGE CONTENT WRAPPER -->   
        </div>

    </div>
</div>
</div>
<?php }  ?>

<!-- Tambah Register-->
<div class="modal" id="modal_tambahRegister" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Tambah Data Register Kohort Bayi</h4>
          </div>                    
          <div class="modal-body">
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">        
                        <form class="form-horizontal" method="POST" action="<?php echo site_url("C_Bidan/tambahRegister")."/".$this->session->userdata('desa')."/bayi"; ?>">
                            <div class="panel panel-default">
                                <div class="panel-body">                                                                                   
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-5  control-label">Pilih Ibu *</label>
                                                <div class="col-md-7 ">                                                                                            
                                                    <select class="form-control select" name="idIbu" required>
                                                        <?php foreach ($ibu as $row): ?>
                                                            <option value="<?php echo $row->idRegister;?>"><?php echo " Ibu " .$row->namaIbu;?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Nama Bayi *</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input required name="namaBayi" size="200"  type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Tanggal Lahir *</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input required name="tanggalLahir"  size="200"   type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Jenis Kelamin</label>
                                                <div class="row">
                                                    <div class="col-md-7">                                            
                                                        <label class="check"><input   value="Laki-laki" type="radio" class="iradio" name="jenisKelamin"/> Laki-laki</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5"></div>
                                                <div class="row">
                                                    <div class="col-md-7">                                            
                                                        <label class="check"><input  value="Perempuan" type="radio" class="iradio" name="jenisKelamin"/> Perempuan</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Berat Badan Lahir (gram) *</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input name="beratBadanLahir"  size="200" required   type="number" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Keterangan</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input name="keterangan"  size="200" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Saat lahir</label>
                                                <div class="row">
                                                    <div class="col-md-7">                                            
                                                        <label class="check">Komplikasi</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5"></div>
                                                    <div class="col-md-7">                                            
                                                        <label class="check"><input value="Komplikasi asfiksia" type="radio" class="iradio" name="saatLahir"/> Asfiksa</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5"></div>
                                                <div class="row">
                                                    <div class="col-md-7">                                            
                                                        <label class="check"><input value="Komplikasi trauma lahir" type="radio" class="iradio" name="saatLahir"/> Trauma lahir</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5"></div>
                                                <div class="row">
                                                    <div class="col-md-7">                                            
                                                        <label class="check"><input value="Komplikasi infeksi" type="radio" class="iradio" name="saatLahir"/> Infeksi</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5"></div>
                                                <div class="row">
                                                    <div class="col-md-7">                                            
                                                        <label class="check"><input value="Komplikasi kelainan kogenital" type="radio" class="iradio" name="saatLahir"/> Kelainan kogenital</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5"></div>
                                                <div class="row">
                                                    <div class="col-md-7">                                            
                                                        <label class="check"><input value="Komplikasi hipotermi" type="radio" class="iradio" name="saatLahir"/> Hipotermi</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5"></div>
                                                <div class="row">
                                                    <div class="col-md-7">                                            
                                                        <label class="check"><input value="Tidak komplikasi" type="radio" class="iradio" name="saatLahir"/> Tidak Komplikasi</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5"></div>
                                                <div class="row">
                                                    <div class="col-md-7">                                            
                                                        <label class="check">Pelayanan yang diberikan</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5"></div>
                                                    <div class="col-md-7">                                            
                                                        <label class="check"><input value="IMD" type="checkbox" class="icheckbox" name="pelayananSaatLahir1"/> IMD</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5"></div>
                                                    <div class="col-md-7">                                            
                                                        <label class="check"><input value="Injeksi Vitamin A" type="checkbox" class="icheckbox" name="pelayananSaatLahir2"/> Injeksi Vitamin A</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label"></label>
                                                <label class="col-md-7 control-label">*) Wajib diisi!</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer ">
                                    <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-floppy-o fa-right">&nbsp Simpan</span></button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>                    

            </div>
            <!-- END PAGE CONTENT WRAPPER -->   
        </div>

    </div>
</div>
</div>

<!-- Detail Register-->
<?php foreach ($data as $row) {?>
<div class="modal" id="modal_detailRegister<?php echo $row->idBayi;?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Detail Data Register Kohort bayi <?php echo $row->namaBayi;?></h4>
          </div>                    
          <div class="modal-body">
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">        
                        <form class="form-horizontal">
                            <div class="panel panel-default">
                                <div class="panel-body">                                                                                   
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Nama bayi</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input  size="200"  value="<?php echo $row->namaBayi;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Nama Ibu</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                    <input  size="200" value="<?php echo $row->namaIbu;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Tanggal Lahir</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input  size="200"  value="<?php echo $row->tanggalLahir;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Tanggal Lahir</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input  size="200"  value="<?php echo $row->jenisKelamin;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Berat Badan Lahir (gram)</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input  size="200"  value="<?php echo $row->beratBadanLahir;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Saat Lahir</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input  size="200"  value="<?php echo $row->saatLahir;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Kunjungan Neonatal Pertama</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input  size="200"  value="<?php echo $row->kunjunganNeonatal1;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Kunjungan Neonatal Kedua</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input  size="200"  value="<?php echo $row->kunjunganNeonatal2;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Kunjungan Neonatal Ketiga</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input  size="200"  value="<?php echo $row->kunjunganNeonatal3;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Vitamin A</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input  size="200"  value="<?php echo $row->vitaminA;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Penyebab Kematian</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input  size="200"  value="<?php echo $row->penyebabKematian;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Keterangan</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input  size="200"  value="<?php echo $row->keteranganBayi;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Imunisasi HB</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <textarea cols="40"rows="6" ><?php echo $row->imunisasiHB;?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Imunisasi BCG</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <textarea cols="40"rows="6" ><?php echo $row->imunisasiBCG;?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Imunisasi Polio</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <textarea cols="40"rows="6" ><?php echo $row->imunisasiPolio;?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Imunisasi Campak</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <textarea cols="40"rows="6" ><?php echo $row->imunisasiCampak;?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer ">
                                    <button type="button" class="btn btn-primary pull-right" data-dismiss="modal"> Tutup &nbsp<span class="fa fa-times fa-right"></button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>                    

            </div>
            <!-- END PAGE CONTENT WRAPPER -->   
        </div>

    </div>
</div>
</div>
<?php }  ?>

<!-- Edit Register-->
<?php foreach ($data as $row) {?>
<div class="modal" id="modal_ubahRegister<?php echo $row->idBayi;?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" style="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Ubah Data Register Kohort bayi <?php echo $row->namaBayi;?></h4>
          </div>                    
          <div class="modal-body">
            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">
                <div class="row">
                    <div class="col-md-12">        
                        <form class="form-horizontal" method="POST" action="<?php echo site_url("C_Bidan/ubahRegister")."/".$this->session->userdata('desa')."/bayi/".$row->idBayi; ?>" role="form">
                            <div class="panel panel-default">
                                <div class="panel-body">                                                                                   
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Nama bayi</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input  name="namaBayi" size="200"  value="<?php echo $row->namaBayi;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Nama Ibu</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input name="namaIbu" disabled="disabled"   size="200"  value="<?php echo $row->namaIbu;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Tanggal Lahir</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input name="tanggalLahir"  size="200"  value="<?php echo $row->tanggalLahir;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Jenis Kelamin</label>
                                                <div class="row">
                                                    <div class="col-md-7">                                            
                                                        <label class="check"><input <?php if($row->jenisKelamin=="Laki-laki"){echo 'checked="checked"';} ?>  value="Laki-laki" type="radio" class="iradio" name="jenisKelamin"/> Laki-laki</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5"></div>
                                                <div class="row">
                                                    <div class="col-md-7">                                            
                                                        <label class="check"><input <?php if($row->jenisKelamin=="Perempuan"){echo 'checked="checked"';} ?> value="Perempuan" type="radio" class="iradio" name="jenisKelamin"/> Perempuan</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Berat Badan Lahir (gram)</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input name="beratBadanLahir"  size="200"  value="<?php echo $row->beratBadanLahir;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Saat Lahir</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input name="saatLahir"  size="200"  value="<?php echo $row->saatLahir;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Kunjungan Neonatal Pertama</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input name="kunjunganNeonatal1"  size="200"  value="<?php echo $row->kunjunganNeonatal1;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Kunjungan Neonatal Kedua</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input name="kunjunganNeonatal2"  size="200"  value="<?php echo $row->kunjunganNeonatal2;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Kunjungan Neonatal Ketiga</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input name="kunjunganNeonatal3"  size="200"  value="<?php echo $row->kunjunganNeonatal3;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Vitamin A</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input name="vitaminA"  size="200"  value="<?php echo $row->vitaminA;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Penyebab Kematian</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input name="penyebabKematian"  size="200"  value="<?php echo $row->penyebabKematian;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 control-label">Keterangan</label>
                                                <div class="col-md-7">                                            
                                                    <div class="input-group">
                                                        <input name="keterangan"  size="200"  value="<?php echo $row->keteranganBayi;?>" type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer ">
                                    <button type="submit" class="btn btn-primary pull-right"><span class="fa fa-floppy-o fa-right">&nbsp Simpan</span></button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>                    

            </div>
            <!-- END PAGE CONTENT WRAPPER -->   
        </div>

    </div>
</div>
</div>
<?php }  ?>
<!-- START PRELOADS -->
<audio id="audio-alert" src="<?php echo site_url("assets")."/";?>audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="<?php echo site_url("assets")."/";?>audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->                      

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/bootstrap/bootstrap.min.js"></script>        
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->        
<script type='text/javascript' src='<?php echo site_url("assets")."/";?>js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/tableexport/tableExport.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/tableexport/jquery.base64.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/tableexport/html2canvas.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/tableexport/jspdf/jspdf.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/tableexport/jspdf/libs/base64.js"></script>        
<!-- END THIS PAGE PLUGINS-->  
<!-- THIS PAGE PLUGINS -->
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<!-- END THIS PAGE PLUGINS --> 

<!-- START TEMPLATE -->
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/settings.js"></script>

<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/plugins.js"></script>        
<script type="text/javascript" src="<?php echo site_url("assets")."/";?>js/actions.js"></script>        
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->                 
</body>
</html>






