<?php

if (isset($_GET['nome'])){
  $nome = $_GET['nome'];
  $id_cadastro = $_GET['id'];
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio FSBR</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class='container'>
   <!-- cabeçalho -->
   <div class="card text-center">
      <div class="card-header">
         <h4>Alterar Cadastro</h4>
      </div>
   </div>  
   <!-- lista -->
   <div class='row'>
      <div class='col-lg-12'>
      
      @if (isset($_GET['nome']))
      <form method="post" action="{{route('alteracao')}}">
         @csrf
         <div class="form-group">
           <label>Nome</label>
           <input type="hidden" class="form-control" name="id" placeholder="id" value="<?php if (isset($id_cadastro)) echo $id_cadastro ?>">
           <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php if (isset($nome)) echo $nome ?>">
         </div>
         <div class="form-group" style="padding-top: 10px">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/"><button type="button" class="btn btn-primary">Cancelar</button></a>
        </div>
      </form>
      @endif
      @if (isset($resposta))
      <div class="alert alert-success" role="alert" style="padding-top: 10px">
         {{$resposta}} foi editado(a) com sucesso!.
      </div>
      <a href="/" class="alert-link"><button type="button" class="btn btn-outline-primary"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg>Inicial</button></a>
      @endif
      </div> 
   </div>
</div>
</body>
</html>