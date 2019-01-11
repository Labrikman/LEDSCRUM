document.addEventListener('DOMContentLoaded', () =>{

  //Initialisation
  var connection;
  var tab_data = [];
  var tab_user = [];

  //ciblage
  var box = document.getElementById('recv_message');
  var msg = document.getElementById('send-data');
  var pseudo;
  var id;

  //####### Fonction Envoi des data ######

  //Fonction d'envoi des data
  function send(data){
    if (connection.readyState === WebSocket.OPEN){
        connection.send(data);
      } else {
        throw 'Non connecté.';
      }
  }


  //Fonction nouvelle connection
  function connection(){
    //Connection au serveur websocket
    connection = new WebSocket('ws://localhost:8080');
    //Envoi de data à la connection
    connection.onopen = e =>{
      //Identifiant
      let pseudo = document.getElementById('pseudo').innerHTML;
      let id = document.getElementById('id').innerHTML;
      let data = pseudo+" : "+id;
      connection.send(data);
      console.log(data);
    }

    //détection de la déconnection
    connection.onclose = e =>{
      console.log('Déconnection de '+pseudo+' !');
    }
  }

  connection();


  // ######## Envoi des donnée User à l'Admin ########

  //Récup data et incrémentaion chez l'admin
  connection.addEventListener('message', e =>{
    var user = e.data;
    tab_user.push(user);
    tab_user.forEach(user =>{
      console.log(user);
      box.innerHTML = "<p>"+user+"</p>";
    })

  });


  // ###### Séléction des joueurs pas l'Admin ######

  // ###### Attribution des joueurs sélectionnés ######








  // ######## Interaction et data du jeu #########

  //ciblage
  var joueur1 = document.querySelector('.joueur1');
  var joueur2 = document.querySelector('.joueur2');

  //Récupération des données et envoie sur jeu
  connection.addEventListener('message', e =>{

    // Condition juste de l'admin
    let pseudo = document.getElementById('pseudo').innerHTML;

    //alimentaton du tableau en données au click
     let data = e.data;
     tab_data.push(data);

     //Récupération des données pour la Jauge
     //boucle de parcours du tableau
     for (i=0; i<tab_data.length; i++) {
       //J1 = longeur du tableau tab_data
       var j1 = tab_data.length;
       //ICI, réglage vitesse de remplissage
       var play1 = j1/2;

       //Condition de remplissage sur l'admin seulement
       if(pseudo == 'Thomas'){
       //gestion du remplissage de la jauge
       joueur1.style.width = play1+"%";
       }
     }

  });



  //Au click BOUTON envoyer message synchrone
  msg.addEventListener('click', e => {
    //Gestion du click
      send(msg.value);

  });











// //Au ENTER envoyer message synchrone
// msg.addEventListener('keydown', function (e){
//   //initialisation du keyCode
//   let kc = e.which || e.keyCode;
//   //Gestion de Enter
//   if (kc === 13){
//     send(msg.value);
//     // vide le msg
//     msg.value = "";
//     }



});
