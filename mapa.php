<?php
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, "https://vetaplicacion.herokuapp.com/post.php");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    curl_close($ch);

    // Seleccionamos los datos para crear los marcadores en el Mapa de Google serian direccion, lat y lng 
    $array = json_decode($res);
    print_r ($array);
    foreach ($array as $value) {
      echo '["' . $value['vet_direcc'] . '", ' . $value['vet_lat'] . ', ' . $value['vet_long'] . ',"' . $value['vet _nombre'] . '"],';
     }
?>