    <!-- Modal Structure -->
    <div id="create" class="modal">
        <div class="modal-content">
            <h4><i class="material-icons">card_giftcard</i> Novo produto</h4>
            <form class="col s12" action="{{ route('admin.produto.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
                    <div class="input-field col s6">
                        <input name="nome" placeholder="Nome do Produto" id="nome" type="text"
                            class="validate">
                        <label for="nome">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="preco" id="preco" type="number" class="validate">
                        <label for="preco">Preço:</label>
                    </div>

                    <div class="input-field col s12">
                        <input name="descricao" id="descricao" type="text" class="validate">
                        <label for="descricao">Descrição:</label>
                    </div>

                    <div class="input-field col s12">
                        <select name="id_categoria">
                            <option value="" disabled selected>Selecione</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                            @endforeach

                        </select>
                        <label>Categoria</label>
                    </div>

                    <div class="file-field input-field col s12">
                        <div class="btn">
                            <span>Imagem</span>
                            <input name="imagem" type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <button type="submit" class="waves-effect waves-green btn blue right">Cadastrar</button><br>
        </div>

        </form>
    </div>
