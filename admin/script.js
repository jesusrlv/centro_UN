function annio(a){
    var topico = document.getElementById('valueAnnio').value;
    $.ajax({
        type: "POST",
        url: "query/query_annio.php",
        data: {
            a:a,
            topico:topico
        },
        success: function(data) {
            
        }
    });
}