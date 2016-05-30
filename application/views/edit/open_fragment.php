<?php
echo form_open();
//echo form_hidden($this->security->get_csrf_token_name, $this->security->get_csrf_hash());
echo form_hidden('element', $element);
?>
<div class='row'>
     <div class='col-sm-2'>
          <?php
          echo form_label('Series Name:', 'series_name');
          ?>
     </div>
     <div class='col-sm-2'>
          <?php
          $data = array(
              'id' => 'series_name',
              'name' => 'series_name',
              'class' => 'border form-control'
          );
          echo form_input($data);
          ?>
     </div>
</div>
     