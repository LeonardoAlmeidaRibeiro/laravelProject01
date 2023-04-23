    <!-- Modal Structure -->
    <div id="delete-{{ $produto->id }}" class="modal">
        <div class="modal-content">
            <h4><i class="material-icons">delete</i> Tem Certeza?</h4>
            <div class="row">
                <p>Tem certeza que deseja excluir o produto {{ $produto->nome }} ?</p>

            </div>


            <form action="{{ route('admin.produto.delete', $produto->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="row">
                    <div class="col s10">
                        <button type="submit"  class="waves-effect waves-green btn red right">Excluir</button>&nbsp;&nbsp;
                    </div>
                    <div class="col s12">
                        <a href="#!" class="modal-close waves-effect waves-green btn blue right">Cancelar</a>
                    </div>
                </div>
                <br>

            </form>

        </div>

    </div>
