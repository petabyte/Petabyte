<?php
   $json = $_POST["json"];
   if (json_decode($json) != null) {
     $file_string = file_get_contents("feedback.json");
     $file_json = json_decode($file_string, true);
     array_push($file_json,json_decode($json, true));
     file_put_contents("feedback.json",json_encode($file_json,true));
   } else {
     echo "error writing file";
   }
?>