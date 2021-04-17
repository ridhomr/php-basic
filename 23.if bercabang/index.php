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


      if($uang_coding > $keyboard){
        echo 'dibeli';

      }else if($uang_desainer > $keyboard){
        echo 'dibeli oleh desainer' . "<br>";

        if($uang_desainer >= $keyboard * 2){
          echo 'dibeli dua kali oleh desainer';
        }
      }
      else{
        echo 'nga cukup';
      }
    ?>
  </body>
</html>
