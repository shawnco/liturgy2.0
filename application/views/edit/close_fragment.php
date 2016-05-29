<div class='row'>
     <div class='col-sm-1'>
          <?php
          $data = array(
              'id' => 'submit',
              'name' => 'submit',
              'class' => 'border form-control btn btn-primary',
              'value' => 'Go'
          );
          echo form_button($data);
          echo form_close();
          ?>
     </div>
</div>