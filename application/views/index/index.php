<p>The liturgy2.0 project!</p>

note to self: when entering the psalms into the series table, follow these conventions:

<ul>
    <li>count entries separated by commas as separate (1,2,10)</li>
    <li>count entries separated by hyphens as a list (1-5 would be 1,2,3,4,5)</li>
    <li>count something like 1:1-5 as one would assume</li>
    <li>count things like 1:1-2:5 as one unit, as opposed to splitting it into 1:1-10, 2:1-5</li>
    <li>count entries separated by forward slash as one unit (116/117 would be 116 and 117 together)</li>
    
</ul>

First split by commas. Once you've done that, you can have elements in one of several forms:<br />
* A solitary number like 5<br />
** Should output 5<br />
* A partial address like 5:2/3<br />
** Should output 5:2/3<br />
* A sequence of addresses like 1-5<br />
** Should output 1,2,3,4,5<br />
* A sequence of addresses that begins in one psalm and ends with another like 1:5-5<br />
** Should output 1:5-1:6,2,3,4,5<br />
* A sequence of addresses that begins with one psalm and ends in another like 1-5:5<br />
** Should output 1,2,3,4,5:1-5:5<br />
* A sequence of addresses that begins in one psalm and ends in another like 1:2-5:2<br />
** Should output 1:2-1:6,2,3,4,5:1-5:2<br />
* A sequence of addresses that starts with a composite and ends with a psalm like 1:2/2:1-5<br />
** Should output 1:2-2:1,3,4,5<Br />
* A sequence of addresses that starts with a composite and ends in a psalm like 1/2:1-5:2<br />
** Should output 1-2:1,2,3,4,5:1-5:2<br />
* A sequence of addresses that start with a psalm and ends with a composite like 1-5:2/6:2<br />
** Should output 1,2,3,4,5:1,5:2-6:2<br />
* A sequence of addresses that start in a psalm and ends with a composite like 1:2-5:2/6:2<br />
** Should output 1:2-1:6,2,3,4,5:1,5:2-6:2<br />
* A sequence of addresses that start in a with a composite and ends with a composite like 1:2/2:2-5:2/6:2<br />
** Should output 1:2-2:2,2:3-12,3,4,5:1,5:2-6:2<br />
* A segment that begins with one psalm and ends in another like 5/6:2<br />
** Should output 5-6:2<br />
* A segment that begins in one psalm and ends with another like 5:2/6<br />
** Should output 5:2-6<br />
* A segment that begins in one psalm and ends in another like 5:2/6:2<br />
** Should output 5:2-6:2<br />
* A segment that combines full psalms, like 116/117<br />
** Should output 116-117<Br />
<p>It looks like this can be done algorithmically.</p>
* If there are any commas, split into segments by commas<Br />
** For each segment, recurse<br />
* If there are any hyphens<br />
** For each endpoint, recurse<br />
** If either endpoint has a colon, get the number of verses in that psalm and append it with a hypen<br />
* If there are any forward slashes<br />
** Replace the forward slash with a hyphen and return<br />
* If there are none of these<Br />
** Just return the input string<br />

<?php

$i = 0;
echo '<div class="row">';
foreach($everything as $title => $content){
     echo '<div class="col-sm-4">';
     echo '<h1>' . $title . '</h1>';
     echo '<ul>';
     foreach($content as $c){
          echo '<li>' . $c['name'] . '</li>';
     }
     echo '<li>New...</li>';
     echo '</ul>';
     echo '</div>';
     $i++;
     if($i == 2){
          $i = 0;
          echo '</div><div class="row">';
     }
}
echo '</div>';