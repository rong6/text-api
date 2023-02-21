<?php
  $file = "hitokoto.txt";
  $lines = file($file);
  $random_line = $lines[array_rand($lines)];
  echo $random_line;
?>
