<?php
$css = 'raphael.css';

ob_start();
include 'app/view/raphael.view.php';
$content = ob_get_clean();
include 'app/view/common/layout.php';
?>
