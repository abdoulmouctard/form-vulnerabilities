<?php

require_once "../app/bootstrap.php";


if (isset($_POST) && !empty($_POST)) {
    submit_form($_POST);
}

return_form();
die();
