<div class='col-sm-3'>
     <div class='col-sm-1 song-control-icons'>
          <a href='#' id='add-row'><i class='fa fa-plus-circle' aria-hidden='true'></i></a>
          <a href='#' id='remove-row'><i class='fa fa-minus-circle' aria-hidden='true'></i></a>
     </div>
     <div class='col-sm-3'>
          <?php
          $data = array(
              'class' => 'border form-control',
              'id' => 'weekly_text',
              'name' => 'weekly_text',
              'rows' => 5,
              'cols' => 40
          );
          echo form_textarea($data);
          ?>
     </div>  
     <div class='col-sm-3'>
          <div>
               <?php
               echo form_label('Image: ', 'upload_image');
               $data = array(
                   'class' => 'border',
                   'id' => 'upload_image',
                   'name' => 'upload_image'
               );
               echo form_upload($data);
               ?>
          </div>
          <div>
               <?php
               echo form_label('Music: ', 'upload_music');
               $data = array(
                   'class' => 'border',
                   'id' => 'upload_music',
                   'name' => 'upload_music'
               );
               echo form_upload($data);
               ?>
          </div>
     </div>
</div>