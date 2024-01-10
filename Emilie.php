<?php
$css = 'Emilie.css';

ob_start();
include 'app/view/emilie.view.php';
$content = ob_get_clean();

include 'app/view/common/layoutEmilie.php';
?>