<?php
var_dump($content);
foreach($content as $k => $v){
     if(is_int($k)){
?>
<div class='row'>
     <div class='col-sm-1 song-control-icons'>
          <a href='#' id='add-row'><i class='fa fa-plus-circle' aria-hidden='true'></i></a>
          <a href='#' id='remove-row'><i class='fa fa-minus-circle' aria-hidden='true'></i></a>
     </div>
     <div class='col-sm-4 accordion'>
          <h3><?php echo $v['name']; ?></h3>
          <div>
               <?php
               foreach($v['elements'] as $elem){
                    if(is_int($elem)){
                         echo '<p>' . $elem['name']  . '</p>';
                    }
               }
               ?>
          </div>
     </div>
</div>
          <?php
     }
}
?>