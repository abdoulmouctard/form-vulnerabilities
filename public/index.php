<?php

require_once "../app/bootstrap.php";


function return_form()
{

    $users = [];
    $inventories = [];

    ob_start();
    include("../resources/index.html");
    $content = ob_get_clean();
    echo $content;
}

if (isset($_POST) && !empty($_POST)) {
    submit_form($_POST);
}

return_form();

die();
