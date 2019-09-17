<nav
  class="navbar navbar-expand-md navbar-dark py-4 mb-3 {{(Request::is('/')) ? 'fixed-top' : ''}}"
  id="main-nav"
>
  <div class="container">
    <a href="{{ url('/') }}" class="navbar-brand text-light text-uppercase"
      ><span class="h1">A</span><span class="h2 font-weight-bold">ddresse</span
      ><span class="h1">S</span></a
    >


    <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="{{
        __("Toggle navigation")
      }}">
      <div class="bg-light line1"></div>
      <div class="bg-light line2"></div>
      <div class="bg-light line3"></div>
    </button>
    

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto"></ul>
      <ul class="navbar-nav">
        <li class="nav-item {{(!Request::is('/')) ? 'no-nav' : ''}}">
          <a href="#home-section" class="nav-link m-2">Início</a>
        </li>
        <li class="nav-item {{(Request::is('/')) ? 'no-nav' : ''}}">
          <a href="/" class="nav-link m-2">Página Inicial</a>
        </li>
        <li class="nav-item {{(!Request::is('/')) ? 'no-nav' : ''}}">
          <a href="#explore-head-section" class="nav-link m-2">Explore</a>
        </li>
        <li class="nav-item {{(!Request::is('/')) ? 'no-nav' : ''}}">
          <a href="#create-head-section" class="nav-link m-2">Crie</a>
        </li>
        <li class="nav-item {{(!Request::is('/')) ? 'no-nav' : ''}}">
          <a href="enderecos" class="nav-link m-2">Endereços Cadastrados</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
          <a class="nav-link m-2 menu-item" href="{{ route('login') }}">{{
            __("Login")
          }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link m-2 menu-item" href="{{ route('register') }}">{{
            __("Cadastro")
          }}</a>
        </li>
        @endif @else
        <li class="nav-item dropdown">
          <a
            id="navbarDropdown"
            class="nav-link dropdown-toggle"
            href="#"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
            v-pre
          >
            {{ Auth::user()->nome }} <span class="caret"></span>
          </a>

          <div
            class="dropdown-menu dropdown-menu-right"
            aria-labelledby="navbarDropdown"
          >
            <a class="dropdown-item" href="/dashboard">Painel de Controle</a>
            <a
              class="dropdown-item"
              href="{{ route('logout') }}"
              onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
            >
              {{ __("Sair") }}
            </a>

            <form
              id="logout-form"
              action="{{ route('logout') }}"
              method="POST"
              style="display: none;"
            >
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>