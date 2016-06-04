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
          <h3><?php
               $data = array(
                   'id' => 'name-' . $k,
                   'class' => 'border form-control',
                   'name' => 'name-' . $k,
                   'value' => $v['name']
               );
               echo form_input($data);?>
          </h3>
          <div>
               <?php
               foreach($v['office'] as $officekey => $officeval){
                    if(is_int($officekey)){
                         $data = array(
                             'id' => ''
                         );
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