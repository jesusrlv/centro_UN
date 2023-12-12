<?php 
include('../prcd/conn.php');

    $annio = $_POST['annio'];
    $topico = $_POST['topico'];

    if($topico == 1){
    $trimestre = $_POST['trimestre'];
    
                $sql = "SELECT * FROM archivo WHERE annio = $annio AND trimestre = '$trimestre' AND categoria = '$topico' ORDER BY subcategoria DESC";
                $resultado_sql = $conn->query($sql);
                while($row_sql = $resultado_sql->fetch_assoc()){
                $catRow = $row_sql['subcategoria'];
                $sqlCat = "SELECT * FROM categoria WHERE id ='$catRow'";
                $resultadoCat = $conn->query($sqlCat);
                $rowCat = $resultadoCat->fetch_assoc();
                
                  echo'
    
                  <div class="col d-flex align-items-start rounded">
                            <div class="icon-square text-dark flex-shrink-0 me-3" style="background-color:#b14947;">
                              <svg class="bi text-light" width="1em" height="1em"><use xlink:href="#money"/></svg>
                            </div>
                            <div>
                              <h2 class="" style="color:#b14947 ;"><strong>'.$rowCat['categoria'].'</strong></h2>
                              <p class="text-secondary">Sección para consultar los estados financieros 2015 - 2021.</p>
                              <a href="#" class="btn btn-outline-secondary">
                                <i class="bi bi-check-circle-fill"></i> Revisar
                              </a>
                            </div>
                          </div>
              
                  ';
            
                
            }
            
    // }
    }
    
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