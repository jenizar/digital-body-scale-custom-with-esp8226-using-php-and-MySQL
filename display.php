<?php
  //koneksi ke database
  $konek = mysqli_connect("localhost", "root", "", "websensor");

  //baca isi table loadcell
  $sql = mysqli_query($konek, "SELECT * FROM loadcell");
  $data = mysqli_fetch_array($sql);
  $nilai = $data["weight"];

  $nilai = round($nilai*0.454, 1);   // convert from lbs to kg
  echo $nilai. " Kg";
 ?>
