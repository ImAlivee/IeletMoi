<?php
$css = 'Alicia.css';

ob_start();
include 'app/view/alicia.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?>
