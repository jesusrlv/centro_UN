// abrir modal al iniciar
$(document).ready(function(){
    // Show the Modal on load
    $("#modalOnload").modal("show");
    $.ajax({
        type: "POST",
        url: "admin/query/query_topicos2.php",
        dataType: "html",
        success: function(data) {
            $('#selectTopicoModal').fadeIn(1000).html(data)
        }
    });
    $("#buscarTopico" ).on( "click", function() {
        var topicoVal = $('#selectTopicoModal').val();
        if(topicoVal==""){
            alert("Selecciona una opción");
        }
        else{
            $('#topico').val(topicoVal);
            $.ajax({
                type: "POST",
                data:{
                    topicoVal:topicoVal
                },
                url: "admin/query/query_topicos3.php",
                dataType: "html",
                success: function(data) {
                    $('#spanTopico').fadeIn(1000).html(data);
                    $("#modalOnload").modal("hide");

                }
            });
        }
    } );
});

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

        // if(topico == 1){
        //     $.ajax({
        //         type: "POST",
        //         url: "admin/query/query_topicos.php",
        //         dataType: "html",
        //         data: {
        //             annio:annio,
        //             trimestre:trimestre,
        //             topico:topico
        //         },
        //         success: function(data) {
        //             $('#cardsTopicos').fadeIn(1000).html(data)
        //         }
        //     });
        // }
    
        // else if(topico==2){
        //     $.ajax({
        //         type: "POST",
        //         url: "admin/query/query_topicos.php",
        //         dataType: "html",
        //         data: {
        //             annio:annio,
        //             trimestre:trimestre,
        //             topico:topico
        //         },
        //         success: function(data) {
        //             $('#cardsTopicos').fadeIn(1000).html(data)
        //         }
        //     });
        // }
        // else if(topico==3){
        //     $.ajax({
        //         type: "POST",
        //         url: "admin/query/query_topicos.php",
        //         dataType: "html",
        //         data: {
        //             annio:annio,
        //             trimestre:trimestre,
        //             topico:topico
        //         },
        //         success: function(data) {
        //             $('#cardsTopicos').fadeIn(1000).html(data)
        //         }
        //     });
        // }
        // else if(topico==4){
        //     $.ajax({
        //         type: "POST",
        //         url: "admin/query/query_topicos.php",
        //         dataType: "html",
        //         data: {
        //             annio:annio,
        //             trimestre:trimestre,
        //             topico:topico
        //         },
        //         success: function(data) {
        //             $('#cardsTopicos').fadeIn(1000).html(data)
        //         }
        //     });
        // }
        // else if(topico==5){
        //     $.ajax({
        //         type: "POST",
        //         url: "admin/query/query_topicos.php",
        //         dataType: "html",
        //         data: {
        //             annio:annio,
        //             trimestre:trimestre,
        //             topico:topico
        //         },
        //         success: function(data) {
        //             $('#cardsTopicos').fadeIn(1000).html(data)
        //         }
        //     });
        // }
        // else if(topico==6){
        //     $.ajax({
        //         type: "POST",
        //         url: "admin/query/query_topicos.php",
        //         dataType: "html",
        //         data: {
        //             annio:annio,
        //             trimestre:trimestre,
        //             topico:topico
        //         },
        //         success: function(data) {
        //             $('#cardsTopicos').fadeIn(1000).html(data)
        //         }
        //     });
        // }
    }
}

function limpiarTodo(){
    document.getElementById('selectAnnio').value="";
    document.getElementById('trimestreFront').value="";
    document.getElementById('spanTopico').innerHTML="";
    document.getElementById('cardsTopicos').innerHTML="";
    document.getElementById('selectTopicoModal').value="";
}