<?php
    include('../prcd/conn.php');

    $topico = $_POST['topicoVal'];
    $sqlTopicos ="SELECT * FROM topicos WHERE id = '$topico'";
    $resultado = $conn->query($sqlTopicos);
    $rowTopicos=$resultado->fetch_assoc();
    echo $rowTopicos['img'].' '. $rowTopicos['topico'];
    
?>