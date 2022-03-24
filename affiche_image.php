




<?php

    $tbl_classes = scandir('classes');
    foreach ($tbl_classes as $oneclass) {
        if($oneclass != '.' && $oneclass != '..') include("classes/".$oneclass);
    }

    $obj = new Image("empty");
	$result = $obj->SelectAll();

    

	foreach ($result as $ligne) {

        $hasard = rand(1,3);

        if( $hasard != 2){

	?>
            <div class="block_carre" id="lign_<?php echo  $ligne['id_image']; ?>">
                <img src="<?php echo $ligne['url_image'];?>" alt="Erreur de chargement">
                <div class="voile">
                    <div class="suppression">
                        <i id="suppr" class="far fa-trash-alt" onclick="supp_img('<?php echo $ligne['nom_image'];?>', <?php echo $ligne['id_image'];?>)"></i>
                    </div>
                    <div class="titre">
                        <h2> <?php echo $ligne['nom_image'];?> </h2>
                    </div>
                </div>
            </div>
    <?php
        } else{
    ?>
            <div class="block_rectangulaire" id="lign_<?php echo  $ligne['id_image']; ?>">
                <img src="<?php echo $ligne['url_image'];?>" alt="Erreur de chargement">
                <div class="voile">
                    <div class="suppression">
                        <i id="suppr" class="far fa-trash-alt" onclick="supp_img('<?php echo $ligne['nom_image'];?>', <?php echo $ligne['id_image'];?>)"></i>
                    </div>
                    <div class="titre">
                        <h2> <?php echo $ligne['nom_image'];?> </h2>
                    </div>
                </div>
            </div>
    <?php
        }
    }

?>