@extends('master')

@section('header')
    <h1>Tasks</h1>
@endsection

@section('content')
    <a name="" id="" class="btn btn-primary" href="task/create" role="button">Crear tasca</a>
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
                    <th scope="col">Data d'inici</th>
                    <th scope="col">Data de finalització</th>
                    <th scope="col">Gestions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr class="">
                    <td scope="row"><?=$task['nom']?></td>
                    <td><?=$task['responsable']?></td>
                    <td><?=$task['descripcio']?></td>
                    <td><?=$task['data_creacio']?></td>
                    <td><?=$task['data_finalitzacio']?> </td>
                    <td>
                        <a name="" id="" class="btn btn-primary" href="#" role="button">Actualitzar</a>
                        <a name="" id="" class="btn btn-danger" href="#" role="button">Esborra</a>
                        <a name="Mostrar" id="" class="btn btn-warning" href="#" role="button">Mostrar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    
@endsection