
<div class="col-md col-xl">
    <div class="card project-task">
        <div class="card-header">
            <div class="card-header-left ">
                <h5>Total de Processos inseridos Por Seccao</h5>
            </div>
        </div>
        <div class="card-block p-b-10">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Seccao</th>
                            <th>Processos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="task-contain">
                                    <h6 class="bg-c-blue d-inline-block text-center">P</h6>
                                    <p class="d-inline-block m-l-20">Plenario</p>
                                </div>
                            </td>
                            <td>
                                <p class="d-inline-block m-r-20"><?= $procep ?></p>
                                <div class="progress d-inline-block">
                                    <div class="progress-bar bg-c-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="task-contain">
                                    <h6 class="bg-c-pink d-inline-block text-center">1ª</h6>
                                    <p class="d-inline-block m-l-20">1ª Seccao</p>
                                </div>
                            </td>
                            <td>
                                <p class="d-inline-block m-r-20"><?= $proce1 ?></p>
                                <div class="progress d-inline-block">
                                    <div class="progress-bar bg-c-pink" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="task-contain">
                                    <h6 class="bg-c-yellow d-inline-block text-center">2ª</h6>
                                    <p class="d-inline-block m-l-20">2ª Seccao</p>
                                </div>
                            </td>
                            <td>
                                <p class="d-inline-block m-r-20"><?= $proce2 ?></p>
                                <div class="progress d-inline-block">
                                    <div class="progress-bar bg-c-yellow" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="task-contain">
                                    <h6 class="bg-c-green d-inline-block text-center">3ª</h6>
                                    <p class="d-inline-block m-l-20">3ª Seccao</p>
                                </div>
                            </td>
                            <td>
                                <p class="d-inline-block m-r-20"><?= $proce3 ?></p>
                                <div class="progress d-inline-block">
                                    <div class="progress-bar bg-c-green" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>