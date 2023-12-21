<?php
ob_start();
include 'app/view/acccueil.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
?>