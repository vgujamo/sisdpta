<form class="from-horizontal" method="get" id="processo_list" action="{{ route('processo.search')}}">
    @csrf
    <div class="row">
        <div class="col-sm input-group form">
            <input class="form-control" placeholder="Insira o número de processo a pesquisar" aria-label="" id="search" type="search" name="search" value="{{ request()->query('search')}}" />                          
            <button type="submit" class="btn btn-primary" autofocus="">
                <i class="fas fa-search"></i> Pesquisar
            </button>
        </div>
    </div>
</form>