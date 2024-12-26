<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Ingresar Mision y Vision</h2>
        <form action="/storeMisVis" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <label for="name">Nombre</label>
            <input name="name" id="name" type="text">

            <label for="image">Imagen</label>
            <input name="image" id="image" type="file" >

            <button type="submit">GUARDAR</button>
        </form>
</body>
</html>
