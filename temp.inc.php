<?php
$fp = fopen('index.php','r') or die('open fail');
$data = base64_encode( fread($fp, filesize('temp.php')));
echo $data.'
=
';
exit(1);
?>
