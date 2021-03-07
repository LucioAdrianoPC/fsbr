<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio FSBR</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
</head>
<body>
<div class='container'>
   <!-- cabeçalho -->
   <div class="card text-center">
      <div class="card-header">
         <h4>Adicionando Cadastros</h4>
      </div>
   </div>   
   <!-- Form -->
   <div class='row'>
      <div class='col-lg-12'>
      <form method="post" action="{{route('inclusao')}}">
         @csrf
         <div class="form-group">
           <label>Nome</label>
           <input type="text" class="form-control" name="nome" placeholder="Nome">
         </div>
         <div class="form-group" style="padding-top: 10px">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/"><button type="button" class="btn btn-primary">Cancelar</button></a>
        </div>
      </form>
      </div> 
   </div>


</div>
</body>
</html>