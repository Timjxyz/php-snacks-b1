<!--
## Snack 5
Prendere un testo abbastanza lungo, contenente diverse frasi. 
Prendere il testo e suddividerlo in tanti paragrafi ogni volta 
in cui si incontrerà un punto. -->

<?php
$testo="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$str=explode(".",$testo);


for($i=0; $i < count($str);$i++){
   echo $str[$i] . '<br>';
}
?>
