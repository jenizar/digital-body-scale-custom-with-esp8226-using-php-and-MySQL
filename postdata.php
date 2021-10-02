<?php
  //koneksi ke database
  $konek = mysqli_connect("localhost", "root", "", "websensor");

  //baca data yang dikirim oleh nodemcu
  $v_weight = $_GET["weight"];

  if ($v_weight < 1000)
  {
   //update data di database (table loadcell)
  mysqli_query($konek, "UPDATE loadcell SET weight='$v_weight', unit='Gr'");
  }
  else{
  mysqli_query($konek, "UPDATE loadcell SET weight='$v_weight', unit='Kg'");
  }
?>