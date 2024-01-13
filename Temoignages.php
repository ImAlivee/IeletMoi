<?php
$css = 'temoignage.css';

ob_start();
include 'app\View\temoignages.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?>