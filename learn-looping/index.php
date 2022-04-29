<?php
    //    learn foreach.
   $colors = array("red", "green", "blue", "yellow", "cyan", "warna 1", "warna 2", "warna 3");
   foreach ($colors as $index => $data) {
       echo ++$index . ". This color is: $data <br>";
   }
?>
