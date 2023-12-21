<?php
$css = 'accueil.css';

ob_start();
include 'app/view/accueil.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?>