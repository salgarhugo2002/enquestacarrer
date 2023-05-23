<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    foreach ($enquestadors as $key => $value) {

        if($value->id == $id)
        {

        
  ?>
  
    <form action="/enquestadors/{{$value->id}}/" method="post">
    @csrf
    @method('PUT')
        <fieldset>
            <legend>Editar</legend>
        Nom:
        <input type="text" name="nom" id="nom" value='{{$value->nom}}' >
        <br>
        Localitat:
        <input type="text" name="localitat" id="local" value='{{$value->localitat}}'>
        <br>
        Password:
        <input type="text" name="password" id="pass" value='{{$value->password}}'>
        <br>

        <input type="submit" name="submit">
     

        </fieldset>
    </form>
    <form action="{{ route('enquestadors.delete', $value->id) }}" method="POST">
               @csrf
               @method('DELETE')
               <button type="submit">Eliminar</button>
            </form>
    <?php
}

    }
    ?>
  
</body>
</html>