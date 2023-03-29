<form action="{{route('home.mail')}}" method="post" role="form" id="formcontact" class="needs-validation" novalidate>
    @csrf 
    <div class="row">
    <div class="col-md-6 form-floating mt-3">
        <input type="text" name="nome" class="form-control" id="nome" placeholder="Your Name" required>
        <label for="nome">&nbsp;&nbsp;Informe o Nome</label>
        <div class="invalid-feedback">
           O nome deve ser informado
        </div>
    </div>
    <div class="col-md-6 form-floating mt-3">
       <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
       <label for="nome">&nbsp;&nbsp;Informe o E-mail</label>
       <div class="invalid-feedback">
           O e-mail deve ser informado
        </div>
    </div>
    </div>
    <div class="form-floating mt-3">
       <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
       <label for="nome">&nbsp;&nbsp;Assunto</label>
       <div class="invalid-feedback">
           O assunto deve ser informado
       </div>
    </div>
    <div class="form-floating mt-3">
        <textarea class="form-control" id="mensagem" name="mensagem" style="min-height: 123px;" placeholder="Message" required></textarea>
        <label for="mensagem">&nbsp;&nbsp;Digite a Mensagem</label>
        <div class="invalid-feedback">
           O conteúdo da Mensagem deve ser informado
       </div>
    </div>
    <div class="my-3">
         <div class="loading">Loading</div>
    <div class="error-message"></div>
         <div class="sent-message">Seu E-mail foi envado com sucesso</div>
    </div>
    <div class="text-center"><button class="envia_email btn-outline-primary" type="button">Enviar Mensagem</button></div>
</form>
