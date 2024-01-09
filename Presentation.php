<?php
$css = 'presentation.css';

ob_start();
include 'app/view/presentation.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?>
