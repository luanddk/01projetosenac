<!DOCTYPE html>
<?php 




?>
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
<form><!--Incio do Formulario-->
    <div class="form-group">
      <label for="text">Nome:</label>
      <input type="text" class="form-control" id="nome"  placeholder="Digite  seu nome" value="">
    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Sobrenome:</label>
      <input type="text" class="form-control" id="sobrenome" placeholder="Digite seu Sobrenome" value="">
      </div>
      <div class="form-group">
          <label for="dt_nasc">Data de Nascimento:</label>
          <input type="date" id="dt_nasc" name="dt_nasc" class="form-control" value=""/>
        </div>
      <div class="form-group">
        <label for="cpf">CPF:</label>
        <input type="text" class="form-control" name="cpf" id="cpf" valeu="">
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
    <label for="estado">Estado</label>
      <select id="estado" class="form-control">
        <option selected disable >Selecione</option>
      </select>
      <div class="form-row">
      <div class="form-group col-md-12">
      <label for="cidade">Cidade</label>
      <select id="cidade" class="form-control">
        <option selected disable >Selecione</option>
      </select>
      <label for="inputState">Bairro:</label>
      <select id="bairro" class="form-control">
        <option selected disable>Selecione</option>
      </select>
    </div>
    <div class="form-group col-md-12">
    
      <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email:</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group">
    <button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i> Cadastrar </button><!--Butões-->
    <button type="button" class="btn btn-danger"> <i class="fas fa-trash"></i> Limpar </button>
</div>
</form><!--Fim do Formulario-->
</div> <!--Fim do container -->
</form>   
</body>
</script>
</html>