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
          echo '<link rel="stylesheet" type="text/css" src="' . $c . '" />';
     }
     ?>
</head>
<body>
     <div id='container'>