<?php 
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    die();
}
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$sql = mysqli_query($koneksi, "SELECT * FROM kas");
while($data=mysqli_fetch_assoc($sql)) {

    $jml = $data['jumlah'];
    $total_masuk = $total_masuk+$jml;

    $jml_keluar = $data['keluar'];
    $total_keluar = $total_keluar+$jml_keluar;

    $total = $total_masuk-$total_keluar;
}
?>

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1>Pengelolaan Keuangan</h1>
                <h4>Hallo  <b><?php echo ucwords($_SESSION['username']); ?></b></h4>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-green set-icon">
                    <i class="glyphicon glyphicon-floppy-save"></i>
                </span>
                    <div class="text-box">
                        <p class="main-text">
                            <?php echo "Rp. " . number_format($total_masuk); ?>,-</p>
                        <p class="text-muted">Total Uang Masuk</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-red set-icon">
                    <i class="glyphicon glyphicon-floppy-open"></i>
                </span>
                    <div class="text-box">
                        <p class="main-text">
                            <?php echo "Rp. " . number_format($total_keluar); ?>,-</p>
                        <p class="text-muted">Total Uang Keluar</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-blue set-icon">
                    <i class="glyphicon glyphicon-floppy-disk"></i>
                </span>
                    <div class="text-box">
                        <p class="main-text">
                            <?php echo "Rp. " . number_format($total); ?>,-</p>
                        <p class="text-muted">Saldo Akhir</p>
                    </div>
                </div>
            </div>