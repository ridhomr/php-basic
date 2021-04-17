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

      print_text("ridho marhaban", 21);
      jarak();
      print_text("tama wijaya", 22);
      jarak();
      print_text("dwi atmaja", 22);
    ?>
  </body>
</html>
