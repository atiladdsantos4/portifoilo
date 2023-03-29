<!-- Modal -->
<div class="modal fade" id="idlogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:rgb(27, 47, 69) !important;color:white;">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="bi bi-person"></i>&nbsp;Login <span style="font-size:12px;color:yellow;">*Para Administradores do Site</span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="row mb-3">
         @csrf
         <label for="inputText" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
             <input type="text" class="form-control" id="aut_email">
            </div>
        </div>
        <div class="row mb-3">
           <label for="inputEmail" class="col-sm-2 col-form-label">Senha</label>
           <div class="col-sm-10">
            <input type="password" class="form-control" id="aut_senha">
           </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
        <button type="button" class="btn-autentica btn btn-primary">Autenticar</button>
      </div>
    </div>
  </div>
</div>
<div style="position:absolute;top:50px;left:0;right:0;max-width:500px;margin: auto;" id="alert_id" class="alert alert-primary alert-dismissible fade" role="alert"> 
    <span id="alert_text">A simple primary alert—check it out!</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> 
