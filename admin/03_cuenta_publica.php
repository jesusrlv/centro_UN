<?php
session_start();
if(isset($_SESSION['id'])){
  $id = $_SESSION['id'];
  echo'
  <script>
    console.log("Acceso correcto +'.$id.'");
  </script>
  ';
}
else{
  echo'
  <script>
    console.log("Sin variable de sesión");
  </script>
  ';
}
include('prcd/conn.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Inicio</title>
  <link rel="shortcut icon" type="image/png" href="../css/assets/brand/img/ico.ico" sizes="32x32">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
  <link href="../css/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/features/">

  <script src="../css/sidebars.js"></script>

  <link href="../css/sidebars.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="../css/features.css" rel="stylesheet">

</head>

<style>


</style>

<body>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
 
  <symbol id="home" viewBox="0 0 16 16">
  <!-- <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z"/> -->
    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
  </symbol>
  
  <symbol id="avance" viewBox="0 0 16 16">
    <path d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM4.5 13.5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1z"/>  </symbol>
  
  <symbol id="edofin" viewBox="0 0 16 16">
    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
    <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
  </symbol>
  
  <symbol id="cuentapub" viewBox="0 0 16 16">
    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
  </symbol>

  <symbol id="manual" viewBox="0 0 16 16">
    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
  </symbol>
  
  <symbol id="calendar3" viewBox="0 0 16 16">
    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
  </symbol>
 
  <symbol id="exit" viewBox="0 0 16 16">
    <path fill-rule="door-open-fill" d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
  </symbol>
</svg>


<main class="overflow-auto">

<div class="d-flex flex-column flex-shrink-0 bg-light h-100" style="width: 4.5rem;">
    <a href="dashboard.php" class="d-block p-3 bg-primary text-light link-dark text-decoration-none" data-toggle="tooltip" data-bs-placement="right" data-placement="right" title="Inicio">
      <svg class="bi" width="40" height="32"><use xlink:href="#home"/></svg>
      <span class="visually-hidden">Icon-only</span>
    </a>
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
      <li class="nav-item">
        <a href="01_estados_financieros.php" class="nav-link bg-light py-3 border-bottom" data-toggle="tooltip" data-placement="right" data-bs-placement="right" title="Estados financieros">
          <svg class="bi" width="24" height="24" role="img" aria-label="Home"><use xlink:href="#edofin"/></svg>
        </a>
      </li>
      <li class="nav-item">
        <a href="02_avance_gestion.php" class="nav-link bg-light py-3 border-bottom" data-toggle="tooltip" data-placement="right" data-bs-placement="right" title="Avance de gestión">
          <svg class="bi" width="24" height="24" role="img" aria-label="Home"><use xlink:href="#avance"/></svg>
        </a>
      </li>
      <li class="nav-item">
        <a href="03_cuenta_publica.php" class="nav-link bg-warning py-3 border-bottom" data-toggle="tooltip" data-placement="right" data-bs-placement="right" title="Cuenta pública">
          <svg class="bi" width="24" height="24" role="img" aria-label="Home"><use xlink:href="#cuentapub"/></svg>
        </a>
      </li>
      <li class="nav-item">
        <a href="04_manual_contabilidad.php" class="nav-link bg-light py-3 border-bottom" data-toggle="tooltip" data-placement="right" data-bs-placement="right" title="Manual de contabilidad">
          <svg class="bi" width="24" height="24" role="img" aria-label="Home"><use xlink:href="#manual"/></svg>
        </a>
      </li>
      
      <li>
        <a href="sort.php" class="nav-link py-3 active border-bottom" data-toggle="tooltip" data-placement="right" data-bs-placement="right" title="Salir">
          <svg class="bi" width="24" height="24"><use xlink:href="#exit"/></svg>
        </a>
      </li>
      
    </ul>
    
  </div>
  
  <!-- <div class="b-example-divider"></div> -->

<div class="container-fluid" style="height:auto;">
    <div class="p-4 m-5 bg-light rounded-3">
          <h1 class="display-5 fw-bold"><i class="bi bi-folder"></i> Sistema de carga de archivos</h1>
          <h2 class="pb-2 ">INJUVENTUD | Zacatecas, Zac.</h2>
          <h4 class="pb-2 border-bottom text-secondary">Cuenta pública</h4>
            
            
                <form class="row g-3 py-5 mx-5 border-bottom" action="prcd/03_alta.php" method="POST" enctype="multipart/form-data">

                    <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-text"><i class="bi bi-calendar-event-fill"></i></div>
                        <select class="form-select" id="inputGroupSelect01" name="annio" required>
                        <option selected value="">Año...</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                    </select>
                    </div>
                    
                    </div>

                    <div class="col-md-6">
                      <div class="input-group">
                          <div class="input-group-text"><i class="bi bi-chat-left-dots-fill"></i></div>
                          <select class="form-select" id="inputGroupSelect02" name="subcategoria" required>
                          <option selected value="">Categoría...</option>
                          <?php 
                          $sqlCategoria = "SELECT * FROM categoria WHERE topico = 3 ORDER BY id ASC";
                          $resultadoCategoria = $conn->query($sqlCategoria);
                          while($rowCategoria = $resultadoCategoria->fetch_assoc()){
                            echo '<option value="'.$rowCategoria['id'].'">'.$rowCategoria['categoria'].'</option>';
                          }
                          ?>
                          
                      </select>
                      </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile01" name="file1" required>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Guardar</button>
                        <a href="dashboard.php" type="button" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i> Cancelar</a>
                    </div>
                </form>

                <!-- tabla -->
                <div class="table-responsive p-5">
                  <table class="table table-sm table-bordered table-primary table-striped table-hover align-middle text-center">
                    <thead class="table-dark text-light">
                      <tr>
                       <span class="lead"><h5 class="pb-2 border-bottom text-secondary"><i class="bi bi-files"></i> Documentos cargados</h5></span>
                        <th>Año</th>
                        
                      </tr>
                    </thead>
                    <tbody class="text-light">
                      <?php 
                      $sqlAnnio = "SELECT * FROM annio ORDER BY id DESC";
                      $resultado_sqlAnnio = $conn->query($sqlAnnio);
                      while($row_sqAnnio = $resultado_sqlAnnio->fetch_assoc()){
                        $annio = $row_sqAnnio['annio'];
                        $trimestres = 4;

                        echo '<tr>';
                        echo '<td>'.$row_sqAnnio['annio'].'</td>';
                       
                        echo '</tr>';
                       
                        for ($i = 1; $i <= 1; $i++) {                           
                            echo'
                            <tr>';
                            echo'
                            <td >
                              <div class="accordion accordion-flush" id="accordionExample'.$i.$annio.'">
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree'.$i.$annio.'" aria-expanded="false" aria-controls="collapseThree'.$i.$annio.'">
                                      Trimestre '.$i.'
                                    </button>
                                  </h2>
                                  <div id="collapseThree'.$i.$annio.'" class="accordion-collapse collapse" data-bs-parent="#accordionExample'.$i.$annio.'">
                                    <div class="accordion-body">
                                    <div class="row">
                                  <div class="col-4 text-center border bg-primary">
                                      <strong class="text-light">Documento</strong>
                                  </div>
                                  <div class="col-4 text-center border bg-primary">
                                      <strong class="text-light">Link</strong>
                                  </div>
                                  <div class="col-4 text-center border bg-primary">
                                      <strong class="text-light">Acciones</strong>
                                  </div>
                                  </div>';
                                  $sql = "SELECT * FROM archivo WHERE annio = $annio AND subcategoria BETWEEN 8 AND 13";
                                  $resultado_sql = $conn->query($sql);
                                  while($row_sql = $resultado_sql->fetch_assoc()){

                             
                                    echo '
                                    <div class="row">
                                          <div class="col-4 text-center text-dark border">
                                          '.$row_sql['subcategoria'].'
                                          </div>
                                          <div class="col-4 text-center text-dark border">
                                          <a href="docs/'.$row_sql['documento'].'" style="text-decoration:none" target="_blank">
                                            <i class="bi bi-filetype-pdf"></i> 
                                            Ver documento
                                          </a>
                                          </div>
                                          <div class="col-4 text-center text-dark border">
                                          <a onclick="editarDoc('.$row_sql['id'].')"><i class="bi bi-pencil-square"></i></a> | <a onclick=borrarDoc('.$row_sql['id'].'"><i class="bi bi-trash-fill"></i></a>
                                          </div>
                                    </div>';
                                }
                                echo'

                                  </div>
                                </div>
                              </div>
                            </div>

                            

                            </td>
                          </tr>
                          ';
                        // }
                      }
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- tabla -->
    </div>
</div>

  </main>

  

</body>

</html>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>