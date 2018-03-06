<?php
//function for view count

function viewCount($val){
  if ($val>=0 && $val < 1000) {
    echo number_format((float)$val, 1, '.', '')." views";
  }
  if ($val>=1000 && $val < 1000000) {
    echo round($val/1000, 1)."K views";
  }
  if ($val>=1000000 && $val < 1000000000) {
    echo number_format((float)$val/1000000, 1, '.', '')."M views";
  }
  if ($val>=1000000000) {
    echo number_format((float)$val/1000000000, 1, '.', '')."B views";
  }
}



?>
