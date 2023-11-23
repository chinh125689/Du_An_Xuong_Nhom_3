<?php 
function loadall_gv(){
  $sql = "SELECT * FROM giang_vien";
  $list_gv=pdo_execute($sql);
  return $list_gv;
}
?>