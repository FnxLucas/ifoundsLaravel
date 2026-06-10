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
              <p class="textoLocalizacao"> {{$item->localizacao}}</p>
        </div>  

        <div class="mt-3 text-muted" style="font-size: 14px; background: #f8f9fa; padding: 10px; border-radius: 5px;">
            <strong>Encontrado por:</strong> {{ $item->quemEncontrou?->name ?? 'Usuário Desconhecido' }}
        </div>

        @if($item->usuario_reivindicante_id)
            <div class="alert alert-info mt-3" style="font-size: 14px;">
                <strong>Reivindicado por:</strong> {{ $item->quemReivindicou?->name ?? 'Alguém' }}
            </div>
        @else
            <form action="/item/{{$item->id}}/reivindicar" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="ap_Btn_Found w-100" onclick="return confirm('Tem certeza de que este item pertence a você?')">Este item é meu!</button>
            </form>
        @endif

        @if(session('sucesso'))
            <div class="alert alert-success mt-3">{{ session('sucesso') }}</div>
        @endif
        @if(session('erro'))
            <div class="alert alert-danger mt-3">{{ session('erro') }}</div>
        @endif
      </div>
    </div>

</x-layout>