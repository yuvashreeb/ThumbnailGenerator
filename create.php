<?php 
include 'image.inc.php';
header('Content-Type:image/png');
create_thumbnail('fb.png',false,100,100);
?>