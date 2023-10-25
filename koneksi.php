<?php
date_default_timezone_set("Asia/Jakarta");

$conn = mysqli_connect("localhost", "root", "", "psb");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
