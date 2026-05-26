<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
      aria-labelledby="staticBackdropLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="staticBackdropLabel">
          Cadastro de item
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <form action="{{ $linkPagina }}/novo" method="post" enctype="multipart/form-data">
          
          @csrf 

          <div class="mb-3">
            <label for="itemNome" class="form-label">Nome do item</label>
            <input type="text" name="nome" class="form-control" id="itemNome" required />
          </div>
          <div class="mb-3">
            <label for="itemLocal" class="form-label">Aonde foi encontrado</label>
            <input type="text" name="localizacao" class="form-control" id="itemLocal" required />
          </div>
          <div class="mb-3">
            <label for="itemDescricao" class="form-label">Descrição</label>
            <textarea class="form-control" name="descricao" id="itemDescricao" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="itemImagem" class="form-label">Enviar Imagem</label>
            <input type="file" accept="image/*" name="imagem" class="form-control" id="itemImagem" placeholder="Escolha a imagem do Item" required/>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>

        </form>
      </div>
    </div>