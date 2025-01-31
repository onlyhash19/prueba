<h1>
    Ola k ase?
</h1>
<?php
    $nombre = $_GET["nombre"];
    if (!$nombre){
        $nombre = "HASHLEY";
    }

    $texto = "<li>Repaso de PHP</li>";
    if(isset($_GET["altura"])){
        $altura = $_GET["altura"];
    }else{
        $altura = "No existe altura!";
    }

    $variable = "Hola amigo tu altura es:";
    $textofinal = "<h2> ".$variable.$altura."cm.</h2>";

    echo $texto; 
    echo $textofinal;
    echo "<hr>";
    echo $_GET["nombre"];

    if ($altura <= 150) {
        echo '<h3 style="background:red; color:white;">Eres un umpalumpa xd</h3>'; 
    }else{
        echo '<h3 style="background:blue; color:white;">Eres una girafa</h3>'; 
    }  

?>