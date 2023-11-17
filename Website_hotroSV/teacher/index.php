<?php
    include "sidebar.php";
    if(isset($_GET['act']) && $_GET['act'] != ""){
        $act = $_GET['act'];
        switch($act){
            case "class":
                include "class.php";
                break;
            case "itinerary":
                include "itinerary_gv.php";
                break;
        }
    }
?>