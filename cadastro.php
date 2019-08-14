<?php

      if ($_POST){
      $produto = $_POST['produto'];
        echo $produto == "";
        return = false;
        exit;
      $preco = $_POST['preco'];
      $descricao = $_POST['descricao'];
      $file = $_FILES['file'];
      }
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
    <title>Cadastro de produtos</title>
</head>
<body>
<div class="container col-md-5">
<form class="mt-5" method="POST" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputProduto">Produto</label>
          <input type="text" name="produto" class="form-control" id="inputProduto" placeholder="Produto">
        </div>
        <div class="form-group col-md-6">
          <label for="inputDescricao">Preço</label>
          <input type="descricao" name="preco" class="form-control" id="inputDescricao" placeholder="Preço do Produto">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Descrição</label>
        <textarea type="descricao" name="descricao" class="form-control" id="inputDescricao" placeholder="Descrição"></textarea>
      </div>
          <label for="exampleFormControlFile1" class="btn btn-success form-group col-md-12" >Selecionar Arquivo</label>
          <input type="file" class="form-control-file d-none" id="exampleFormControlFile1">
          <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
        </div>
       
      </div>
      
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>