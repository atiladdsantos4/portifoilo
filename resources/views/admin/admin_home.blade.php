@section('title','Parâmetros Gerais')
@extends('admin.layouts.layout_geral')
@section('content')

    <div class="pagetitle">
      <h1>Edição da Tela Home</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Definições</h5>
              <form>
                  @csrf
                  @php
                    //var_dump($dados);
                    //print_r(array_keys($dados['homeid1'])); 
                  @endphp
                  <input type="hidden" name="f_interface" value="admin_home">
                  <div class="col-sm-12">
                      <label for="f_titulo" class="titulo col-sm-8 col-form-label">Título Principal</label>
                      <div class="input-group mb-3">
                          <input type="text" class="form-control" name="f_titulo" placeholder="Título do Site" value="{{$dados['homeid1']}}">
                          <button class="btn btn-outline-secondary btn-alterar" type="button" id="bt-{{$dadosid['homeid1']}}">
                             <span style="visibility:hidden;" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                             Alterar
                          </button>
                      </div>
                      <label for="f_titulo" class="titulo col-sm-8 col-form-label">Texto Título Principal</label>
                      <div class="input-group">
                          <textarea class="form-control" aria-label="With textarea" rows="5">{{$dados['homeid2']}}</textarea>
                          <button class="btn btn-outline-secondary btn-alterar" type="button" id="bt-{{$dadosid['homeid2']}}">
                             <span style="visibility:hidden;" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                             Alterar
                          </button>
                      </div>
                      <label for="f_titulo" class="titulo col-sm-8 col-form-label">Segundo Texto Título Principal</label>
                      <div class="input-group">
                          <textarea class="form-control" aria-label="With textarea" rows="5">{{$dados['homeid3']}}</textarea>
                          <button class="btn btn-outline-secondary btn-alterar" type="button" id="bt-{{$dadosid['homeid3']}}">
                             <span style="visibility:hidden;" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                             Alterar
                          </button>
                      </div>
                      <label for="f_titulo" class="titulo col-sm-8 col-form-label">Texto Carrossel</label>
                      <div class="input-group">
                          <input type="text" class="form-control" name="f_titulo" placeholder="Texto Carrossel" value="{{$dados['homeid4']}}">
                          <button class="btn btn-outline-secondary btn-alterar" type="button" id="bt-{{$dadosid['homeid4']}}">
                             <span style="visibility:hidden;" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                             Alterar
                          </button>
                      </div>
                      <label for="f_titulo" class="titulo col-sm-8 col-form-label">Imagem Painel</label>
                      <div class="mb-3">
                          <div class="row">  
                              <div class="col-9">
                                <input class="form-control arq_home" type="file" id="{{$dadosid['homeid5']}}">
                              </div>
                              <div class="col-3">
                                <img style="height:20%;" src="{{$dados['homeid5']}}" class="rounded float-start" alt="...">
                              </div>
                          </div>   
                      </div>
                  </div>

              </form>  
            </div>
          </div>        
        </div>
      </div>
    </section>
@endsection    

@section('scripts_page')
<script>
  $(document).on('change','.arq_home',function(){
        //console.log($(this).prop('files')[0])
        if( $(this).hasClass('arq_home') ) {  
          debugger;
          //$("#splash_id").css("display","block");  
          //let id = $(this).attr("id");
          let id = $(this).attr("id");
          // let id = id_ref.split('-');
          // let pai = $(this).parent().parent();
          //let obj = $(pai).find('.col-md-4'); 
          var file_data = $(this).prop('files')[0];
          var formData = new FormData();
          formData.append("id",id); 
          formData.append("arquivo",file_data); 
          formData.append('_token',$("input[name=_token]").val());
          //return;
          $.ajax({
              type: "POST",
              url: "{{route('admin.geral')}}/modifica_imagem",
              data: formData,
              contentType : false,
			        processData : false
          }).done(function (data) {
              let resultado = data;
              //JSON.stringify(data);
              //console.log( resultado.imagem );
              if(resultado.valid){
                $("#splash_id").css("display","none");
                $(obj).empty();
                $(obj).append('<label for="validationTextarea" class="form-label">Anexo</label>');
                if( resultado.tipo == 'image' ){
                    $(obj).append('<img style="width:300px;height:auto;" src="'+resultado.conteudo+'">');    
                } else if( resultado.tipo == 'audio'){
                    $(obj).append('<audio controls><source src="'+resultado.conteudo+'" type="'+resultado.mime+'"></audio>');    
                }
                
                //$(".texto-toast").html(resultado.mensagem);
                //$("#idtoast").toast("show");
              } else {
                $("#splash_id").css("display","none");
                $(obj).append('<label for="validationTextarea" class="form-label">Foto Atendimento</label>');
                $(obj).append('<img style="width:300px;height:auto;" src="'+resultado.imagem+'">');
              } 
               
          });
        }
   });
   
  $(".btn-alterar").on('click',function(){
        console.log('teste');
        let conteudo = $(this).parent().find('input,textarea');
        let spinner = $(this).find('.spinner-border');
        let id_ref = $(this).attr("id");
        let id = id_ref.split('-');
        $(spinner).css("visibility","visible");
        var dadosForm = [];
        dadosForm.push(
           {'name': '_token','value': $("input[name=_token]").val()},
           {'name': 'tela','value': $("input[name=f_interface]").val()},
           {'name': 'id','value': id[1]},  
           {'name': 'conteudo','value': $(conteudo).val()}  
        );
        // let host = $(location).attr('hostname')+'/projetos/portifolio/public/index.php';
        // let protocolo = $(location).attr('protocol'); 
        // let url = protocolo +'//' + host+'/admin/autentica';  
        // modificação passando" "link" via parametro de script // 
        let url = "{{route('admin.geral')}}/"+id[1]+'/modifica_interface'
        $.post(url, dadosForm, function(resultado) {
        }, 'json')
        .done(function(resultado) {
            if(resultado.valid){
                $(spinner).css("visibility","hidden");
                $('.toast').show()
                // $("#alert_text").html(resultado.mensagem);
                // $("#alert_id").css("z-index","1000");
                // $("#alert_id").addClass('show');
                setTimeout(function() { 
                    $('.toast').hide()
                    // $("#alert_id").removeClass('show');
                    // $("#alert_id").css("z-index","50");
                    // location.reload();
                }, 2000); 
            } else {
                $(spinner).css("visibility","hidden");
                $('.toast').show()
                // $("#idlogin").modal('hide');
                // $("#alert_text").html(resultado.mensagem);
                // $("#alert_id").css("z-index","1000");
                // $("#alert_id").removeClass('alert-primary');
                // $("#alert_id").addClass('alert-danger show');
                setTimeout(function() { 
                   $('.toast').hide()

                    // $("#alert_id").removeClass('show').removeClass('alert-danger');
                    // $("#alert_id").addClass('alert-primary');
                    // $("#alert_id").css("z-index","50");
                }, 2000); 
            }
        })
        .always(function(resultado) {
          null;
        }); 
  });
</script> 
@endsection    

  