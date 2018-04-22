function contactPost(){
    var subject = $(".subject").val();
    var text = $(".text").val();
    
    objectify(subject, text);
}

function objectify(subject, text){
    var mail = {};
    mail.subject = subject;
    mail.text = text;
    
    var mailjson = JSON.stringify(mail);
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        document.getElementById('mailSucces').innerHTML = this.responseText;
    };
    xhttp.open("POST","/contactMail", true);
    xhttp.send(mailjson);
}
    
function zoeken(){
    var data = {
    term:$(".form-control").val(),
    _token:$(".form-control").data('token')
    };
    
    var jsondata = JSON.stringify(data);
    query(jsondata);
}
    
function query(jsondata){
    var url = $(".form-control").attr("data-link");
    
    $.ajax({
        url:"/zoek",
        data: jsondata,
        datatype:"json",
        type:"POST",
        
        beforeSend: function (xhr) {
            //alert(jsondata);
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        
        success:function(data){ 
            if (data.length !== 0){
                paginaData(data);
            }else{
                $("#tabelZoekResultaat").html(" ");
                $("#tabelzoek").show();
            }
        },error:function(){ 
            alert("HTTP error");
        }
    }); 
}

function paginaData(data){
    var i;
    $("#tabelzoek").hide();
    $("#tabelZoekResultaat").html(" ");
    for(i = 0; i < data.length; i++){
        
        $( "#tabelZoekResultaat" ).append(  
            '<div class="well">'+
            '<div class="card-body">'+
            '<h3 class="card-title" id="qien--colour">'+data[i]['title']+'</h3>'+
            '<p class="card-text">'+data[i]['content']+'</p>'+
            '<p class="card-text"><small class="text-muted">Gepost op:'+data[i]['created_at']+'</small></p>'+
            '<a href="/nieuwsposts/'+data[i]['id']+' class="btn btn-default">Lees Verder</a>'+
            '</div>');

    }
}
    



    
    