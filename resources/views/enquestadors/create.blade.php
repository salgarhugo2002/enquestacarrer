<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
</style>
</head>
<body>
    <form action="/enquestadors" method="post">
    @csrf
    <fieldset>
        <legend>Dades Enquestadors </legend>
        Nom:
        <input type="text" name="nom" id="nom">
        <br>
        Localitat:
        <input type="text" name="localitat" id="localitat">
        <br>
        Password:
        <input type="text" name="password" id="password">
        <br>
        <input type="submit" name="submit">
        
</fieldset>
    </form>
    
</body>
</html>