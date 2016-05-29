<div class='row'>
     <div class='col-sm-1 song-control-icons'>
          <a href='#' id='add-row'><i class='fa fa-plus-circle' aria-hidden='true'></i></a>
          <a href='#' id='remove-row'><i class='fa fa-minus-circle' aria-hidden='true'></i></a>
     </div>
     <div class='col-sm-3'>
          <?php
          $data = array(
              'class' => 'border form-control',
              'id' => 'psalm_address',
              'name' => 'psalm_address[]',
          );
          echo form_input($data);
          ?>
     </div>     
     <div class='col-sm-3'>
          <?php
          echo form_label('Image: ', 'upload_image');
          $data = array(
              'class' => 'border',
              'id' => 'upload_image',
              'name' => 'upload_image[]'
          );
          echo form_upload($data);
          ?>
     </div>
     <div class='col-sm-3'>
          <?php
          echo form_label('Music: ', 'upload_music');
          $data = array(
              'class' => 'border',
              'id' => 'upload_music',
              'name' => 'upload_music[]'
          );
          echo form_upload($data);
          ?>
     </div>     
</div>