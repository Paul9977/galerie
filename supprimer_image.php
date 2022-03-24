

<?php

    $tbl_classes = scandir('classes');
    foreach ($tbl_classes as $oneclass) {
        if($oneclass != '.' && $oneclass != '..') include("classes/".$oneclass);
    }

    $obj = new Admin("empty");

    $result_admin = $obj->Select_admin($_POST['mdp']);

    if (count($result_admin ) > 0){
        echo "<p style='color:green;'> Effectué avec success, cliquer sur annuler</p>";
        $obj2 = new Image(intval($_POST['id']));
        $obj2->Set('deleted_at', date('Y-m-d'));

    }else{
        echo "<p style='color:red;'>Vous n'avez pas les droits d'administrateur</p>";
    }


?>