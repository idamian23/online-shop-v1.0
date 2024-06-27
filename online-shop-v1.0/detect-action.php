<?php

$detected_action = 'landing_page';

if(isset($_GET['action'])){
    $detected_action = $_GET['action'];
}

//echo '<pre>';
//print_r($_GET);
//echo '</pre>';
//
//echo '<pre>';
//print_r($_SERVER);
//echo '</pre>';
