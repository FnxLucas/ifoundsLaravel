<x-layout titulo="IFounds" textoLadoImagem="O que queremos achar">

    @foreach($itensPerdidos as $item)    
    <div class="col">
      <div class="card" name = " {{$item['id']}} ">
        <div class="card-body">
          <h5 class="card-title"> {{$item['titulo']}}</h5>
          <p class="card-text">{{$item['descricao']}}</p>
          <p class="card-text">{{$item['localizacao']}}</p>
          </div>
      </div>
    </div>
    @endforeach

</x-layout>