<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mon style  -->
    <link rel="stylesheet" href="style.css">
    <title>Detail</title>
</head>
<body>

    <div class="detail_page">
        <div class="back">
            <a href="index.php"> < retour </a>
        </div>

        <?php

            $tbl_classes = scandir('classes');
            foreach ($tbl_classes as $oneclass) {
                if($oneclass != '.' && $oneclass != '..') include("classes/".$oneclass);
            }

            
            $obj = new Image("empty");
	        $result = $obj->trouve($_POST['titre_rechercher']); 
            
            foreach ($result as $ligne) {

        ?>

                <div class="tableau">
                    <div class="image">
                        <img src="<?php echo $ligne['url_image']; ?>" alt="tableau">
                    </div>
                    <div class="titre">
                        <h2><?php echo $ligne['nom_image']; ?></h2>
                    </div>
                </div>

        <?php
            }
        ?>
    </div>
    
</body>
</html>