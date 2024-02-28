<?php
$img = $_POST['image'];
$folderpath = "uploads/";
$image_parts = explode(";base64, ", $img);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];
$image_base64 = base64_decode($image_parts[1]);
$filename = uniqid() . '.png'; // corrected variable name typo
$file = $folderpath . $filename; // corrected variable name typo
file_put_contents($file, $image_base64);
echo $filename; // corrected the usage of print_r to echo
?>