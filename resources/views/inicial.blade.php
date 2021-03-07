<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio FSBR</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
     .btn-outline-primary{
      float: right;
     }
     .btn-outline-danger{
      float: right;
     }
    </style>
</head>
<body>
<div class='container'>
   <!-- cabeçalho -->
   
      <div class="card text-center">
        <div class="card-header">
           <h4>Lista do Cadastros</h4>
        </div>
        <div class="card-body">
          <a href="/novo" class="btn btn-primary">Adicionar Cadastro</a>
        </div>
        
      </div>   
      
   <!-- lista -->
   <div class='row'>
      <div class='col-lg-12'>
        <div class="list-group">
        @foreach($resultado['data'] as $item)
        <li class="list-group-item">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">{{$item->nome_cadastro}}</h5>
              <i class="fas fa-trash-alt"></i>
            </div>
            <p class="mb-1">Número: {{$item->codigo_cadastro}}</p>
            <small class="text-muted">Situação: {{$item->situacao}}</small>
            

            <a href="/exclusao?id={{$item->codigo_cadastro}}&nome={{$item->nome_cadastro}}">
            <button type="button" class="btn btn-outline-primary"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg>Excluir</button></a>

            <a href="/alteracao?id={{$item->codigo_cadastro}}&nome={{$item->nome_cadastro}}">
            <button type="button" class="btn btn-outline-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg>Editar</button></a>
            </li>
        @endforeach  
        </div>
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            @php
                $pag=0;
            @endphp
            @foreach($resultado['data'] as $item)
              @php
                $pag++;
              @endphp
            <li class="page-item"><a class="page-link" href="?page={{$pag}}">{{$pag}}</a></li>
            @endforeach
            
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div> 
   </div>


</div>
</body>
</html>