<?php
$css = 'emma.css';

ob_start();
include 'app/view/emma.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?>