<x-layout titulo="IFounds" :textoLadoImagem="'Olá, ' . $usuario->name . '! Esses são os itens que você publicou:'" linkPagina="/itensperdidos">

    @foreach($itensUsuario as $item)
        <a href="/item/{{$item->id}}" class="card" name="{{$item['id']}}">
        <div class="col">
        <div class="card_Box" name="{{$item['id']}}">
            <div class="card_Img"> 
            <img src="{{asset('storage/'.$item->img)}}" alt="Item Perdido Imagem">
        </div>
            <div class="card_Content">
            <p class="card_Title">{{$item->nome}}</p>
            <div class="card_Local">
              <img src="{{ asset('img/iconLocation.png') }}" alt="Localização" class="iconLocation">
              <p> {{$item->localizacao}}</p>
            </div> 
            </div>
        </div>
        </div>
        </a>
    @endforeach

</x-layout>