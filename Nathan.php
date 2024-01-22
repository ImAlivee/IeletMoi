<?php
$css = 'nathan.css';

ob_start();
include 'app/view/nathan.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';
