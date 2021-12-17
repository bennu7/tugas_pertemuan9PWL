<?php
require 'env.php';
include 'controller_ubah.php';

// $id = $_GET["id"];
// $resultBio = query("SELECT * FROM tb_biodata where id=$id")[0];


// dijadikan wadah array asosiativ
// function query($sql)
// {
//     // mengambil tiap query/value dari array asosiativ
//     global $con;
//     $result = mysqli_query($con, $sql);
//     $rows = []; //sebagai wadah kosong
//     while ($row = mysqli_fetch_assoc($result)) {
//         $rows[] = $row; //disimpah ke wadah kosong baru
//     }

//     return $rows; //kembalikan wadahnya
// }


$id = $_GET["id"];
$result = mysqli_query($con, "SELECT * FROM tb_biodata where id=$id");
$resultBio = mysqli_fetch_assoc($result);


if (isset($_POST['submit'])) {
    $nama = $_POST["txtNama"];
    $alamat = $_POST["txtAlamat"];

    $sql = "UPDATE tb_biodata SET 
        nama='$nama',
        alamat='$alamat'
        WHERE id = $id
        ";

    mysqli_query($con, $sql);
    header("Location: index.php");
}

// var_dump($fetch);
// die;

//update

// // TODO: masih belum fix
// $nama = $_POST["txtNama"];
// $alamat = $_POST["txtAlamat"];

// $sql = "UPDATE tb_biodata SET 
//         nama='$nama',
//         alamat='$alamat'
//         WHERE id = $id
//         ";

// mysqli_query($con, $sql);

// $row = mysqli_affected_rows($con);

// if ($row > 0) {
//     header("Location: index.php");
// } else {
//     print("gagal edit data");
// }

?>

<?php include("partial/header.php"); ?>
<div id="main">
    <div class="page-heading">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="card-title">Tambah Data Biodata</h4>
                                </div>
                                <div class="col-6"> <a href="index.php" class="btn btn-success float-end">Kembali</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <form action="" method="post" class="form form-horizontal">
                                <div class="form-body mb-1 p-1">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Nama</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input required type="text" name="txtNama" type="text" class="form-control" placeholder="Nama" id="first-name-icon" value="<?= $resultBio["nama"]; ?>">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input required name="txtAlamat" type="text" class="form-control" placeholder="Alamat " id="first-name-icon" value="<?= $resultBio["alamat"]; ?>">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-building"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">Ubah</button>

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
<?php include("partial/footer.php"); ?>