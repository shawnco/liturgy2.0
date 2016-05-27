<div class='row'>
     <div class='col-sm-1 song-control-icons'>
          <a href='#' id='add-row'><i class='fa fa-plus-circle' aria-hidden='true'></i></a>
          <a href='#' id='remove-row'><i class='fa fa-minus-circle' aria-hidden='true'></i></a>
     </div>
     <div class='col-sm-3'>
          <?php
          echo form_label('URL:', 'url');
          $data = array(
              'class' => 'border form-control',
              'id' => 'url',
              'name' => 'url'
          );
          echo form_input($data);
          ?>
     </div>
</div>