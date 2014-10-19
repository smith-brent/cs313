<?php
echo "before model";
include "model.php";


$scripture_list =  getScriptures();
$scripture_output = "";
foreach($scripture_list as $scripture) {
      $scripture_output .= '<p><strong>' . $scripture['book'] . " " . $scripture['chapter'] . ":" . $scripture['verse'] . '</strong></p>';
} echo "for each";

include "view.php";

exit;