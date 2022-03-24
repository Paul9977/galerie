<?php

    $tbl_classes = scandir('classes');
    foreach ($tbl_classes as $oneclass) {
        if($oneclass != '.' && $oneclass != '..') include("classes/".$oneclass);
    }


    $obj = new Image("new");

	$obj->Set('nom_image', $_POST['nom']);
    $obj->Set('url_image', $_POST['url']);
    $obj->Set('description_image', $_POST['description']);
	$obj->Set('created_at', date('Y-m-d H:i:s'));



?>