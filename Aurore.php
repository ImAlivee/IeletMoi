<?php
$css = 'aurore.css';

ob_start();
include 'app/view/aurore.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?>