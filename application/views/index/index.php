<p>Select a liturgy scheme to begin:</p>
<?php
$i = 0;
echo '<div class="clearfix">';
foreach($everything as $title => $content){
     echo '<div class="module col-sm-4">';
     echo '<h1>' . $title . '</h1>';
     echo '<ul>';
     if(count($content) < 1){
          echo '<li>There are no ' . strtolower($title) . '</li>';
     }else{
          foreach($content as $c){
               echo '<li><a href="edit/' . str_replace(' ', '_', strtolower($title)) . '/' . $c['id'] . '">' . $c['name'] . '</a></li>';
          }
     }
     echo '<li><a href="create/' . str_replace(' ', '_', strtolower($title)) . '">Create new...</a></li>';
     echo '</ul>';
     echo '</div>';
     if($i == 2){
          echo '</div><div class="clearfix">';
          $i = 0;
     }else{
          $i++;
     }
}
echo '</div>';
?>