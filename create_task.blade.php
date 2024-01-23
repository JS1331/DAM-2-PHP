@extends('master')

@section('content')
<form action="/project" method="POST">
    @csrf
    <table>
        <tr>
            <td><label>Nom: </label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="projectName" required></th>
        </tr>
        <tr>
            <td><label>Descripcio: </label>
                <input type="text" class="form-control" name="description" id="description" aria-describedby="projectDescription" required></th>
        </tr>
        <tr>
            <td><label>Responsable: </label>
                <input type="text" class="form-control" name="director" id="director" aria-describedby="projectDirector" required></th>
        </tr>
        <tr>
            <td><label>Data d'inici: </label>
                <input type="date" class="form-control" name="start_date" id="start_date" aria-describedby="projectStartDate" required></th>
        </tr>
        <tr>
            <td><label>Data de finalització: </label>
                <input type="date" class="form-control" name="end_date" id="end_date" aria-describedby="projectEndDate" required></th>
        </tr>
    </table>
    <input type="submit" value="Enviar">
</form>
@endsection