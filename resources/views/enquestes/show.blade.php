<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <p>
    <?php
foreach ($enquestadors as $key => $value) {

    if($value->id == $id)
    {
        echo "Id: $value->id <br>";
        echo "Nom:  $value->nom  <br>";
        echo "Localitat: $value->localitat  <br>";
        echo "Password $value->password  <br>";
        echo "<br>";
    }
        
    }
?>


</body>
</html>
