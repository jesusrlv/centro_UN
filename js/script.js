function annio(){
    $.ajax({
        type: "POST",
        url: "admin/query/query_annio_front.php",
        dataType: "html",
        success: function(data) {
            $('#selectAnnio').fadeIn(1000).html(data)
        }
    });
}

function consultaTopicos(){
    var topico = document.getElementById('topico').value;
    var annio = document.getElementById('selectAnnio').value;
    var trimestre = document.getElementById('trimestreFront').value;
    if (annio == "" || trimestre =="" ){
        alert("Debes seleccionar el año y trimestre");
       }
    else{
        if(topico = 1){
            $.ajax({
                type: "POST",
                url: "admin/query/query_topicos.php",
                dataType: "html",
                data: {
                    annio:annio,
                    trimestre:trimestre,
                    topico:topico
                },
                success: function(data) {
                    $('#cardsTopicos').fadeIn(1000).html(data)
                }
            });
        }
        else if(topico==2){
            $.ajax({
                type: "POST",
                url: "admin/query/query_topicos.php",
                dataType: "html",
                data: {
                    annio:annio,
                    trimestre:trimestre,
                    topico:topico
                },
                success: function(data) {
                    $('#cardsTopicos').fadeIn(1000).html(data)
                }
            });
        }
        else if(topico==3){
            $.ajax({
                type: "POST",
                url: "admin/query/query_topicos.php",
                dataType: "html",
                data: {
                    annio:annio,
                    trimestre:trimestre,
                    topico:topico
                },
                success: function(data) {
                    $('#cardsTopicos').fadeIn(1000).html(data)
                }
            });
        }
        else if(topico==4){
            $.ajax({
                type: "POST",
                url: "admin/query/query_topicos.php",
                dataType: "html",
                data: {
                    annio:annio,
                    trimestre:trimestre,
                    topico:topico
                },
                success: function(data) {
                    $('#cardsTopicos').fadeIn(1000).html(data)
                }
            });
        }
    }
}