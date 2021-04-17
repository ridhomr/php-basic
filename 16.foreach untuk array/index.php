<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>belajar php</title>
  </head>
  <body>
    <h1>belajar php</h1>
    <?php
      //----pengulangan----
      //for(variabel awal(mulai)); batas(syarat), perubahan)
      // 0 1 2 3 4

      $hewan = ['kucing', 'kelinci', 'cicak', 'domba', 'anjing'];

      for($i = 0; $i < count($hewan); $i++)
      {
        echo "--------------";
        echo $hewan[$i];
        echo "--------------<br>";
      }

      foreach($hewan as $h){
        echo "--------------";
        echo $h;
        echo "--------------<br>";
      }

    ?>
  </body>
</html>
