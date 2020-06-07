
function mostrarimagenes(nombre){
  var storage = firebase.storage();
  var storageRef;
  var imagenes = document.getElementsByClassName("imagenDestino");
  storageRef = storage.ref();
alert(storageRef);
  storageRef.child(nombre+".jpg").getDownloadURL().then(function(url) {
    alert(url);
    var resultado = '<img src="' + url + '"/>';
    for(var i=0; i<imagenes.length; i++){
      document.getElementsByClassName("imagenDestino")[i].innerHTML = resultado;
    }
    
  }).catch(function(error) {
    alert("Error al subir la imagen");
  });
  
}