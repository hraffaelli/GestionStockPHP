<?php
class verif{
static function islogged(){
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){  
    return true;
  }     else  {
  return false;
  }
}
}
?>