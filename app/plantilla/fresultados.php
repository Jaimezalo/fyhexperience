<?php ob_start();?> <!--Guardo la salida en un buffer-->
<?php $auto = $_SERVER['PHP_SELF'];$cont = 0;?>

<!-- Imágenes -->
    <section class="showcase">
        <div class="container-fluid p-0">
        <?php foreach ($resultado as $nombredestino => $datosdestino) : ?>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                mostrarimagenes('<?=$nombredestino?>');
            });
        </script>
        
        <?php if($cont % 2 == 0){ ?>
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img imagenDestino">
            </div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2><?= $nombredestino ?></h2>
            <p class="lead mb-0"><?= $datosdestino[0] ?><br><a href="<?= $datosdestino[1] ?>"><?= $datosdestino[1] ?></a></p>
            <br>
            <a href="https://www.google.es/maps/place/<?= $nombredestino ?>" target="_blank"><input type="button" class="btn btn-info" value="Ver en Maps"></a>
            <hr>
        </div>
        
        </div>
        <?php }else{ ?>
        <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img imagenDestino">

            </div>
            <div class="col-lg-6 my-auto showcase-text">
            <h2><?= $nombredestino ?></h2>
            <p class="lead mb-0"><?= $datosdestino[0] ?><br><a href="<?= $datosdestino[1] ?>"><?= $datosdestino[1] ?></a></p>
            <br>
            <a href="https://www.google.es/maps/place/<?= $nombredestino ?>" target="_blank"><input type="button" class="btn btn-info" value="Ver en Maps"></a>
            <hr>  
        </div>
        
        </div>
        <?php } ?>
        <?php $cont++; endforeach; ?>
        
        </div>
    </section>  
   

<?php
$contenido = ob_get_clean();// Vacio el bufer
include_once "secundaria.php";
?>
