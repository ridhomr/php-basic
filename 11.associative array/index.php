<!DOCTYPE html>
<html>
<head>
	<title>belajar php</title>
</head>
<body>
	<h1>associative array php</h1>
	
	<?php

	$data = array( "nama" => "ridho" ,
				   "umur" => 21,
				   "status" => "mahasiswa"
			);

	$data2 = array( "alamat" => "anjungan" ,
				   "kota" => "pontianak"
			);

	/*$data["nama"] = "ridho marhaban";
	echo "nama saya adalah :" . $data['nama'];*/


	// -----------methode assosiatif array----------
	// array_values array_keys array_marge

	// print_r( array_values($data));
	print_r( array_merge($data, $data2));



	?>
</body>
</html>