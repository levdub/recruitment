<?php

if(isset($_GET['id']) && $_GET['id'] != ""){
  echo $_GET['id'];
}else{
  echo "Invalid ID specified"; 

}

?>
