<?php
$fp = fopen('./index.php','r') or die('open fail');
$size = filesize('./index.php');
echo $size,'
';
$size = filesize("/web-serveur/ch45/index.php");
echo $size,'
';
$data = fread($fp, $size);
$data = base64_encode( $data );
echo $data.'
=
';
exit(1);
?>
