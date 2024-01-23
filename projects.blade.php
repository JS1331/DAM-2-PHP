@extends('master')

@section('header')
    <h1>Projectes</h1>
@endsection()

@section('content')
    <a name="" id="" class="btn btn-primary" href="project/create" role="button">Crear projecte</a>    
    <div
        class="table-responsive"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Responsable</th>
                    <th scope="col">Descripció</th>
                    <th scope="col">Data de creació</th>
                    <th scope="col">Data de Finalització</th>
                    <th scope="col">Gestions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr class="">
                        <td scope="row"><?=$project['nom']?></td>
                        <td><?=$project['responsable']?></td>
                        <td><?=$project['descripcio']?></td>
                        <td><?=$project['data_creacio']?></td>
                        <td><?=$project['data_finalitzacio']?> </td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="project/<?= $project->id ?>/edit" role="button">Actualitzar</a>
                            <a name="" id="" class="btn btn-danger" href="#" role="button">Esborra</a>
                            <a name="Mostrar" id="" class="btn btn-warning" href="project/<?=$project->id?>" role="button">Mostrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection()