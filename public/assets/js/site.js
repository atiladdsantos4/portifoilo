var link = document.currentScript.getAttribute('link_gerencia');
console.log(link);
$(document).on('click','.btn-autentica,.btn-param,.bi-zoom-in',function(){//interface_admin
    
    if( $(this).hasClass("bi-zoom-in") ){
        let obj = $(this).parent().parent();
        let titulo = $(obj).find('H4');
        let titulo_texto = $(obj).find('P');
        //console.log(texto_ref); 
       $('.gslide-title').html($(titulo).html()+'<br>'+$(titulo_texto).html());
    }

    if( $(this).hasClass("btn-param") ){
        let obj = $(this).find('span');
        $(obj).css("visibility","visible");
        let caminho = window.location.pathname;
        let posicao = caminho.indexOf('index.php');
        let id_ref = $(this).attr("id");
        let id = id_ref.split('-');
        let valor = $(this).parent().find('input').val();
        let host = $(location).attr('hostname')+caminho+'/'+id[1]+'/modifica_param';
        let protocolo = $(location).attr('protocol'); 
        let url = protocolo +'//'+host;
        var dadosForm = [];
        dadosForm.push(
           {'name': '_token','value': $("input[name=_token]").val()},
           {'name': 'valor','value': valor}  
        );
        $.post(url, dadosForm, function(resultado) {
        }, 'json')
        .done(function(resultado) {
            if(resultado.valid){
                $(obj).css("visibility","hidden");
                $("#alert_text").html(resultado.mensagem);
                $("#alert_id_admin").css("z-index","1000");
                $("#alert_id_admin").addClass('show');
                setTimeout(function() { 
                    $("#alert_id_admin").removeClass('show');
                    $("#alert_id_admin").css("z-index","50");
                    //location.reload();
                }, 2000); 
            } else {
                $("#alert_text").html(resultado.mensagem);
                $("#alert_id").css("z-index","1000");
                $("#alert_id").removeClass('alert-primary');
                $("#alert_id").addClass('alert-danger show');
                setTimeout(function() { 
                    $("#alert_id").removeClass('show').removeClass('alert-danger');
                    $("#alert_id").addClass('alert-primary');
                    $("#alert_id").css("z-index","50");
                    //location.reload();
                }, 2000); 
                // $('.modal-error').modal('show');              
                // $('.modal-error').modal('show'); 
            }
        })
        .always(function(resultado) {
          null;
        }); 
    }
    if( $(this).hasClass("btn-autentica") ){
        console.log('teste');
        console.log($(location));
        var dadosForm = [];
        dadosForm.push(
           {'name': '_token','value': $("input[name=_token]").val()},
           {'name': 'email','value': $("#aut_email").val()},
           {'name': 'senha','value': $("#aut_senha").val()}  
        );
        // let host = $(location).attr('hostname')+'/projetos/portifolio/public/index.php';
        // let protocolo = $(location).attr('protocol'); 
        // let url = protocolo +'//' + host+'/admin/autentica';  
        // modificação passando" "link" via parametro de script // 
        let url = link;
        $.post(url, dadosForm, function(resultado) {
        }, 'json')
        .done(function(resultado) {
            if(resultado.valid){
                $("#idlogin").modal('hide');
                $("#alert_text").html(resultado.mensagem);
                $("#alert_id").css("z-index","1000");
                $("#alert_id").addClass('show');
                setTimeout(function() { 
                    $("#alert_id").removeClass('show');
                    $("#alert_id").css("z-index","50");
                    location.reload();
                }, 2000); 
            } else {
                $("#idlogin").modal('hide');
                $("#alert_text").html(resultado.mensagem);
                $("#alert_id").css("z-index","1000");
                $("#alert_id").removeClass('alert-primary');
                $("#alert_id").addClass('alert-danger show');
                setTimeout(function() { 
                    $("#alert_id").removeClass('show').removeClass('alert-danger');
                    $("#alert_id").addClass('alert-primary');
                    $("#alert_id").css("z-index","50");
                }, 2000); 
            }
        })
        .always(function(resultado) {
          null;
        }); 
    }
    
  
});