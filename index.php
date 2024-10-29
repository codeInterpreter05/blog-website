<?php
    require_once 'assets/php/functions.php';

    if(isset($_GET['signup'])){
        showPage('header', ['page_title' => 'Register']);
        showPage('signup', []);
    }

    showPage('footer', []);
  
?>