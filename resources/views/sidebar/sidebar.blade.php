<div id="header">
          <span id="initial">F</span>
          <span id="name">{{Auth::user()->name}}</span>
          @if(Auth::user()->admin)
          <span id="perfil">Administrador</span>
          @else
          <span id="perfil">Usuáio</span>
          @endif
</div>
<div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p>DASHBOARD</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./cadastros.html">
              <i class="material-icons">person</i>
              <p>CADASTROS</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./acompanhamentos.html">
              <i class="material-icons">content_paste</i>
              <p>ACOMPANHAMENTOS</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./relatorios.html">
              <i class="material-icons">library_books</i>
              <p>RELATÓRIOS</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./usuarios.html">
              <i class="material-icons">bubble_chart</i>
              <p>USUÁRIOS</p>
            </a>
          </li>
          <li class="nav-item" id="logout">
            <a class="nav-link" id="logout-button" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>