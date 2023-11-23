<?php 
function loadall_gv(){
  $sql = "SELECT * FROM giang_vien";
  $list_gv =pdo_query($sql);
  return $list_gv;
}
?>