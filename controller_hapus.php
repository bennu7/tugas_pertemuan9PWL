<?php
// $id = $_GET['id'];
// require 'env.php';
// $sql = "DELETE FROM  belajar_pwl WHERE id = $id";
// $result = mysqli_query($con, $sql);
// $row = mysqli_affected_rows($con);

// header("Location: index.php");

require 'env.php';

$id = $_GET['id'];
$query = "DELETE FROM tb_biodata WHERE id = '$id'";
mysqli_query($con, $query);
$result = mysqli_affected_rows($con);
var_dump($result);

if ($result > 0) {
    print("success");
} else {
    print("gagal");
}
header("Location: index.php");



// function hapus($id)
// {
//     global $con;

//     $query = "DELETE FROM belajar_pwl WHERE id = '$id'";
//     mysqli_query($con, $query);

//     return mysqli_affected_rows($con);
// }
