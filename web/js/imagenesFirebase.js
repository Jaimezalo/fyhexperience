
var contador=-1;

function mostrarimagenes(nombre){
  contador+=1;
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

