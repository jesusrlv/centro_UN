<html>
    <header>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
    <body>
        
    
<?php
    session_start();
    include('conn.php');
    date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
    $id = $_SESSION['id'];

    $annio = $_POST['annio'];
    $trimestre = $_POST['trimestre'];
    $subcategoria = $_POST['subcategoria'];
    $categoria = 1;

    $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
    // $annio = substr($fecha_sistema, 0, 4);
    // $mes = substr($fecha_sistema, 5, 2); 

    $fileName = $_FILES["file1"]["name"]; // The file name
    $fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
    $fileType = $_FILES["file1"]["type"]; // The type of file it is
    $fileSize = $_FILES["file1"]["size"]; // File size in bytes
    $fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true

    if (!$fileTmpLoc) { // if file not chosen
        echo "ERROR: Please browse for a file before clicking the upload button.";
        exit();
    }
    $archivo_ext=$_FILES['file1']['name'];
    $extension = pathinfo($archivo_ext, PATHINFO_EXTENSION);

    if(move_uploaded_file($_FILES["file1"]["tmp_name"],"../docs/".$id.'_'.$annio.'_'.$trimestre.'_'.$categoria.'_'.$subcategoria.'.'.$extension)){
        // echo "$fileName carga completa";     
        
        $ruta = $id .'_'. $annio .'_'. $trimestre .'_'. $categoria .'_'.$subcategoria .'.'. $extension;

        $sql = "INSERT INTO archivo(
            fecha,
            annio,
            trimestre,
            categoria,
            subcategoria,
            documento,
            usr_ext) 
            VALUES(
            '$fecha_sistema',
            '$annio',
            '$trimestre',
            '$categoria',
            '$subcategoria',
            '$ruta',
            '$id')";
        $resultado= $conn->query($sql);
        if($resultado){
            echo"
            <script>
            Swal.fire({
                icon: 'success',
                imageUrl: '../../css/assets/brand/img/logo_injuventud_02.png',
                imageHeight: 200,
                imageAlt: 'INJUVENTUD',
                title: 'Carga completa',
                text: 'El archivo ha sido cargado con éxito',
                confirmButtonColor: '#3085d6',
                footer: 'juventud.zacatecas.gob.mx'
            }).then(function(){window.location='../01_estados_financieros.php';});  
            </script> 
            ";
        }
        else{
            echo 'No se registró';
            $error = $conn->error;
            echo $error;
        
        }   
} else {
    echo "move_uploaded_file function failed";
}

?>
</body>
</html>