<?php
header('Content-disposition: attachment; filename=images/11052011.jpg');
header('Content-type: image/jpeg');
readfile('images/11052011.jpg');
?>