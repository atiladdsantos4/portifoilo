@section('title','Parâmetros Gerais')
@extends('admin.layouts.layout_geral')
@section('content')

    <div class="pagetitle">
      <h1>Parâmetros Gerais do Sistema</h1>
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
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Parâmetros</h5>
              <form>
                  @csrf
                  @foreach( $dados as $item)
                    @if( $item->par_tipo == 'T' )
                    <label for="f_titulo" class="titulo col-sm-8 col-form-label">{{$item->par_label}}</label>
                    <div class="col-sm-12">
                      <div class="input-group mb-3">
                          <input type="text" class="form-control" name="f_titulo" placeholder="Título do Site" value="{{$item->par_valor}}">
                          <button class="btn btn-outline-secondary btn-param" type="button" id="bt-{{$item->par_id_par}}">
                             <span style="visibility:hidden;" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                             Alterar
                          </button>
                      </div>
                    </div>
                    @elseif( $item->par_tipo == 'I' )
                    <label for="inputNumber" class="titulo col-sm-8 col-form-label">{{$item->par_label}}</label>   
                    <div class="col-sm-12">
                      <div class="col-sm-12">
                          <input class="form-control" name="f_titulo" type="file" id="bt-{{$item->par_id_par}}">
                      </div>
                    </div>
                    @endif
                  @endforeach
              </form>  
            </div>
          </div>        
        </div>
      </div>
    </section>

@endsection    

  