<?php
  //creates used.txt
  $file = "amIUsed.txt";
  $fh = fopen($file, 'r');
  $data1 = fread($fh, filesize($file));

  //echo $data1;

  $write = "used.txt";
  $wh = fopen($write, 'w');

  $lines = explode("\n", $data1);
  echo "line count: ".count($lines)."\n";
  $count = 0;
  for($k = 0; $k < count($lines); $k++){
   $carrot = explode('^', $lines[$k]);
   $temp = $carrot[1];
   if($temp > 0){
     $input = $carrot[0]."\n";
     fwrite($wh, $input);
     $count +=1;
    }//end of if

  }    //end of for

  print "Total:".$count;
  fclose($fh);
  fclose($wh);
?>
