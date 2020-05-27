<?php ob_start();?> <!--Guardo la salida en un buffer-->

<div class="container-fluid espacio-sup">
    <div class="offset-md-2 col-md-8 card p-0 mb-5">
        <h3 class="card-header text-center subtitle"><i>Descubre el destino más adecuado para tí</i></h3>
        <div class="card-body">
            <p class="card-text description">
            	<i>Cuántas veces has tenido expectativas de un sitio y te has encontrado con todo lo contrario...<br>
            	Descubre que destinos pueden satisfacer mejor tus necesidades ya sea para un alocado viaje con amigos o para
            	pasar un finde de relax en familia. ¡Y muchas otras opciones más!</i>
            </p>
            <br>
            <button type="button" onclick="window.location.href='index.php?orden=Empezar'" class="btn offset-sm-4 col-sm-4 btn-block btn-outline-danger">&#8640; Empezar &#8614;</button>
        </div>
    </div>
    
</div>

<?php
$contenido = ob_get_clean();// Vacio el bufer
include_once "principal.php";
?>
