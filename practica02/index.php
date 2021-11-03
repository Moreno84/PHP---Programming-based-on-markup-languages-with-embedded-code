<?php
//Ejercicio 1
$notaAlumnos = ["Laura" => 9 , "Xavier" => 4, "Nota media" => 6.4];

//Ejercicio 4

if(isset($_POST['submit'])){
 
   $nota = $_POST['nota'];
   $mensaje = '';

    if($nota == 10){
        $mensaje = 'Matricula de honor';
    }elseif($nota >= 9 && $nota <= 9.99){
        $mensaje = 'Excelente';
    }elseif($nota >= 7 && $nota <= 8.99){
        $mensaje = 'Notable';
    }elseif($nota >= 5 && $nota <= 6.99){
        $mensaje = 'Aprobado';
    }elseif($nota >= 0 && $nota <= 4.99){
        $mensaje = 'Suspendido';
    }

    }

    //Ejercicio 5 

    if(isset($_POST['submit5'])){

    $name = $_POST['name'];
    $hours = $_POST['hours'];
    $salaryHours = 16;
    $salaryDoOvertime= 20;
    $mensaje5 ='';
    

    if($hours <= 40 && $hours > 0){
        $salaryNormal = $hours * $salaryHours;

        $mensaje5 = $name." has trabajado ".$hours." horas.". "Tu sueldo es ".$salaryNormal." €"."<br/>";


    }else{
        $salaryExtra= ($hours - 40) * $salaryDoOvertime;
        $salaryNormal = 40 * 16;
        $salary = $salaryNormal + $salaryExtra;

        $mensaje5 = $name." has trabajado ".$hours." horas.". "Tu sueldo es ".$salary." €"."<br/>";
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .mensaje5{color: blue;}
    
    </style>
</head>
<body>
    <h1>Programación basada en lenguajes de marcas con código embebido</h1>
    <p>1.	Escribe un programa en el que se declare un array asociativo para guardar las notas de unos alumnos. Las claves del array serán los nombres de los alumnos y los valores serán las notas de cada uno.</p>

    <ul>
        <?php
                foreach($notaAlumnos as $alumno => $alumnoNotas){
                    echo '<li>'.$alumno. " : ".$alumnoNotas.'</li>';
                    echo "<br/>";
                }

        ?>
    </ul>

    <p>2.Realizar una aplicación que simule una calculadora. Constará de una página HTML con dos campos de texto para introducir los dos operadores, y 4 RadioButtons para seleccionar la operación: suma, resta, multiplicación y división. Se mostrará el resultado de la operación en una segunda página con la frase “El resultado de la suma/resta/multiplicación/división es XXX”.</p>
    <form action="index2.php" method="POST"> 
            <input type="text" name="num1" placeholder="Numero 1:"/><br/><br/>
            <input type="text" name="num2" placeholder="Numero 2:"/><br/><br/>
            <input type="radio" id="suma" name="operacion" value="suma">
            <label for="suma">Suma</label><br/>
            <input type="radio" name="operacion" id="resta" value="resta">
            <label for="resta">Resta</label><br/>
            <input type="radio" name="operacion" id="multiplicacion" value="multiplicacion">
            <label for="multiplicacion">Multiplicacion</label><br/>
            <input type="radio" name="operacion" id="division" value="division">
            <label for="division">Division</label><br/>
            <input type="submit" name="submit2" value="Calcular"/><br/><br/>
    </form>




    <p>3.Realizar una aplicación que tenga una página web con un formulario con dos campos: uno para introducir nuestro nombre y otro para introducir nuestra edad. </p>
    <form action="index2.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre:"/><br/><br/>
    <input type="text" name="edad" placeholder="Edad:"/><br/><br/>
    <input type="submit" name="submit" value="Enviar"/>
    </form>




    <p>4.Escribir un programa que pida la nota de un examen, y muestre la calificación obtenida.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <input type="text" name="nota" placeholder="Introduce tu nota:"/>

    <?php if(!empty($mensaje)): ?>
    <div class="mensaje"><?php echo $mensaje;?></div>
    <?php endif; ?>
    <input type="submit" name="submit" value="Enviar">
    </form>

    <p>5.Escribir un programa que nos pida mediante un formulario el nombre de un empleado y las horas semanales trabajadas.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <input type="text" name="name" placeholder="Nombre:"><br/><br/>
    <input type="text" name="hours" placeholder="Horas trabajadas:"><br/><br/>
    <?php if(!empty($mensaje5)): ?>
    <div class="mensaje5"><?php echo $mensaje5;?></div>
    <?php endif; ?>
    <input type="submit" value="Enviar" name="submit5"/><br/><br/>
    </form>

    
</body>
</html>