<!DOCTYPE html>
<html lang="es">
<head>
<title>Inicio</title>
<link rel="shortcut icon" type="image/png" href="../img/icono.png" sizes="32x32">
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
  <link href="../css/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="../css/assets/dist/js/bootstrap.bundle.min.js"></script>
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


<main>

<div class="d-flex flex-column flex-shrink-0 bg-light" style="width: 4.5rem;">
    <a href="dashboard.php" class="d-block p-3 bg-primary text-light link-dark text-decoration-none" data-toggle="tooltip" data-bs-placement="right" data-placement="right" title="Inicio">
      <svg class="bi" width="40" height="32"><use xlink:href="#home"/></svg>
      <span class="visually-hidden">Icon-only</span>
    </a>
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
      <li class="nav-item">
        <a href="carga_docs.php" class="nav-link bg-warning py-3 border-bottom" data-toggle="tooltip" data-placement="right" data-bs-placement="right" title="Estados financieros">
          <svg class="bi" width="24" height="24" role="img" aria-label="Home"><use xlink:href="#edofin"/></svg>
        </a>
      </li>
      <li class="nav-item">
        <a href="carga_docs.php" class="nav-link bg-warning py-3 border-bottom" data-toggle="tooltip" data-placement="right" data-bs-placement="right" title="Avance de gestión">
          <svg class="bi" width="24" height="24" role="img" aria-label="Home"><use xlink:href="#avance"/></svg>
        </a>
      </li>
      <li class="nav-item">
        <a href="carga_docs.php" class="nav-link bg-warning py-3 border-bottom" data-toggle="tooltip" data-placement="right" data-bs-placement="right" title="Cuenta pública">
          <svg class="bi" width="24" height="24" role="img" aria-label="Home"><use xlink:href="#cuentapub"/></svg>
        </a>
      </li>
      <li class="nav-item">
        <a href="carga_docs.php" class="nav-link bg-warning py-3 border-bottom" data-toggle="tooltip" data-placement="right" data-bs-placement="right" title="Manual de contabilidad">
          <svg class="bi" width="24" height="24" role="img" aria-label="Home"><use xlink:href="#manual"/></svg>
        </a>
      </li>
      
      <li>
        <a href="#" class="nav-link py-3 active border-bottom" data-toggle="tooltip" data-placement="right" data-bs-placement="right" title="Salir">
          <svg class="bi" width="24" height="24"><use xlink:href="#exit"/></svg>
        </a>
      </li>
      
    </ul>
    
  </div>
  
  <!-- <div class="b-example-divider"></div> -->

<div class="container-fluid">
  <div class="p-4 m-3 bg-light rounded-3">
      <!-- <div class="container-fluid py-5"> -->
        <!-- <h1 class="display-5 fw-bold">Sistema de carga de archivos</h1> -->
        <!-- <p class="col-md-8 fs-4">Centro UNESCO | Zacatecas, Zac.</p> -->
        <!-- <a href="carga_docs.php" class="btn btn-primary btn-lg" type="button"><i class="bi bi-file-plus"></i> Carga de archivos</a> -->
        <!-- <div class="container px-4 py-5" id="featured-3"> -->
          <h2 class="pb-2 border-bottom">Carga de documentos </h2>
            <div class="row g-4 py-5 mx-5 row-cols-1 row-cols-lg-4">
            <div class="feature col">
              <div class="feature-icon bg-primary bg-gradient">
                <svg class="bi" width="1em" height="1em"><use xlink:href="#edofin"/></svg>
              </div>
              <h2>Estados financieros</h2>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              <a href="#" class="icon-link">
                Call to action
                <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
              </a>
            </div>
            <div class="feature col">
              <div class="feature-icon bg-primary bg-gradient">
                <svg class="bi" width="1em" height="1em"><use xlink:href="#avance"/></svg>
              </div>
              <h2>Avance de gestión</h2>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              <a href="#" class="icon-link">
                Call to action
                <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
              </a>
            </div>
            <div class="feature col">
              <div class="feature-icon bg-primary bg-gradient">
                <svg class="bi" width="1em" height="1em"><use xlink:href="#cuentapub"/></svg>
              </div>
              <h2>Cuenta pública</h2>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              <a href="#" class="icon-link">
                Call to action
                <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
              </a>
            </div>
            <div class="feature col">
              <div class="feature-icon bg-primary bg-gradient">
                <svg class="bi" width="1em" height="1em"><use xlink:href="#manual"/></svg>
              </div>
              <h2>Manual de contabilidad</h2>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              <a href="#" class="icon-link">
                Call to action
                <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
              </a>
            </div>
          </div>
            
          </div>


        <!-- </div> -->
      <!-- </div> -->

      

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

<script src="../css/assets/dist/js/bootstrap.bundle.min.js"></script>