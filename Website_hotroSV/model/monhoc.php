<?php 
function loadall_monhoc(){
  $sql = "SELECT * FROM mon_hoc";
  $list_monhoc = pdo_query($sql);
  return $list_monhoc;
}
?>