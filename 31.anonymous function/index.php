<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>belajar php</title>
  </head>
  <body>
    <h1>function php</h1>
    <?php
      // fungsi

      function print_text( $text, $angka ){
        $text = "hai nama saya : ". $text . " " . $angka;
        echo "=========";
        echo "$text";
        echo "=========";
      }

      function jarak(){
        echo "<br>";
      }

      // print_text("ridho marhaban", 21);
      // jarak();
      // print_text("tama wijaya", 22);
      // jarak();
      // print_text("dwi atmaja", 22);
      // jarak();

      // ---------tentang return--------

      // function menghitung($x, $y){
      //   $z = $x + $y;
      //   return $z;
      // }
      //
      // $hasil = menghitung(2, 4) * 10;
      // echo  "hasil dari penjumlahan" . $hasil;

      //------------- Scope ----------

      $a = 2;
      $b = 3;

      function menghitung(){
        global $a, $b; // cara pertama untuk mengambil variabel (scope)
        //$c = $GLOBALS['a'] + $GLOBALS['b']; // cara kedua untuk mengambil variabel (scoper)

        $c = $a + $b; // scope tidak bisa mengambil variabel yang berada di luar function
        return $c;
      }

      // echo menghitung();


      // --------anonymous function (fungsi yang tidak bernama)----------

      $ngetik = function($text){
        echo $text;
      };
      $greeting = $ngetik;

      $ngetik('selamat datang semuanya 123');

    ?>
  </body>
</html>
