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

            if(topicoVal == 2 || topicoVal == 3){
                document.getElementById("trimestreFront").disabled = true; 
                document.getElementById("btnSearchT").disabled = false;
                document.getElementById("trimestreFront").value = 0;
            }
            else if(topicoVal == 5 || topicoVal == 6){
                 document.getElementById("selectAnnio").disabled = true;
                 document.getElementById("trimestreFront").disabled = true;
                 document.getElementById("btnSearchT").disabled = true;
                 document.getElementById("selectAnnio").value = 0;
                 document.getElementById("trimestreFront").value = 0;
            }
            else{
                document.getElementById("selectAnnio").disabled = false;
                document.getElementById("trimestreFront").disabled = false;
                document.getElementById("btnSearchT").disabled = false;
                document.getElementById("selectAnnio").value = "";
                 document.getElementById("trimestreFront").value = "";
            }
            
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

    
    if(topico == 2 || topico == 3){
        if (annio == ""){
            alert("Debes seleccionar el año y trimestre");
            return;
        }
    }
    else if(topico == 1 || topico == 4){
        if (annio == "" || trimestre == "" ){
            alert("Debes seleccionar el año y trimestre");
            return;
        }
    }
    //else{
        
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

   //} //else
}

function limpiarTodo(){
    document.getElementById('selectAnnio').value="";
    document.getElementById('trimestreFront').value="";
    document.getElementById('spanTopico').innerHTML="";
    document.getElementById('cardsTopicos').innerHTML="";
    document.getElementById('selectTopicoModal').value="";
}