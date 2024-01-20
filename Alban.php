<?php
$css = 'alban.css';

ob_start();
include 'app/view/alban.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?>
