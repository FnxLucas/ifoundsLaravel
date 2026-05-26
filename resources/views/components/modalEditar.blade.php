<div class="modal fade" id="editModal{{$item->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Item</h5>
            </div>

            <form action="/admin/editar" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$item->id}}">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" value="{{$item->nome}}">
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <input type="text" name="descricao" class="form-control" value="{{$item->descricao}}">
                    </div>
                    <div class="form-group">
                        <label>Localização</label>
                        <input type="text" name="localizacao" class="form-control" value="{{$item->localizacao}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>

        </div>
    </div>
</div>