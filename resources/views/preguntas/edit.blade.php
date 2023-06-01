@extends('layouts.app-master')
@section('content')



<div class="container">
    <?php
    foreach ($enquestadors as $key => $value) {

        if ($value->id == $id) {
    ?>
            <form action="/preguntas/{{$value->id}}/" method="post">

                @csrf
                <br>
                @method('PUT')
                <fieldset>
                    <legend>Editar una pregunta</legend>
                    <div class="form-group">
                        <label for="nom">Descripcio:</label>
                        <input type="text" class="form-control" name="Descripcio" id="Descripcio" value="{{$value->Descripcio}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </fieldset>
            </form>


    <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Descripcio</th>
                <th scope="col">Localitat</th>
                <th scope="col">Data</th>
                <th scope="col"></th>
            </tr>
        </thead>

        <?php



foreach ($respostas as $key => $value) {

    if ($value->enquestas_id == $id) {
    ?>

        <form action="" method="POST">
            @csrf
            <tr> 
                <th scope="row">{{ $cont }}</th>
                <td>{{$value->descripcio}}</td>
                <td>{{$value->localitat}}</td>
                <td>{{$value->data}}</td>
                <td ><a  class=" btn btn-outline-success" href="{{ route('enquestas.edit', $value->id) }}">Editar</a></td>

            </tr>
                <tbody>

        </form>
        <?php
        echo "<br>";
        echo "<br>";

    }
}




?>
        </tbody>
    </table>
</div>
    ?>

    <form action="{{ route('enquestadors.delete', $value->id) }}" method="POST">
        <!-- Agrega la directiva CSRF -->
        @csrf
        <!-- Agrega el método DELETE -->
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection