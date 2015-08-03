<?php
include('config.php');
class SiteReferrer{
  public function getMessage(){
    if (in_array($_SERVER['HTTP_REFERER'],$referrer_true)){
      return $message_true;
    } else {
      return $message_false;
    }
  }
}
function CheckReferrer(){
  if (in_array($_SERVER['HTTP_REFERER'],$referrer_true)) {
    return true;
  } else {
    return false;
  }
}
