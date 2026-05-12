<x-layout titulo="Admin" textoLadoImagem="Administração">

    @foreach($itensPerdidos as $item)
    <a href="" class="card" >
    <div class="col">
      <div class="card_Box" name="{{$item['id']}}">
        <div class="card_Img"> 
          <img src="{{asset('img/'.$item->img)}}" alt="Item Perdido Imagem">
        </div>
        <div class="card_Content">
            <p class="card_Title">{{$item->nome}}</p>
            <div class="card_Local">
              <img src="img/iconLocation.png" alt="Localização" class="iconLocation">
              <p> {{$item->localizacao}}</p>
            </div> 
        </div>
      </div>
      </div>
    </a>
    @endforeach

</x-layout>