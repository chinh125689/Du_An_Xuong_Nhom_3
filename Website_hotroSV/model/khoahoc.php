<?php 
function loadall_khoahoc(){
  $sql = "SELECT * FROM khoahoc";
  $list_khoahoc = pdo_query($sql);
  return $list_khoahoc;
}

function loadone_khoahoc($id){
$sql = "SELECT * FROM khoahoc WHERE id=$id";
$kh = pdo_query_one($sql);
return $kh;
}
?>