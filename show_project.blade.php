@extends('master')

@section('header')
<h2>Detalls projecte</h2>
@endsection

@section('content')
<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            
        </thead>
        <tbody>
            <tr class="">
                <td scope="row"><?=$project['nom']?></td>
            </tr>
            <tr>
                <td><?=$project['responsable']?></td>
            </tr>
            <tr>
                <td><?=$project['descripcio']?></td>
            </tr>
            <tr>
                <td><?=$project['data_creacio']?></td>
            </tr>
            <tr>
                <td><?=$project['data_finalitzacio']?> </td>
            </tr>
            <tr>
                <td><a
                    name=""
                    id=""
                    class="btn btn-primary"
                    href="/project/<?=$project->id?>/task"
                    role="button"
                    >Mostrar tasques</a
                ></td>
            </tr>
        </tbody>
    </table>
</div>

@endsection