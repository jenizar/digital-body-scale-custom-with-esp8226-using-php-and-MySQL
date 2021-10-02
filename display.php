<?php
  //koneksi ke database
  $konek = mysqli_connect("localhost", "root", "", "websensor");

  //baca isi table loadcell
  $sql = mysqli_query($konek, "SELECT * FROM loadcell");
  $data = mysqli_fetch_array($sql);
  $nilai = $data["weight"];

 /* if ($nilai < 1000)
  {  
   echo $nilai." Gr";
  }
  else {
   $nilai = round($nilai/1000, 2); 
   echo $nilai." Kg";
  }*/

  $nilai = round($nilai*0.454, 1);
  echo $nilai. " Kg";
 ?>