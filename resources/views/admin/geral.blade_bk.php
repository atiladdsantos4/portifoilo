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
                  <label for="f_titulo" class="col-sm-8 col-form-label">Título do Site</label>
                  <div class="col-sm-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="f_titulo" placeholder="Título do Site" value="{{\App\Models\Params::getTituloSite()}}">
                        <button class="btn btn-outline-secondary btn-param" type="button" id="button-addon1">Alterar</button>
                    </div>
                  </div>
                  <label for="f_titulo" class="col-sm-8 col-form-label">Nº do WhatsApp</label>
                  <div class="col-sm-12">
                      <div class="input-group mb-3">
                           <input type="text" class="form-control" name="f_titulo" placeholder="Número Whatsapp" value="{{\App\Models\Params::getWhatsapp()}}">
                           <button class="btn btn-outline-secondary btn-param" type="button" id="button-addon1">Alterar</button>
                      </div>
                  </div>
                  <label for="f_titulo" class="col-sm-8 col-form-label">Email de Contato</label>
                  <div class="col-sm-12">
                      <div class="input-group mb-3">
                           <input type="text" class="form-control" name="f_titulo" placeholder="Email de Contato" value="{{\App\Models\Params::getEmailSite()}}">
                           <button class="btn btn-outline-secondary btn-param" type="button" id="button-addon1">Alterar</button>
                      </div>
                  </div>
                  <label for="inputNumber" class="col-sm-8 col-form-label">Ícone do Site</label>   
                  <div class="col-sm-12">
                    <div class="col-sm-12">
                        <input class="form-control" name="f_titulo" type="file" id="formFile">
                    </div>
                  </div>
                  <label for="f_titulo" class="col-sm-8 col-form-label">Nome no Rodapé(Direitos Autorais)</label>
                  <div class="col-sm-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="f_titulo" placeholder="Exibição no Rodaoé" value="{{\App\Models\Params::getNomeRodape()}}">
                        <button class="btn btn-outline-secondary btn-param" type="button" id="button-addon1">Alterar</button>
                    </div>
                  </div>
                  <label for="f_titulo" class="col-sm-8 col-form-label">1ª Opção Menu</label>
                  <div class="col-sm-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="f_titulo" placeholder="Home" value="{{\App\Models\Params::getOpcaoMenu(1)}}">
                        <button class="btn btn-outline-secondary btn-param" type="button" id="button-addon1">Alterar</button>
                    </div>
                  </div>
                  <label for="f_titulo" class="col-sm-8 col-form-label">2ª Opção Menu</label>
                  <div class="col-sm-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="f_titulo" placeholder="About" value="{{\App\Models\Params::getOpcaoMenu(2)}}">
                        <button class="btn btn-outline-secondary btn-param" type="button" id="button-addon1">Alterar</button>
                    </div>
                  </div>
                  <label for="f_titulo" class="col-sm-8 col-form-label">3ª Opção Menu</label>
                  <div class="col-sm-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="f_titulo" placeholder="Services" value="{{\App\Models\Params::getOpcaoMenu(3)}}">
                        <button class="btn btn-outline-secondary btn-param" type="button" id="button-addon1">Alterar</button>
                    </div>
                  </div>
                  <label for="f_titulo" class="col-sm-8 col-form-label">4ª Opção Menu</label>
                  <div class="col-sm-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="f_titulo" placeholder="Portfolio"value="{{\App\Models\Params::getOpcaoMenu(4)}}">
                        <button class="btn btn-outline-secondary btn-param" type="button" id="button-addon1">Alterar</button>
                    </div>
                  </div>
                  <label for="f_titulo" class="col-sm-8 col-form-label">5ª Opção Menu</label>
                  <div class="col-sm-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="f_titulo" placeholder="Team" value="{{\App\Models\Params::getOpcaoMenu(5)}}">
                        <button class="btn btn-outline-secondary btn-param" type="button" id="button-addon1">Alterar</button>
                    </div>
                  </div>
                  <label for="f_titulo" class="col-sm-8 col-form-label">Endereço(Rua)</label>
                  <div class="col-sm-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="f_titulo" placeholder="Team" value="{{\App\Models\Params::getRua()}}">
                        <button class="btn btn-outline-secondary btn-param" type="button" id="button-addon1">Alterar</button>
                    </div>
                  </div>
                  <label for="f_titulo" class="col-sm-8 col-form-label">Endereço(Bairro)</label>
                  <div class="col-sm-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="f_titulo" placeholder="Team" value="{{\App\Models\Params::getBairro()}}">
                        <button class="btn btn-outline-secondary btn-param" type="button" id="button-addon1">Alterar</button>
                    </div>
                  </div>
                  <label for="f_titulo" class="col-sm-8 col-form-label">Endereço(Municipio-Estado)</label>
                  <div class="col-sm-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="f_titulo" placeholder="Team" value="{{\App\Models\Params::getCidadeEstado()}}">
                        <button class="btn btn-outline-secondary btn-param" type="button" id="button-addon1">Alterar</button>
                    </div>
                  </div>
                  <label for="f_titulo" class="col-sm-8 col-form-label">Endereço(Cep)</label>
                  <div class="col-sm-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="f_titulo" placeholder="Team" value="{{\App\Models\Params::getCep()}}">
                        <button class="btn btn-outline-secondary btn-param" type="button" id="button-addon1">Alterar</button>
                    </div>
                  </div>
              </form>  
            </div>
          </div>        
        </div>
        
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>
              
              <!-- General Form Elements -->
              <form>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Título</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                  <div class="col-sm-10">
                    <input type="time" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                  <div class="col-sm-10">
                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"></textarea>
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        First radio
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Second radio
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled>
                      <label class="form-check-label" for="gridRadios3">
                        Third disabled radio
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                  <div class="col-sm-10">

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                      <label class="form-check-label" for="gridCheck2">
                        Example checkbox 2
                      </label>
                    </div>

                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Disabled</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="Read only / Disabled" disabled>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Multi Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" multiple aria-label="multiple select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Advanced Form Elements</h5>

              <!-- Advanced Form Elements -->
              <form>
                <div class="row mb-5">
                  <label class="col-sm-2 col-form-label">Switches</label>
                  <div class="col-sm-10">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                      <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
                      <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>
                      <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-5">
                  <label class="col-sm-2 col-form-label">Ranges</label>
                  <div class="col-sm-10">
                    <div>
                      <label for="customRange1" class="form-label">Example range</label>
                      <input type="range" class="form-range" id="customRange1">
                    </div>
                    <div>
                      <label for="disabledRange" class="form-label">Disabled range</label>
                      <input type="range" class="form-range" id="disabledRange" disabled>
                    </div>
                    <div>
                      <label for="customRange2" class="form-label">Min and max with steps</label>
                      <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange2">
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Floating labels</label>
                  <div class="col-sm-10">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                      <label for="floatingTextarea">Comments</label>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      <label for="floatingSelect">Works with selects</label>
                    </div>
                  </div>
                </div>

                <div class="row mb-5">
                  <label class="col-sm-2 col-form-label">Input groups</label>
                  <div class="col-sm-10">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">@</span>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>

                    <label for="basic-url" class="form-label">Your vanity URL</label>
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                      <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>

                    <div class="input-group mb-3">
                      <span class="input-group-text">$</span>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                      <span class="input-group-text">.00</span>
                    </div>

                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                      <span class="input-group-text">@</span>
                      <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                    </div>

                    <div class="input-group">
                      <span class="input-group-text">With textarea</span>
                      <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

@endsection    

  