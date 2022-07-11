<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar</title>
</head>
<body>
    <h3>Cadastrar Post</h3>

    <form action=" " method="post">
        @csrf
        <label for="title">Titulo:</label>
        <input type="text" name="title" value=""><br>

        <label for="description">Descrição:</label>
        <input type="text" name="description" value=""><br>
        <button type="submit" name="submit">Enviar</button>
    </form>

</body>
</html>
