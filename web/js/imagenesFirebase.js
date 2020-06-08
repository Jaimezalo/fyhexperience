
var contador=-1;

function mostrarimagenes(nombre){
  contador++;
  var storage = firebase.storage();
  var storageRef;
  var imagen = document.getElementsByClassName("imagenDestino")[contador];
  imagen.id = nombre;
  storageRef = storage.ref();

  storageRef.child(nombre+".jpg").getDownloadURL().then(function(url) {
    var resultado = '<img src="' + url + '" class="img-fluid"/ >';
    document.getElementById(nombre).innerHTML = resultado;
  }).catch(function(error) {
    var sinImagen = '<img src="imagenes/sinImagen.jpg" class="img-fluid"/ >';
    document.getElementById(nombre).innerHTML = sinImagen;
  });
  
}

function mostrarVideoFondo(){

  var storage = firebase.storage();
  var storageRef;
  var videoFondo = document.getElementById("video_background");
  var source = document.createElement("source");
  
  storageRef = storage.ref();
  storageRef.child("videos/videoFondo.mp4").getDownloadURL().then(function(url) {
    source.src = url;
    source.type = "video/mp4";
    videoFondo.appendChild(source);
  }).catch(function(error) {
    storageRef.child("videos/videoFondo.webm").getDownloadURL().then(function(url) {
      source.src = url;
      source.type = "video/webm";
      videoFondo.appendChild(source);
    })
  });
  
}


