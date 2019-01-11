// On attend que le DOM soit complètement chargé
document.addEventListener('DOMContentLoaded', function () {

  // Ciblages
  var formulaire = document.querySelector('form');
  var prenom = document.querySelector('input[name=pseudo]');
  var nom = document.querySelector('input[name=code]');
  var bouton = document.querySelector('input[type=submit]');
  var message = popup.querySelector('p');
  var croix = popup.querySelector('div');

  // Gestion de la validation
  bouton.addEventListener('click', function() {

    // Initialisation
    var mess_err = '';

    // ########## TESTS ##########
    if (nom.value=='') {mess_err+="- Nom obligatoire<br>";}
    if (prenom.value=='') {mess_err+="- Prenom obligatoire<br>";}

  // Conséquences
    if (mess_err != '') {
      // Injection alertes
      message.innerHTML = mess_err;
    } else {
      formulaire.submit();
    }
  });
});
