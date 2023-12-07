<?php 
include('../prcd/conn.php');

    $annio = $_POST['a'];
    $topico = $_POST['topico'];

    if($topico == 1){
    $sqlAnnio = "SELECT * FROM annio WHERE annio = '$annio' ORDER BY id DESC";
    $resultado_sqlAnnio = $conn->query($sqlAnnio);
    while($row_sqAnnio = $resultado_sqlAnnio->fetch_assoc()){
    $annio = $row_sqAnnio['annio'];
    $trimestres = 4;


    echo '<tr>';
    echo '<td>'.$row_sqAnnio['annio'].'</td>';
    
    echo '</tr>';
    
    for ($i = 1; $i <= 4; $i++) {                           
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
                $sql = "SELECT * FROM archivo WHERE annio = $annio AND trimestre = '$i' AND subcategoria < 7 ORDER BY trimestre  DESC";
                $resultado_sql = $conn->query($sql);
                while($row_sql = $resultado_sql->fetch_assoc()){
                  $categoria = $row_sql['subcategoria'];
    
                  $sqlCat = "SELECT * FROM categoria WHERE id = '$categoria'";
                  $resultadoCat = $conn->query($sqlCat);
                  if($resultadoCat->num_rows == 1){
                    $rowCat = $resultadoCat->fetch_assoc();
                    $catFinal = $rowCat['categoria'];
                  }else{
                    $catFinal = "Documentos no válido";
                  }
            
                echo '
                <div class="row">
                        <div class="col-4 text-center text-dark border">
                        '.$catFinal.'
                        </div>
                        <div class="col-4 text-center text-dark border">
                        <a href="docs/'.$row_sql['documento'].'" style="text-decoration:none" target="_blank">
                        <i class="bi bi-filetype-pdf"></i> 
                        Ver documento
                        </a>
                        </div>
                        <div class="col-4 text-center text-dark border">
                        <a href="#" onclick="editarDoc('.$row_sql['id'].')" data-bs-toggle="modal" data-bs-target="#editarDoc'.$row_sql['id'].'"><i class="bi bi-pencil-square"></i></a> | <a href="" onclick=borrarDoc('.$row_sql['id'].'" data-bs-toggle="modal" data-bs-target="#eliminarDoc'.$row_sql['id'].'"><i class="bi bi-trash-fill"></i></a>
                        </div>
                </div>
                <!-- Modal editar -->
                <div class="modal fade" id="editarDoc'.$row_sql['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar documento</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form>
                              <div class="col-md-12">
                              <div class="input-group mb-3">
                                  <input type="file" class="form-control" id="inputGroupFile01" name="file1" required>
                              </div>
                          </div>
                          
                         
                      </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal eliminar -->
                <div class="modal fade bg-danger" id="eliminarDoc'.$row_sql['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar documento</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form>
                              <div class="col-md-12 text-center">
                              
                                  <h5 class="">¿Desea eliminar el archivo?</h5>
                             
                          </div>
                          
                         
                      </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Eliminar</button>
                      </div>
                    </div>
                  </div>
                </div>
                ';
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
} //tópico 1
else if($topico == 2){
    $sqlAnnio = "SELECT * FROM annio WHERE annio = '$annio' ORDER BY id DESC";
    $resultado_sqlAnnio = $conn->query($sqlAnnio);
    while($row_sqAnnio = $resultado_sqlAnnio->fetch_assoc()){
      $annio = $row_sqAnnio['annio'];
      $trimestres = 4;

      echo '<tr>';
      echo '<td>'.$row_sqAnnio['annio'].'</td>';
     
      echo '</tr>';
     
      for ($i = 1; $i <= 4; $i++) {                           
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
                $sql = "SELECT * FROM archivo WHERE annio = $annio AND trimestre = '$i' AND subcategoria = 7 ORDER BY trimestre DESC";
                $resultado_sql = $conn->query($sql);
                while($row_sql = $resultado_sql->fetch_assoc()){
                  $categoria = $row_sql['subcategoria'];
    
                  $sqlCat = "SELECT * FROM categoria WHERE id = '$categoria'";
                  $resultadoCat = $conn->query($sqlCat);
                  $rowCat = $resultadoCat->fetch_assoc();
                  $catFinal = $rowCat['categoria'];

           
                  echo '
                  <div class="row">
                        <div class="col-4 text-center text-dark border">
                        '.$catFinal.'
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
}//tópico 2
else if ($topico == 3){
    $sqlAnnio = "SELECT * FROM annio WHERE annio = '$annio' ORDER BY id DESC";
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
                                      Cuenta pública
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
                                    $categoria = $row_sql['subcategoria'];
    
                                    $sqlCat = "SELECT * FROM categoria WHERE id = '$categoria'";
                                    $resultadoCat = $conn->query($sqlCat);
                                    $rowCat = $resultadoCat->fetch_assoc();
                                    $catFinal = $rowCat['categoria'];

                             
                                    echo '
                                    <div class="row">
                                          <div class="col-4 text-center text-dark border">
                                          '.$catFinal.'
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
} //tópico 3
else if($topico == 4){
    $sqlAnnio = "SELECT * FROM annio WHERE annio = '$annio' ORDER BY id DESC";
                      $resultado_sqlAnnio = $conn->query($sqlAnnio);
                      while($row_sqAnnio = $resultado_sqlAnnio->fetch_assoc()){
                        $annio = $row_sqAnnio['annio'];
                        $trimestres = 4;

                        echo '<tr>';
                        echo '<td>'.$row_sqAnnio['annio'].'</td>';
                       
                        echo '</tr>';
                       
                        for ($i = 1; $i <= 4; $i++) {                           
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
                                  $sql = "SELECT * FROM archivo WHERE annio = $annio AND trimestre = '$i' AND subcategoria = 14 ORDER BY trimestre DESC";
                                  $resultado_sql = $conn->query($sql);
                                  while($row_sql = $resultado_sql->fetch_assoc()){
                                    $categoria = $row_sql['subcategoria'];
    
                                    $sqlCat = "SELECT * FROM categoria WHERE id = '$categoria'";
                                    $resultadoCat = $conn->query($sqlCat);
                                    $rowCat = $resultadoCat->fetch_assoc();
                                    $catFinal = $rowCat['categoria'];
                             
                                    echo '
                                    <div class="row">
                                          <div class="col-4 text-center text-dark border">
                                          '.$catFinal.'
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
} //tópico 4
else if($topico == 5){
    $sqlAnnio = "SELECT * FROM annio WHERE annio = '$annio' ORDER BY id DESC";
                      $resultado_sqlAnnio = $conn->query($sqlAnnio);
                      while($row_sqAnnio = $resultado_sqlAnnio->fetch_assoc()){
                        $annio = $row_sqAnnio['annio'];
                        $trimestres = 1;

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
                                      Manual de contabilidad
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
                                  $sql = "SELECT * FROM archivo WHERE annio = $annio AND subcategoria = 15";
                                  $resultado_sql = $conn->query($sql);
                                  while($row_sql = $resultado_sql->fetch_assoc()){
                                    $categoria = $row_sql['subcategoria'];
    
                                    $sqlCat = "SELECT * FROM categoria WHERE id = '$categoria'";
                                    $resultadoCat = $conn->query($sqlCat);
                                    $rowCat = $resultadoCat->fetch_assoc();
                                    $catFinal = $rowCat['categoria'];
                             
                                    echo '
                                    <div class="row">
                                          <div class="col-4 text-center text-dark border">
                                          '.$catFinal.'
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
}//tópico 5
    ?>