<?php 
function loadall_tintuc(){
 $sql = "SELECT * FROM tin_tuc";
 $list_tintuc = pdo_query($sql);
 return $list_tintuc;
}
?>