@include('components.offcanvas')

<!doctype html>
<html lang="pt-br">
<x-headLayout titulo="{{$titulo}}">
</x-headLayout>
<body>
  <header class="d-flex justify-content-between p-2 align-items-center bg-success">
    <a class="titulo" href="{{ $linkPagina }}"> <img class="w-25 p-2" src="{{ asset('img/Ifounds_logo.png') }}" alt="Logo Ifounds"> <p id="titulo">- {{$textoLadoImagem}}</p>  </a>
    <div class="dropdown p-2 m-2">
      <button class="btn btn-outline-light border-0" type="button" id="hamburgerMenu" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg>
      </button>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="hamburgerMenu">
   <li>
        <a class="dropdown-item" href="/perfil">Perfil</a>
    </li>
    <li><hr class="dropdown-divider"></li>
    <li>
        <button class="dropdown-item" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
            Cadastrar
        </button>
    </li>
    
    @if(Auth::user()->is_admin)
        <li><hr class="dropdown-divider"></li>
        <li>
            <a class="dropdown-item" href="/admin">Administração</a>
        </li>
    @endif
    
    <li><hr class="dropdown-divider"></li>
    <li>
        <a class="dropdown-item text-danger" href="/logout">Logout</a>
    </li>
</ul>
    </div>
  </header>

  <main class="row row-cols-1 row-cols-md-2 g-4 p-2">
     {{$slot}}
  </main>

  {{$scripts ?? ''}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>
</html>