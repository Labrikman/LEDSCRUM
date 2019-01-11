// Requête de Websocket au serveur
const WebSocket = require('ws'),
//Récupération du port
server = new WebSocket.Server({
  port: 8080,
});

//Vérification Serveur OK
console.log("Server OK !");

//Fonction pour envoyer des messages à tout les utilisateurs
function broadcast(data){
  server.clients.forEach(ws => {
    ws.send(data);
  });
}


//Nérification nouvelle connection
server.on('connection', server =>{
    console.log('nouvelle connection');

    //creer tableau avec user
});

//Gestion de l'envoi synchone des données
server.on('connection', ws => {
  ws.on('message', data => {
    console.log(data);
    broadcast(data);
  });
});
