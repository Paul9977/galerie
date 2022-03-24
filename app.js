

var search = document.querySelector(".search"); //champ de recherche
var add_image = document.querySelector(".btn1"); //bouton d'ajout d'img
var del_img = document.querySelector("#suppr"); // Icon de suppression img
var annule_supp = document.querySelector(".btn_annuler"); // bouton annuler
var conf_sup = document.querySelector(".btn_supp"); // bouton de suppression
var admin = document.querySelector(".champ_mdp"); //Champ mot de passe 


function recherche_image() {
  $(".search_image").show();
  $(".add_image").hide();
  $(".supp_image").hide();
}
search.onclick = recherche_image;



function ajout_image() {
  $(".add_image").show();
  $(".search_image").hide();
  $(".supp_image").hide();
}
add_image.onclick = ajout_image;



function supp_img(nom_img, id){
  $(".supp_image").show();
  $(".add_image").hide();
  $(".search_image").hide();
  $("html,body").animate({ scrollTop: 0 }, 600);
  $("#elem-sup").html(nom_img);

  function confirmation_supp() {
    var champ_mdp = admin.value;
    if (champ_mdp == "") {
      admin.style.borderColor = "red";
    } else{
      $.ajax({
        url: "supprimer_image.php",
        type: "post",
        data: { 'mdp': champ_mdp, 'id': id},
        success: function (data) {
          admin.value = "";
          $("#result").html(data);
          affichage_image();
        },
      });
    }
  }

  conf_sup.onclick = confirmation_supp;

}


function close_supp() {
  $(".supp_image").hide();
  admin.style.borderColor = "lightgray";
  $("#result").empty()= "";
}
annule_supp.onclick = close_supp;

function close(){
  $(".add_image").hide();
  $(".search_image").hide();
}




var haut = document.querySelector('.conteneur');
document.addEventListener("click", function (event) {
  var isClickInsideElement = haut.contains(event.target);
  if (!isClickInsideElement) {
    close();
  }
});





var champ_nom = document.querySelector("#champ_nom");
var champ_description = document.querySelector("#champ_description");
var champ_url = document.querySelector("#champ_url");
var envoi = document.querySelector(".btn_envoi");

function envoi_image() {

  var nom = champ_nom.value;
  var description = champ_description.value;
  var url = champ_url.value;

  if(nom == "" || description == "" || url == ""){
    if( nom == ""){
      champ_nom.style.borderColor = "red";
    } else if(description == ""){
      champ_description.style.borderColor = "red";
    } else{
      champ_url.style.borderColor = "red";
    }
  } else{

    $.ajax({
      url: "ajout_image.php",
      type: "post",
      data: { 'nom': nom, 'description': description, 'url': url },
      success: function () {
        champ_nom.value = "";
        champ_description.value = "";
        champ_url.value = "";
        affichage_image();
      },
    });
  }

  
}

envoi.onclick = envoi_image;

function affichage_image() {
  $.ajax({
    url: "affiche_image.php",
    type: "post",
    success: function (data) {
      $("#la_galerie").html(data);
    },
  });
}

affichage_image();
setInterval(affichage_image, 250000);