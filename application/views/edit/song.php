<?php echo form_open(); ?>
<div class='row'>
     <div class='col-sm-3'>
          <?php
          $data = array(
              'class' => 'border form-control',
              'id' => 'song_text',
              'rows' => 40,
              'cols' => 40
          );
          echo form_textarea($data);
          ?>
     </div>
     <div class='col-sm-3'>
          <div>
               <?php
               $data = array(
                   'class' => 'border form-control btn btn-primary',
                   'id' => 'upload_image',
               )
          </div>
          <div></div>
     </div>
</div>
<?php echo form_close(); ?>