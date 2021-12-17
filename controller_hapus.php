<?php

require 'env.php';

$id = $_GET['id'];
$query = "DELETE FROM tb_biodata WHERE id = '$id'";
mysqli_query($con, $query);
header("Location: index.php");
