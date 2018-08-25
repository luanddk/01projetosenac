<?php require_once(__DIR__ . "/../classes/modelo/Sexo.class.php"); ?>
<?php require_once(__DIR__ . "/../classes/dao/SexoDao.class.php"); ?>
<?php
$dao = new SexoDAO();
$sexos = $dao->findAll();
if (isset($POST['salvar']) && $_POST['salvar'] == 'salvar'){
    $sexo = new Sexo();
    $sexo->setNome($_POST['sexo']);
    $sexo->setSigla($_POST['sigla']);
    $dao->save($sexo);
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sexos</title>
    <link rel="stylesheet" href="/../assets/css/bootstrap.css"
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6"><!--form -->
                <fieldset>
                    <legend>Dados do Sexo</legend>
                    <form action="index.php" method="post">
                        <div class="form-group">
                            <label for="sexo">Sexo</label>
                            <input type="text" class="form-controll" name="sexo" id="sexo" maxlength="12" required>
                        </div>
                </fieldset>
            </div>
            <div class="col-6"><!--table -->
                <fieldset>
                    <legend>Lista de Sexos</legend>
                    <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>sexo</th>
                            <th>sigla</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($sexos as $sexo):?>
                            <tr>
                                <td><?=$sexo->getId();?></td>
                                <td><?=$sexo->getNome();?></td>
                                <td><?=$sexo->getSigla();?></td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-success">editar</button>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm btn-danger">remover</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                  </table>
                </fieldset>
            </div>
        </div>
    </div>
</body>
</html>