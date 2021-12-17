<?php

require 'env.php';

function ubah($data)
{

    global $con;

    // agar lebih aman tambahkanhtmlspecialchars()
    $id = $data["id"];
    $nama = $data["txtNama"];
    $alamat = $data["txtAlamat"];

    $sql = "UPDATE tb_biodata SET 
        nama='$nama',
        alamat='$alamat'
        WHERE id = $id
        ";

    mysqli_query($con, $sql);

    return mysqli_affected_rows($con);
}


function query($query)
{
    // mengambil tiap query/value dari array asosiativ
    global $con;
    $result = mysqli_query($con, $query);
    $rows = []; //sebagai wadah kosong
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; //disimpah ke wadah kosong baru
    }

    return $rows; //kembalikan wadahnya
}
