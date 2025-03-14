<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </head>
  <body class="p-5">
    <h1>{{ $usuario->nome }}</h1>
    <p>Código: {{ $usuario->id }}</p>
    <p>Nome: {{ $usuario->nome }}</p>
    <p>E-mail: {{ $usuario->email }}</p>
    <p>Idade: {{ $usuario->idade }}</p>
    <p>Telefone: {{ $usuario->telefone }}</p>
    <p><a href="/usuarios" class="btn btn-success">Voltar</a></p>
  </body>
</html>