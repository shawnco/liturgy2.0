<?php
foreach($content as $k => $v){
     if(is_int($k)){
?>
<div class='row'>
     <div class='col-sm-1 song-control-icons'>
          <a href='#' id='add-row'><i class='fa fa-plus-circle' aria-hidden='true'></i></a>
          <a href='#' id='remove-row'><i class='fa fa-minus-circle' aria-hidden='true'></i></a>
     </div>
     <div class='col-sm-6 accordion'>
          <h3><?php
               $data = array(
                   'id' => 'name-' . $k,
                   'class' => 'border form-control office-name',
                   'name' => 'scheme[' . $k . '][name]',
                   'value' => $v['name']
               );
               echo form_input($data);
               ?>
          </h3>
          <div>
               <p>
               <?php
               foreach($v['elements'] as $elemkey => $elemval){
                    if(is_int($elemkey)){
               ?>
               <a href='#' id='add-element'><i class='fa fa-plus-circle' aria-hidden='true'></i></a>
               <a href='#' id='remove-element'><i class='fa fa-minus-circle' aria-hidden='true'></i></a>                     
               <?php
                         $data = array(
                             'id' => 'type',
                             'class' => 'type',
                         );
                         echo form_dropdown('scheme[' . $k . '][types][' . $elemkey . ']', $dropdown, '', $data);
                         $data = array(
                             'id' => 'series',
                             'class' => 'series'
                         );
                         echo form_dropdown('scheme[' . $k . '][series][' . $elemkey . ']', array('' => '--------'), '', $data);
                         $data = array(
                             'id' => 'number',
                             'name' => 'scheme[' . $k . '][number][' . $elemkey . ']',
                             'class' => 'number'
                         );
                         echo form_input($data);
                    }
               }
               ?>
               </p>
          </div>
     </div>
</div>
          <?php
     }
}
?>