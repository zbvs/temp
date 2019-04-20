<?php
echo 'start--';
$fp = fopen('./index.php','r') or die('open fail');
$size = filesize('./index.php');
echo 'size::'.$size,'
';

$data = fread($fp, $size);
$data = base64_encode( $data );
echo 'data:'.$data.'
';
fclose($fp);
$fp = fopen('./home.inc.php','r') or die('open fail');
$size = filesize('./home.inc.php');
echo 'size::'.$size,'
';

$data = fread($fp, $size);
$data = base64_encode( $data );
echo 'data:'.$data.'
';
fclose($fp);

$fp = fopen('./cv.inc.php','r') or die('open fail');
$size = filesize('./cv.inc.php');
echo 'size::'.$size,'
';

$data = fread($fp, $size);
$data = base64_encode( $data );
echo 'data:'.$data.'
';
fclose($fp);

$fp = fopen('./contact.inc.php','r') or die('open fail');
$size = filesize('./contact.inc.php');
echo 'size::'.$size,'
';

$data = fread($fp, $size);
$data = base64_encode( $data );
echo 'data:'.$data.'
';
fclose($fp);

exit(1);
?>
