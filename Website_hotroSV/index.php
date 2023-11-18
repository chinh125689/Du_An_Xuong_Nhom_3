<?php
    include "view/header.php";

    if(isset($_GET['act']) && $_GET['act'] != ""){
        $act = $_GET['act'];
        switch($act){
            case "dmkhoahoc":
                include "view/subject/subject-grid.php";
                break;
            case "introduce":
                include "view/nav_control/introduce.php";
                break;
            case "blog":
                include "view/blog/blog.php";
                break;
            case "contact":
                include "view/nav_control/contact.php";
                break;   
            case "gioithieu":
                include "view/nav_control/introduce.php";
                break;
        }
    }else{
        include "view/about.php";
        include "view/subject.php";
        include "view/home.php";
        include "view/list_gv.php";
        include "view/news.php";
    }

    include "view/footer.php";
?>