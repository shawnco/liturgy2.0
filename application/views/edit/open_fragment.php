<?php
echo form_open();
echo form_hidden('element', $element);
?>
<div class='row'>
     <div class='col-sm-4'>
          &nbsp;
     </div>
     <div class='col-sm-2'>         
          <?php
          echo form_label('Series Name:', 'series_name');          
          $data = array(
              'id' => 'series_name',
              'name' => 'series_name',
              'class' => 'border form-control',
              'value' => $content['name']
          );
          echo form_input($data);
          ?>
     </div>
</div>
     