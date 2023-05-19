<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketmaster que si sirve.php</title>
</head>
<body>
    <h1 align="center">TICKETMASTER QUE SI SIRVE</h1>
    <h2>Favor de proporcionar datos para la compra de boletos</h2>
    <form action="./php-ticketmaster.php" method="post">
        <fieldset>
            <legend>Datos de compra</legend>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>
            <br><br>

            <label for="apellido">Apellidos</label>
            <input type="text" id="apellido" name="apellido" required>
            <br><br>

            <label for="fecha">Fecha del evento</label>
            <input type="date" id="fecha" name="fecha" required>
            <br><br>

            <label for="artista">Seleciona el artista de tu preferencia</label>
            <select name="artista" id="artista" required>
                <option value="Morat">Morat</option>
                <option value="Panic at the Disco">Panic at the Disco</option>
                <option value="Ricky Matin">Ricky Martin</option>
                <option value="Fallout Boys">Fallout Boys</option>
            </select>
            <br><br>

            <label for="zona">Seleciona la zona de tu preferencia</label>
            <select name="zona" id="zona" required>
                <option value="primer plano">primer plano(zona posterior)</option>
                <option value="segundo plano">segundo plano (zona central)</option>
                <option value="tercer plano">tercer plano (zona frontal)</option>
                <option value="balcon">Balcón</option>
             </select>
            <br><br>

            <label for="lugar">Lugar del evento <br> 
                <input type="radio" name="lugar" value="Plaza condesa">Plaza condesa <br>
                <input type="radio" name="lugar" value="Foro Sol"> Foro Sol <br>
                <input type="radio" name="lugar" value="Auditorio Nacional"> Auditorio Nacional <br>
                <input type="radio" name="lugar" value="Palacio de los deportes"> Palacio de los deportes <br> 
            </label>
            <br><br>

            <label for="boletos">Seleciona el número de boletos</label>
            <select name="boletos" id="boletos" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
             </select>
            <br><br>

            <label for="extras" > Indica los servicios extras par el evento</label>
            <br>
            <input type="checkbox" name="estacionamiento" id="estacionamiento">Estacionamiento
            <br>
            <input type="checkbox" name="comida" id="comida">Comida dentro del evento
            <br>
            <input type="checkbox" name="camerino" id="camerino">Pase al evento con pase a camerinos
            <br><br>

            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">

        </fieldset>
    </form>


<?php
$nombre= (isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST["nombre"]: "falta valorn";

$apellido= (isset($_POST['apellido']) && $_POST["apellido"] != "")? $_POST["apellido"]: "falta valor";

$fecha= (isset($_POST['fecha']) && $_POST["fecha"] != "")? $_POST["fecha"]: "falta valor";

$artista= (isset($_POST['artista']) && $_POST["artista"] != "")? $_POST["artista"]: "falta valor";

$zona= (isset($_POST['zona']) && $_POST["zona"] != "")? $_POST["zona"]: "falta valor";

$lugar= (isset($_POST['lugar']) && $_POST["lugar"] != "")? $_POST["lugar"]: "falta valor";

$boletos= (isset($_POST['boletos']) && $_POST["boletos"] != "")? $_POST["boletos"]: "falta valor";

$estacionamiento= (isset($_POST['estacionamiento']) && $_POST["estacionamiento"] != "")? $_POST["estacionamiento"]: false;
$comida= (isset($_POST['comida']) && $_POST["comida"] != "")? $_POST["comida"]: false;

$camerino= (isset($_POST['camerino']) && $_POST["camerino"] != "")? $_POST["camerino"]: false;

if($estacionamiento!= false){
    $estacionamiento="estacionamiento";
}
if($comida != false){
    $comida="comida";
}
if($camerino != false){
    $camerino="entrada al camerino";
}

if($artista== "Morat"){
    $artistai="morat.JFIF";
}
if($artista== "Ricky Matin"){
    $artistai="martin.JFIF";
}
if($artista== "Panic at the Disco"){
    $artistai="panic.JPG";
}
if($artista== "Fallout Boys"){
    $artistai="fallout.WEBP" ;
}
if($lugar== "Plaza condesa"){
    $lugari="condesa.JPG";
}
if($lugar== "Foro Sol"){
    $lugari="sol.JPG";
}
if($lugar== "Auditorio Nacional"){
    $lugari="auditorio.JPEG";
}
if($lugar== "Palacio de los deportes"){
    $lugari="palacio.JPG" ;
}

for ($boletosn=0; $boletosn <= $boletos ; $boletosn++) { 
 echo'
 <h1 align="center">Aquí estan sus boletos, favor de recogerlos lo antes posible</h1>
 <center><table border="5" style ;" cellpading="10px">
                <thead>
                    <tr>
                    Aquí estan sus boletos para '.$artista.'
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td>'.$nombre.'</td>   
                       <td>'.$apellido.'</td>   
                       <td>fecha= '.$fecha.'  </td>   
                    </tr>
                    <tr>
                        <td>'.$zona.'</td>   
                        <td>'.$lugar.'</td>
                        
                        <td>Extras= '.$estacionamiento.' <br>
                        '.$comida.' <br>
                        '.$camerino.'
                        
                         </td>   
                        
                    </tr>
                    <tr>
                        
                    <td> 
                       <img src="'.$artistai.'" alt="artista" width="300" height="200">  </td> 
                       <td><img src="'.$lugari.'" alt="pinguino -tejido" width="300" height="200">  </td>   
                       <td><img src="qr.PNG" alt="ctulu -tejido" width="300" height="200">  </td> 
                         
                    </tr>
        
                </tbody></center> <br><br><br> 
                ';
 }
?>  
</body>
</html>