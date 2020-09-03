<?php

function getHead($is_index, $pageName)
{
    if ($is_index) {

        require_once("views/head.php");
    } else if ($pageName) {

        require_once("../views/head.php");
    }
}





function getNavbar($is_index)
{
    if ($is_index) {

        require_once("views/navbar.php");
    } else {

        require_once("../views/navbar.php");
    }
}



function getFooter($is_index)
{
    if ($is_index) {

        require_once("views/footer.php");
    } else {

        require_once("../views/footer.php");
    }
}

