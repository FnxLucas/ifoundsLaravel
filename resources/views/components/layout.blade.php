@include('components.offcanvas')

<!doctype html>
<html lang="pt-br">
<x-headLayout titulo="{{$titulo}}">
</x-headLayout>
<body>
  <header class="d-flex justify-content-between p-2 align-items-center bg-success">
    <a class="titulo" href="{{ $linkPagina }}"> <img class="w-25 p-2" src="{{ asset('img/Ifounds_logo.png') }}" alt="Logo Ifounds"> <p id="titulo">- {{$textoLadoImagem}}</p>  </a>
    <div class="d-flex justify-content-between p-2 m-2">

    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
      aria-controls="staticBackdrop"> Cadastrar</button>
    <a type="button" class="btn btn-danger p-2 m-2" href="/" role="button">Loggout</a>
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