<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>belajar php</title>
  </head>
  <body>
    <h1>belajar else if</h1>
    <?php

      $uang_coding = 500;
      $keyboard = 1000;
      $uang_desainer = 500;


      if($uang_coding > $keyboard){
        echo 'dibeli';

      }else if($uang_desainer > $keyboard){
        echo 'dibeli';
      }
      else{
        echo 'nga cukup';
      }
    ?>
  </body>
</html>
