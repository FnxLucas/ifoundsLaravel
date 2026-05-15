<x-layout titulo="{{$item->nome}}" textoLadoImagem="Detalhes do item">
    
    <div class="ap_Card">
      <div class="ap_Col_Left">
        <div class="ap_Card_Image">
          <img src="{{asset('img/'.$item->img)}}" alt="Item Perdido Imagem"/>
        </div>
        <p class="ap_Description">
          {{$item->descricao}}
        </p>
        <h1 class="ap_Item_Name">{{$item->nome}}</h1>
        <div class="card_Local">
              <img src="img/iconLocation.png" alt="Localização" class="iconLocation">
              <p> {{$item->localizacao}}</p>
        </div>  
        <a type="button" class="ap_Btn_Found" href="">✋ Eu achei este item!</a>
      </div>
    </div>

</x-layout>