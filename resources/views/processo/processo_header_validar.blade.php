<div class="page-header card">
    <div class="row">
        <div class="col-sm">
            <a class="btn btn-outline-secondary" href="{{ route('processo.processo_list') }}">
                <i class="fas fa-check-circle"> Validar Processos</i>
            </a>
            <a class="btn btn-outline-secondary" href="{{ route('processo.processo_list') }}">
                <i class="fas fa-list"> Inserir parecer</i>
            </a>
            <a class="btn btn-outline-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible" data-bs-content="And here's some amazing content. It's very engaging. Right?" href="{{ route('processo.processo_list') }}">
                <i class="fas fa-boxes"> Distribuir Processos</i>
            </a>
        </div>
    </div>
</div>
