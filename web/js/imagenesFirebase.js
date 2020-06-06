
var fichero;
var storageRef;

function mostrarimagenes(destino){
  storageRef = storage.ref();
  alert(storageRef);
  storageRef.child(destino).getDownloadURL().then(function(url) {
    return url;
  }).catch(function(error) {
    alert("Error al subir la imagen");
  });
  
}