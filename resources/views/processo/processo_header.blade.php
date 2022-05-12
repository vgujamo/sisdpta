<div class="page-header card text-center">
    <div class="row">
        <div class="col-sm">
            <a class="btn btn-outline-info" href="{{ route('processo.processo_create') }}">
                <i class="fas fa-plus-circle"> Novo Processo</i>
            </a>
           
            <a class="btn btn-outline-success" href="{{ route('processo.processo_list') }}">
                <i class="fas fa-search"> Pesquisar processo</i>
            </a>
            
             <a class="btn btn-outline-warning" href="{{ route('processo.processo_list') }}">
                <i class="fas fa-search-minus"> Pesquisar protocolo</i>
            </a>
            
             <a class="btn btn-outline-secondary" href="{{ route('processo.processo_list') }}">
                <i class="fas fa-check-circle"> Validar Processos</i>
            </a>
            
             <a class="btn btn-outline-danger" href="{{ route('processo.processo_list') }}">
                <i class="fas fa-boxes"> Distribuir Processos</i>
            </a>
        </div>
    </div>
</div>
