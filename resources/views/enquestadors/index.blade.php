@extends('layouts.app-master')
@section('content')


<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Localitat</th>
                <th scope="col">Password</th>
                <th scope="col"></th>
            </tr>
        </thead>

        <?php
use App\Models\Enquestador;
$cont = 1;
foreach ($enquestadors as $key => $value) {
    $id = $value->id;
    ?>
        <form action="" method="POST">
            @csrf
            <tr>
                <th scope="row">{{ $cont }}</th>
                <td>{{$value->nom}}</td>
                <td>{{$value->localitat}}</td>
                <td>{{$value->password}}</td>
                <td ><a  class=" btn btn-outline-success" href="{{ route('enquestadors.edit', $value->id) }}">Editar</a></td>

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


