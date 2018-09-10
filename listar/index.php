<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="icon" href="../assets/img/lista.png">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"><!-- nav bar -->
<a class="navbar-brand" href="../index.php">
    <img src="../assets/img/home.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Inicio
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="../cadastro/index.php">Cadastrar</a>
      <a class="nav-item nav-link active" href="#">Listar</a>
    </div>
  </div>
</nav>
<div class="container">
<div class="row" style="margin-top: 50px;">
<fieldset>
  <legend>Lista de Clientes</legend>
    <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Sobrenome</th>
        <th scope="col">Data de Nascimento</th>
        <th scope="col">Sexo</th>
        <th scope="col">/</th>
        <th scope="col">Bairro</th>
        <th scope="col">Cidade</th>
        <th scope="col">Estado</th>
      </tr>
    </thead>
  </table>
</fieldset>
</div>
</div>
</body>
</html>