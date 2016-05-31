<div class='row'>
     <div class='col-sm-3'>
          <?php
          echo form_label('Season:', 'season');
          $data = array(
              'class' => 'border form-control',
              'id' => 'season',
              'name' => 'season'
          );
          echo form_dropdown('season', $options, $content[0]['season'], $data);
          echo form_label('Week:', 'week');
          $data = array(
              'class' => 'border form-control',
              'id' => 'week',
              'name' => 'week',
              'value' => $content[0]['week']
          );
          echo form_input($data);
          ?>
     </div>
</div>
<?php
foreach($content as $k => $v){
     if(is_int($k)){
?>
<div class='row'>
     <div class='col-sm-1 song-control-icons'>
          <a href='#' id='add-row'><i class='fa fa-plus-circle' aria-hidden='true'></i></a>
          <a href='#' id='remove-row'><i class='fa fa-minus-circle' aria-hidden='true'></i></a>
     </div>
     <div class='col-sm-3'>
          <?php
          $data = array(
              'class' => 'border form-control',
              'id' => 'weekly_text',
              'name' => 'weekly_text[]',
              'rows' => 5,
              'cols' => 40,
              'value' => $v['weekly_text']
          );
          echo form_textarea($data);
          ?>
     </div>   
</div>
<?php
     }
}
?>