<?php
    include "../koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT sum(kelembaban) FROM sensor ORDER BY id");
    $tampil = mysqli_query($koneksi, "SELECT * FROM sensor");
    $jml_data = mysqli_num_rows($tampil);
    while($data= mysqli_fetch_array($sql)){
    //    $jml_data = $jumlah_barang;
        $jumlah_nilai = array_sum($data);
        // echo $jml_data.';;;;';
        // echo $jumlah_nilai.';;;;;';
        $rata_hari = ($jumlah_nilai/$jml_data);
        $hasil= number_format($rata_hari);
        // menampilkan nilai terakhir
    };
   
?>
<?php
$bagi = 100/100; 
$query = mysqli_query($koneksi, "SELECT * FROM sensor ORDER BY id DESC LIMIT 1");
while ($data1= mysqli_fetch_row($query)){
    
  $percent = (($data1[1]+19)/5)*$bagi;
};
$y = mysqli_query($koneksi, "SELECT * FROM sensor ");
$dx = mysqli_num_rows($y);
while ($result = mysqli_fetch_array($y)){
    $umur[] =$result['kelembaban'];
    // echo max($umur).'.';
    
    // echo min($nilai);
};
  

?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Rata-Rata perhari</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $hasil?></div>
                                            </div>
                                            <div class="col-auto">
                                            <i class="fa fa-calculator fa-2x text-gray-300" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Rata-Rata perminggu</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                            </div>
                                            <div class="col-auto">
                                            <i class="fa fa-calculator fa-2x text-gray-300" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Rata-Rata perbulan</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                            </div>
                                            <div class="col-auto">
                                            <i class="fa fa-calculator fa-2x text-gray-300" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                            <!-- Tasks Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">nilai dalam persentase
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $percent.'%';  ?></div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            <i class="fa fa-percent fa-2x text-gray-300" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                     
                    </div>
                    <div class="row">
                       <div class="col-xl-8">
                            <div id="responsecontainer" > </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                        <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                