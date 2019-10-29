<?php
function setSerial(){
  $tokens = 'abcdefghijklmnopqrstuvwxyz0123456789';
  $serial = '';
  for ($i = 0; $i < 4; $i++){
      for($j = 0; $j < 4; $j++){
	        $serial .= $tokens[rand (0, 35)];
	        }
      if($i < 3){
	      $serial .= '-';
	    }
    }
  return $serial;
}

function generate($x){
    for ($y = 0; $y < $x; $y++){
        echo setSerial()."\n";
    }
}
echo generate(4);
?>