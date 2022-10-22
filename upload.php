<?php


$filename = $_FILES['filename']['name'];
$tempname = $_FILES['filename']['tmp_name'];

$dirupload = "upload/";

$uploaded = move_uploaded_file($tempname, $dirupload.$filename);

if ($uploaded) {
	echo "Upload was successful!<br/>";
	echo "Link: <a href='".$dirupload.$filename."'>".$filename."</a>";
	echo "<p><img src='".$dirupload.$filename."'></p>";
} else {
	echo "Upload failed!";
}

?>