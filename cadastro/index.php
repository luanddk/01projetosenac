<?php   
require_once(__DIR__ . "/../classes/modelo/Sexo.class.php"); 
require_once(__DIR__ . "/../classes/dao/SexoDAO.class.php"); 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sexos</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/all.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">  <!--MENU-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="http://localhost:8080/projetosenac01">SENAC</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item inactive">
        <a class="nav-link" href="http://localhost:8080/projetosenac01">Cadastro <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item inactive">
        <a class="nav-link" href="http://localhost:8080/projetosenac01">Listagem</a>
      </li>
      <li class="nav-item inactive">
        <a class="nav-link" href="http://localhost:8080/projetosenac01">Editar</a>
      </li>
    </ul>
  </div>
</nav> <!-- FIM MENU-->
    <div class="container">
        <div class="row" style="margin-top: 50px;">
            <div class="col-6"><!-- form -->
                <fieldset>
                    <legend>Cadastro Cliente</legend>
                    <form action="index.php" method="post">
                        <input type="hidden" name="id" value="<?=$sexo->getId();?>">
                        <div class="form-group">
                            <label for="sexo">Sexo</label>
                            <input type="text" class="form-control" name="sexo" id="sexo" maxlength="12" required value="<?=$sexo->getNome();?>">
                        </div>
                        <div class="form-group">
                            <label for="sigla">Sigla</label>
                            <input type="text" class="form-control" name="sigla" id="sigla" maxlength="1" required value="<?=$sexo->getSigla();?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="salvar" value="salvar">Salvar</button>
                        </div>
                    </form>
                </fieldset>
            </div>
</body>
</html>