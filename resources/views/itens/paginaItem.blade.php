<x-layout titulo="{{$item->nome}}" textoLadoImagem="Detalhes do item" linkPagina="/itensperdidos">
    
    <div class="ap_Card">
      <div class="ap_Col_Left">
        <div class="ap_Card_Image">
          <img src="{{ asset('storage/'.$item->img) }}" alt="Item Perdido Imagem"/>
        </div>
        <h1 class="ap_Item_Name">{{$item->nome}}</h1>
        <p class="ap_Description">
          {{$item->descricao}}
        </p>
        <div class="card_Local">
              <img src="{{asset('img/iconLocation.png')}}" alt="Localização" class="iconLocation">
              <p> {{$item->localizacao}}</p>
        </div>  
        <a type="button" class="ap_Btn_Found" href="">Eu achei este item!</a>
      </div>
    </div>

</x-layout>