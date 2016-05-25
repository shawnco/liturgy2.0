<p>The offices in <?php echo $offices['name']; ?>:</p>
<ul>
<?php
     foreach($offices as $k => $o){
          if(is_int($k)){
               echo '<li><a href="' . $id . '/' . $o['name'] . '">' . $o['name'] . '</a></li>';
          }
     }
     var_dump($season);
?>
</ul>