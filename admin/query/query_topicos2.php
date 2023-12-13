<?php
    include('../prcd/conn.php');
    $sqlTopicos ="SELECT * FROM topicos ORDER BY id ASC";
    $resultado = $conn->query($sqlTopicos);
    echo'
        <option value="" selected>Selecciona ...</option>
    ';
    while($rowTopicos=$resultado->fetch_assoc()){
        echo'
        <option value="'.$rowTopicos['id'].'">'.$rowTopicos['topico'].'</option>
    ';
    }
?>