<?php
use PHPUnit\Framework\TestCase;

class BaseDatos extends SQLite3
{

    function __construct()
    {
        $this->open("app/dat/Destinos_BD.db");
    }

    static function Consultar(){
        $bd = new BaseDatos();
        if (! $bd) {
             echo "la base de datos no se pudo abrir correctamente";
        }

        $consulta = "SELECT d_nombre, d_descripcion, d_link FROM Destinos WHERE d_compania= :cia AND d_tipo= :tipo AND d_precio= :precio AND d_afluencia= :afluencia AND d_tipo_turismo= :tipotur";
        $valores = $bd->prepare($consulta);
        $valores->bindValue(':cia', $_SESSION['cia']);
        $valores->bindValue(':tipo', $_SESSION['tipo']);
        $valores->bindValue(':precio', $_SESSION['precio']);
        $valores->bindValue(':afluencia', $_SESSION['afluencia']);
        $valores->bindValue(':tipotur', $_SESSION['tipotur']);
        $respuesta = $valores->execute();
        // echo "Versión de SQLite : ". sqlite_libversion();
        // echo "Versión de PHP : ". phpversion();
        if (! $respuesta)
            die("No se puede ejecutar la consulta.");
        $tDestinos = [];

        while ($fila = $respuesta->fetchArray()) {
            $datosdestino = [
                $fila['d_descripcion'],
                $fila['d_link']
            ];
            $tDestinos[$fila['d_nombre']] = $datosdestino;
        }
        return $tDestinos;

        $bd->close();
    }
}
?>