<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>belajar php</title>
  </head>
  <body>
    <h1>belajar else if</h1>
    <?php

      // $uang_coding = 1000;
      // $keyboard = 2000;
      // $uang_desainer = 4000;

      // $$ , "artinya atau => ||"


      # || atau salah satu harus memenuhi syarat
      # salah satu memenuhi variabel $uang_desainer lebih besar
      # dari pada $keyboard karena menggunakan atau ||
      // if($uang_coding > $keyboard
      //     || $uang_desainer > $keyboard)
      //     {
      //   echo "bisa dibeli". "<br>";
      // }else{
      //   echo "tidak bisa dibeli" . "<br>";
      // }

      # && kedua if harus memenuhi kedua syarat;
      // tidak memenuhi syarat karena variabel $uang_coding
      // kecil dari pada uang $keyboard
      // if($uang_coding > $keyboard
      //     && $uang_desainer > $keyboard)
      //     {
      //   echo "bisa dibeli";
      // }else{
      //   echo "tidak bisa dibeli";
      // }


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

      // variabel $nama ridhomr ada di dlam case
      $nama = "ridhomr";

      switch ($nama) {
        case 'yaya':
          // code...
          echo 'nama nya adalah yaya';
          break;

        case 'tama':
          // code...
          echo 'nama nya adalah yaya';
          break;
        case 'ridhomr':
          // code...
          echo 'nama nya adalah ridhomr'. "<br>";
          break;
        default:
          // code...
          echo 'tidak ada yang benar';
          break;
      }

      // jika variabel nama tidak ada di case maka
      // diletakkan ke default

      $nama_a = "rudikrispratama";

      switch ($nama_a) {
        case 'riyan':
          // code...
          echo 'nama saya adalah riyan';
          break;

        case 'arjoe':
          // code...
          echo 'nama saya adalah arjoe';
          break;

        case 'dea pratiwi':
          // code...
          echo 'nama saya adalah dea pratiwi';
          break;

        default:
          // code...
          echo 'tidak ada yang sama';
          break;
      }


    ?>
  </body>
</html>
