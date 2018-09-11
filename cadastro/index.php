<?php 
require_once(__DIR__ ."/../classes/modelo/Cliente.class.php");
require_once(__DIR__ ."/../classes/modelo/Sexo.class.php");
require_once(__DIR__ ."/../classes/modelo/Bairro.class.php");
require_once(__DIR__ ."/../classes/modelo/Cidade.class.php");
require_once(__DIR__ ."/../classes/modelo/UnidadeFederativa.class.php");
require_once(__DIR__ ."/../classes/dao/ClienteDAO.class.php");
require_once(__DIR__ ."/../classes/dao/SexoDAO.class.php");
require_once(__DIR__ ."/../classes/dao/BairroDAO.class.php");
require_once(__DIR__ ."/../classes/dao/CidadeDAO.class.php");
require_once(__DIR__ ."/../classes/dao/UnidadeFederativaDAO.class.php");

$cliente = new Cliente();
$clientedao = new ClienteDAO();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="icon" href="../assets/img/usuario.png">
    <link rel="stylesheet" href="../assets/css/all.css">
    <title>Cadastro de Clientes</title>
</head>
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
      <a class="nav-item nav-link active" href="#">Cadastrar</a>
      <a class="nav-item nav-link active" href="../listar/index.php">Listar</a>
    </div>
  </div>
</nav>
<div class="container"> <!--Início do container-->
<div class="row" style="margin-top: 50px;">
<form method="post"><!--Incio do Formulario-->
<input type="hidden" name="id" value="<?=$cliente->getId();?>">
    <div class="form-group">
      <label for="text">Nome:</label>
      <input type="text" class="form-control" name="nome" id="nome"  placeholder="Digite  seu nome" value="<?=$cliente->getNome();?>">
    </div>
      <div class="form-group">
      <label for="text">Sobrenome:</label>
      <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Digite seu Sobrenome" value="<?=$cliente->getSobrenome();?>">
      </div>
      <div class="form-group">
          <label for="nascimento">Data de Nascimento:</label>
          <input type="date" id="nascimento" name="nascimento" class="form-control" value="<?=$cliente->getData();?>"/>
        </div>
      <div class="form-group">
        <label for="cpf">CPF:</label>
        <input type="text" class="form-control" name="cpf" id="cpf" value="<?=$cliente->getCpf();?>">
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sexo1" value="">
         <label class="form-check-label" for="inlineRadio1">Masculino</label>
      </div>
      <div class="form-check form-check-inline">
         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sexo2" value="">
        <label class="form-check-label" for="inlineRadio2">Feminino</label>
      </div>
      <div class="row">
    <div class="col">
      <label for="cep">CEP:</label>
      <input type="text" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label for="logradouro">Logradouro:</label>
      <input type="text" class="form-control" placeholder="">
    </div>
    <div class="form-group">
    				<label for="observacao">Obeservações:</label>
    				<textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
            <br />
    </div>
</div>
  <div class="form-group col-md-6">
  <div class="form-row">
    <label for="estado">Estado</label>
    <select class="form-control" name="uf" id="uf" onchange="show_cidades(this.value);">
      <option value="0" selected>Selecione</option>
        <?php foreach($ufs as $uf): ?>
          <option value="<?=$uf->getId();?>">
            <?=$uf->getNome();?>
          </option>
        <?php endforeach; ?>
      </select>
      </div>
      <div class="form-row">
      <div class="form-group col-md-12">
      <label for="cidade">Cidade</label>
      <select class="form-control" name="cidade" id="cidade" onchange="show_bairros(this.value);">
        <option value="0" selected disabled>Selecione</option>
      </select>
      <label for="inputState">Bairro</label>
      <select class="form-control" name="bairro" id="bairro">
        <option value="0" selected disabled>Selecione</option>
      </select>
    </div>
    <div class="form-group col-md-12">
    
      <div class="form-row">
    <div class="form-group col-md-12">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary" name="salvar" value="salvar">
    <i class="fas fa-user-plus"></i> Cadastrar 
    </button><!--Butões-->
    <button type="submit" class="btn btn-danger" name="limpar" value="limpar"> 
    <i class="fas fa-trash"></i> Limpar 
    </button>
</div>
</form><!--Fim do Formulario-->
</div> <!--Fim do container --> 
</body>
<script src="assets/js/ajax_enderecos.js"></script>
</html>