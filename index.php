<?php
   include 'config.php';

   $view = $_GET['view'] ?? 'index';
   
   include $config['base']['path'].'views/main/index.php';
?>