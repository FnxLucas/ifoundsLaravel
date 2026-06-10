<x-layout titulo="Admin" textoLadoImagem="Administração" linkPagina="/admin">

@if(session('sucesso'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('sucesso') }}
       <a type="button" class="close" data-dismiss="alert" >
            <p aria-hidden="true">&times;</p>
       </a>
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Localização</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($itensPerdidos as $item)
        <tr>
            <td>{{$item->nome}}</td>
            <td>{{$item->descricao}}</td>
            <td>{{$item->localizacao}}</td>
            <td>
                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal{{$item->id}}">Editar</button>

                <form action="/admin/deletar" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja deletar?')">
                        Deletar
                    </button>
                </form>
            </td>
        </tr>

        <x-modalEditar :item="$item"/>
        @endforeach
    </tbody>
  </table>

  <h2 class="mt-5 mb-3">Usuários do Sistema</h2>
  <table class="table">
      <thead>
          <tr>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Admin</th>
              <th>Ações</th>
          </tr>
      </thead>
      <tbody>
          @foreach($usuarios as $user)
          <tr>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>
                @if($user->is_admin)
                    <span class="badge bg-success">Sim</span>
                @else
                    <span class="badge bg-secondary">Não</span>
                @endif
              </td>
              <td>
                  @if(!$user->is_admin)
                  <form action="/admin/tornar-admin" method="POST" style="display:inline;">
                      @csrf
                      <input type="hidden" name="user_id" value="{{$user->id}}">
                      <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Promover este usuário a admin?')">
                          Tornar Admin
                      </button>
                  </form>
                  @else
                  <span class="text-muted">-</span>
                  @endif
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>

  <x-slot:scripts>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  </x-slot:scripts>

</x-layout>