<?php
    include('../prcd/conn.php');
    $sqlAnnio ="SELECT * FROM annio ORDER BY id DESC";
    $resultado = $conn->query($sqlAnnio);
    echo'
        <option value="" selected>Selecciona año ...</option>
    ';
    while($rowAnnio=$resultado->fetch_assoc()){
        echo'
        <option value="'.$rowAnnio['annio'].'">'.$rowAnnio['annio'].'</option>
    ';
    }
?>