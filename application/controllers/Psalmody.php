<?php

class Psalmody extends MY_Controller {
     public function __construct(){
          parent::__construct();
     }
     
     public function index(){
          echo $this->parsePsalmody('1,5-10');          
     }
     public function parsePsalmody($input){
          $output = '';
          if(strrpos($input, ',')){
               echo $input . ' has commas, splitting<br />';
               $commas = explode(',', $input);
               foreach($commas as $c){
                    $output .= $this->parsePsalmody($c);
               }
          }else if(strrpos($input, '-')){
               echo $input . ' has hypen, parsing<br />';
               $endpts = explode('-', $input);
               // Need to handle :'s
               //$output .= $this->parsePsalmody($endpts[0]) . ',somenumbers,' . $this->parsePsalmody($endpts[1]);
               $outputStart = $this->parsePsalmody($endpts[0]);
               $outputEnd = $this->parsePsalmody($endpts[1]);
               $start = strrpos($outputStart, ':') ? explode(':', $outputStart)[0] : $outputStart;
               $end = strrpos($outputEnd, ':') ? explode(':', $outputEnd)[0] : $outputEnd;
               $output .= $outputStart;
               for($i = $start+1; $i < $end; $i++){
                    $output .= $i . ', ';
               }
               $output .= $end;
          }else if(strrpos($input, '/')){
               echo $input . ' has forward slash, switcing<br />';
               $output .= str_replace('/', '-', $input);
          }else{
               echo $input . ' is as basic as I can go<Br />';
               $output .= $input;
          }
          echo 'at the end of it output is at ' . $output . '<br />';
          return $output . ', ';
     }
}
?>
