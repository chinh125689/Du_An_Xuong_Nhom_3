<?php 
function loadall_khoahoc(){
  $sql = "SELECT * FROM khoahoc";
  $list_khoahoc = pdo_query($sql);
  return $list_khoahoc;
}
?>