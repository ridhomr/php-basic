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

      // for($i = 0; $i < count($hewan); $i++)
      // {
      //   echo "--------------";
      //   echo $hewan[$i];
      //   echo "--------------<br>";
      // }

      // $data = ['nama' => 'ridhomr', 'umur' => 21,
      //          'status' => 'mahasiswa'];
      //
      // foreach($hewan as $key => $value){
      //   echo $value . "<br>";
      // }

      // while(selama/syarat)

      $i = 0;
      $o = 7;

      while($i < count($hewan)){
        echo $hewan[$i]. "<br>";
        $i++;
      }

      do{
        // echo "----";
        echo $hewan[$o]. "<br>";
        $o++;

      }while( $o < count($hewan));

    ?>
  </body>
</html>
