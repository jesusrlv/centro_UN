function annio(a){
    var topico = document.getElementById('valueAnnio').value;
    $.ajax({
        type: "POST",
        url: "query/query_annio.php",
        dataType: "html",
        data: {
            a:a,
            topico:topico
        },
        success: function(data) {
            $('#tablaAnnio').fadeIn(1000).html(data)
        }
    });
}