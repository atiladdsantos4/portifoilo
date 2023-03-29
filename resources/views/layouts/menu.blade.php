        <ul>  
          @if( session('admin') )
            <li><a target="_blank" href="{{route('admin.geral',['interface'=>'geral'])}}" style="color:#a6f200 !important;" class="menu active">Admin</a></li>
          @else 
            <li><a href="#" onclick="$('#idlogin').modal('show');" class="menu active">Login</a></li>
          @endif
          <li><a href="{{route('home.geral',[ 'interface'=>'index'])}}" class="menu active">{{\App\Models\Params::getOpcaoMenu(1)}}</a></li>
          <li><a href="{{route('home.geral',[ 'interface'=>'about'])}}" class="menu">{{\App\Models\Params::getOpcaoMenu(2)}}</a></li>
          <li><a href="{{route('home.geral',[ 'interface'=>'services'])}}" class="menu">{{\App\Models\Params::getOpcaoMenu(3)}}</a></li>
          <li><a href="{{route('home.geral',[ 'interface'=>'portfolio'])}}" class="menu">{{\App\Models\Params::getOpcaoMenu(4)}}</a></li>
          <li><a href="{{route('home.geral',[ 'interface'=>'team'])}}" class="menu">{{\App\Models\Params::getOpcaoMenu(5)}}</a></li>
          <!-- <li><a href="{{route('home.geral',[ 'interface'=>'blog'])}}" class="menu">Blog</a></li> -->
          <li class="dropdown"><a href="javascript::void(0);"><span style="color:#ae98f0;">Dependência Química</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{route('home.geral',[ 'interface'=>'codependencia'])}}">CoDependêcia</a></li>
              <li><a href="{{route('home.geral',[ 'interface'=>'alcoolismo'])}}">Alcoolismo</a></li>
              <li class="dropdown"><a href="#"><span>Adicção</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{route('home.geral',[ 'interface'=>'escopo'])}}">O que é?</a></li>
                  <li><a href="{{route('home.geral',[ 'interface'=>'sentimentos'])}}">Comportamentos</a></li>
                  <li><a href="{{route('home.geral',[ 'interface'=>'pensamentos'])}}">Pensamentos Destrutivos</a></li>
                </ul>
              </li>
              <li><a href="{{route('home.geral',[ 'interface'=>'internacao'])}}">Quando devo internar?</a></li>
              <li><a href="{{route('home.geral',[ 'interface'=>'tipo'])}}">Tipos de Internação</a></li>
            </ul>
          </li>
          <li><a href="{{route('home.geral',[ 'interface'=>'contact'])}}" class="menu">Contato</a></li>
        </ul>

