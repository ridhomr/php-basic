<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>belajar php</title>
  </head>
  <body>
    <h1>belajar else if</h1>
    <?php

      $uang_coding = 1000;
      $keyboard = 2000;
      $uang_desainer = 4000;

      // $$ , "artinya atau => ||"


      # || atau salah satu harus memenuhi syarat
      # salah satu memenuhi variabel $uang_desainer lebih besar
      # dari pada $keyboard karena menggunakan atau ||
      if($uang_coding > $keyboard
          || $uang_desainer > $keyboard)
          {
        echo "bisa dibeli". "<br>";
      }else{
        echo "tidak bisa dibeli" . "<br>";
      }

      # && kedua if harus memenuhi kedua syarat;
      // tidak memenuhi syarat karena variabel $uang_coding
      // kecil dari pada uang $keyboard
      if($uang_coding > $keyboard
          && $uang_desainer > $keyboard)
          {
        echo "bisa dibeli";
      }else{
        echo "tidak bisa dibeli";
      }


      // $hasil = true;
      // $hasil2 = false;
      //
      // if($hasil2){
      //   echo 'dibeli';
      //
      // }else if($hasil2){
      //   echo 'dibeli oleh desainer' . "<br>";
      //
      //   if($uang_desainer >= $keyboard * 2){
      //     echo 'dibeli dua kali oleh desainer';
      //   }
      // }
      // else{
      //   echo 'nga cukup';
      // }

    ?>
  </body>
</html>
