<?php
echo 'start--
';
$fp = fopen('./index.php','r') or die('open fail');
$size = filesize('./index.php');
echo 'size::'.$size,'
';

$data = fread($fp, $size);
$data = base64_encode( $data );
echo 'data'.$data.'
=
';
exit(1);
?>
