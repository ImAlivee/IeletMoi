<?php
$css = 'joshuoy.css';

ob_start();
include 'app/view/joshuoy.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?>
