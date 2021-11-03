<?php
// Ejercicio 3
if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    if(!empty($nombre)){
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        echo 'Hola ' . $nombre;
    }else{
        echo 'Por favor introduzca su nombre.';
    }

    if(!empty($edad >= 18)){
        echo ' tienes '.$edad. ' años';
    }else{
        echo  ' eres menor de edad, no puedes pasar.';
    }

}

//Ejercicio 2

if(isset($_POST['submit2'])){

$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$operacion = $_POST['operacion'];
$resultado = "";

if($operacion == "suma"){
    $resultado= $numero1 + $numero2;
    echo "El resultado de la suma es: ".$resultado."<br/>";
}elseif($operacion == "resta"){
    $resultado = $numero1 - $numero2;
    echo "El resultado de la resta es: ".$resultado."<br/>";
}elseif($operacion == "multiplicacion"){
    $resultado = $numero1 * $numero2;
    echo "El resultado de la multiplicacion es: ".$resultado."<br/>";
}elseif($operacion == "division"){
    $resultado = $numero1 / $numero2;
    echo "El resultado de la division es: ".$resultado."<br/>";
}
}

?>

