<?php
$css = 'temoignages.css';
ob_start();
include 'app/view/temoignages.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?>