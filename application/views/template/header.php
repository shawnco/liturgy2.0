<?php

/**
 * Header for the site
 * @author Shawn Contant <shawnc366@gmail.com>
 */
?>

<!DOCTYPE html>
<html>
<head>
     <title><?php echo $title; ?></title>
     <?php
     foreach($css as $c){
          echo '<link rel="stylesheet" type="text/css" href="' . $c . '?v=' . rand(0,1000000) . '" />';
     }
     ?>
    <link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/js/bootstrap/css/bootstrap.min.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/js/jquery-ui/jquery-ui.min.css' />     
</head>
<body>
     <div id='header'>
          <h1 id='title'><?php echo $title; ?></h1>
     </div>
     <div id='container'>
          <div class='row' id='message'></div>