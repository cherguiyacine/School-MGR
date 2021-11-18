<?php 
$title = 'Espace Parent';

$content = ob_start();



$content= ob_get_clean();
require_once('template.php');
?>