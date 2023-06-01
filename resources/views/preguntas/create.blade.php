@extends('layouts.app-master')

@section('content')
<div class="container" style="margin-top: 20px;">
    <form action="/preguntas" method="post">
        @csrf
        <fieldset>
            <legend>Crea les teves preguntas</legend>
            <fieldset>


                <div class="form-group">
                    <label for="nom">Numero pregunta:</label>
                    <input type="number" class="form-control" name="numero" id="numero">
                </div>
                <div class="form-group">
                    <label for="localitat">Enunciat:</label>
                    <input type="text" class="form-control" name="enunciat" id="enunciat">
                </div>
                <div class="form-group">
                    <label for="password">Enquesta:</label>
                    <select class="form-control" name="enquesta">
                        <?php
    
                        

                        // Generar las opciones del select dinámicamente
                        foreach ($enquesta as $key => $value) {
                           
                                echo "<option value='$value->id'>$value->descripcio</option>";
                            
                           
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </fieldset>
    </form>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection