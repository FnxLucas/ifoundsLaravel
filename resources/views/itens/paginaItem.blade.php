<x-layout titulo="{{$item->nome}}" textoLadoImagem="Detalhes do item" linkPagina="/itensperdidos">

    <div class="ap_Card">
      <div class="ap_Col_Left">
        <div class="ap_Card_Image">
          <img src="{{ asset('storage/'.$item->img) }}" alt="Foto do item perdido"/>
        </div>
        <p class="ap_Description">
          {{$item->descricao}}
        </p>
      </div>
 
      <div class="ap_Col_Right">
        <h1 class="ap_Item_Name">{{$item->nome}}</h1>
        <button class="ap_Btn_Found">Esse item é meu!</button>
      </div>
 
    </div>
 
  </div>

</x-layout>