<form action="" method="get" >
    @csrf
    @method('DELETE')
    <div class="modal fade" id="deleteModal" tabindex="" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title r" id="deleteModalLabel">
                        <i class="fas fa-trash">Apagar dados</i>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center bg-warning">
                    Pretende realmente apagar o registo selecionado?
                </div>
                <div class="modal-body text-center">
                    <b>{{ $juiz->pessoa->nome }} {{ $juiz->pessoa->apelido }}?</b>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Apagar</button>
                </div>
            </div>
        </div>
    </div>
</form>