<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome  -->
    <link
		  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
		  rel="stylesheet"
	/>
    <!-- Jquery  -->
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
    <!-- Mon style  -->
    <link rel="stylesheet" href="style.css">
    <title>Galerie</title>
</head>
<body>
    <div class="conteneur" id="top">
        <!-- Formulaire de recherche  -->
        <div class="search_image">
            <form action="detail.php" method="POST">
                <input class="champ_txt" name="titre_rechercher" type="text" placeholder="Rechercher une image par son nom" required="">
                <br>
                <input class="btn" type="submit" value="Rechercher">
            </form>
        </div>
        <!-- Formulaire d'ajout  -->
        <div class="add_image">

                <input name="nom" class="champ_txt" id="champ_nom" type="text" placeholder="Nom de l'image">
                <br>
                <input name="description" class="champ_txt" id="champ_description" type="text" placeholder="Petite description">
                <br>
                <input name="url" class="champ_txt" id="champ_url" type="text" placeholder="Url de votre image">
                <br>
                <input class="btn_envoi" type="submit" value="Insérer img">
        
        </div>
        <!-- Confirmation de suppression  -->
        <div class="supp_image">
                <br>
                <p><span>Confirmer vous vouloir supprimer : </span><span id="elem-sup"></span></p>
                <br>
                <input name="mdp" class="champ_mdp" id="champ_mdp" type="text" placeholder="Confirmer en entrant le mot de passe Admin">
                <br>
                <div id="result"></div>
                <input class="btn_supp" type="submit" value="Supprimer img">
                <input class="btn_annuler" type="submit" value="Annuler">
        </div>

        <div class="barre">
            <div class="search">
                <span><i class="fas fa-search"></i> search</span>
            </div>

            <div class="ajout">
                <button class="btn1">Ajouter une image</button>
            </div>
        </div>

    </div>
    <div class="la_galerie" id="la_galerie">

    </div>
    

    <script src="app.js"></script>
</body>
</html>