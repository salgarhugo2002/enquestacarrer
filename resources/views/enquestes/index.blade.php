@extends('layouts.app-master')
@section('content')

<div class="container">
    <h1 class="display-4 text-center">Enquestas</h1>
  </div>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Descripcio </th>
                <th scope="col">Localitat</th>
                <th scope="col">Data</th>
                <th scope="col"></th>
            </tr>
        </thead>

        <?php

$cont = 1;
foreach ($enquestas as $key => $value) {
    $id = $value->id;
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

        $cont++;
}




?>
        </tbody>
    </table>
</div>
@endsection


