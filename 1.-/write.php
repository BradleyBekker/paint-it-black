<?php

     $debug = true;
     $control = ""; // Mandatory for PHP 5.4
     $filePath = "drawing.json"; // Path filename json control file.

     if (!empty($_GET['put'])){
                $control= $_GET['put'];
          }

     if($debug){echo "php response 1 => " .  $control . "<hr>";}

     if($debug){echo "php response 2 => " . json_encode( $control) . "<hr>";} // Debug naar ajax.

     $file = fopen($filePath, "w") or die("Can't open file");
     fwrite($file, $control);
     fclose($file);

?>
