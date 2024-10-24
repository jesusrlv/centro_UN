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
                              <a href="admin/docs/'.$row_sql['documento'].'" target="_blank" class="btn btn-outline-secondary">
                                <i class="bi bi-check-circle-fill"></i> Revisar
                              </a>
                            </div>
                          </div>
              
                  ';
            }
            
    // }
    }
    
else if($topico == 2){
  $sql = "SELECT * FROM archivo WHERE annio = $annio AND categoria = '$topico' ORDER BY subcategoria DESC";
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
                <a href="admin/docs/'.$row_sql['documento'].'" target="_blank" class="btn btn-outline-secondary">
                  <i class="bi bi-check-circle-fill"></i> Revisar
                </a>
              </div>
            </div>

    ';
}
}//tópico 3
else if ($topico == 3){
  $sql = "SELECT * FROM archivo WHERE annio = $annio AND categoria = '$topico' ORDER BY subcategoria DESC";
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
                <a href="admin/docs/'.$row_sql['documento'].'" target="_blank" class="btn btn-outline-secondary">
                  <i class="bi bi-check-circle-fill"></i> Revisar
                </a>
              </div>
            </div>

    ';
}
} //tópico 3
else if($topico == 4){
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
                <a href="admin/docs/'.$row_sql['documento'].'" target="_blank" class="btn btn-outline-secondary">
                  <i class="bi bi-check-circle-fill"></i> Revisar
                </a>
              </div>
            </div>

    ';
}
} //tópico 4
else if($topico == 5){
  $sql = "SELECT * FROM archivo WHERE categoria = '$topico' ORDER BY subcategoria DESC";
  $resultado_sql = $conn->query($sql);
  while($row_sql = $resultado_sql->fetch_assoc()){
  $catRow = $row_sql['subcategoria'];
  $catRow2 = $row_sql['categoria'];
  $sqlCat = "SELECT * FROM categoria WHERE id ='$catRow'";
  $resultadoCat = $conn->query($sqlCat);
  $rowCat = $resultadoCat->fetch_assoc();
  
  $sqlCat2 = "SELECT * FROM topicos WHERE id ='$catRow2'";
  $resultadoCat2 = $conn->query($sqlCat2);
  $rowCat2 = $resultadoCat2->fetch_assoc();
  
    echo'

    <div class="col d-flex align-items-start rounded">
              <div class="icon-square text-dark flex-shrink-0 me-3 text-light" style="background-color:#b14947;">
                <span class="text-light">'.$rowCat2['img'].'</span>
              </div>
              <div>
                <h2 class="" style="color:#b14947 ;"><strong>'.$rowCat['categoria'].'</strong></h2>
                <p class="text-secondary">Sección para consultar los estados financieros 2015 - 2021.</p>
                <a href="admin/docs/'.$row_sql['documento'].'" target="_blank" class="btn btn-outline-secondary">
                  <i class="bi bi-check-circle-fill"></i> Revisar
                </a>
              </div>
            </div>

    ';
}
}//tópico 6
else if($topico == 6){
  $sql = "SELECT * FROM archivo WHERE categoria = '$topico' ORDER BY subcategoria DESC";
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
                <a href="admin/docs/'.$row_sql['documento'].'" target="_blank" class="btn btn-outline-secondary">
                  <i class="bi bi-check-circle-fill"></i> Revisar
                </a>
              </div>
            </div>

    ';
}
}
    ?>