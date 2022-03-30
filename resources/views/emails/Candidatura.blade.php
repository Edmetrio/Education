<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Nova Candidatura</title>
</head>

<body>
    <div class="container text-center col-md-6 ml-10">
        <div class="btn btn-success col-md-12 ">
            <h1 class="mt-10"><small>FIRST EDUCATION</small></h1>
            <h2 class="">Nova Candidatura</h2>
        </div>
        <div class="col-md-12 pt-10">
            O formulário <a href="http://localhost/education/public/resumo">Candidatos</a> está preenchido
        </div>
        <p><strong> Nome: </strong>{{$detail['nome']}}</p>
        <p><strong> E-mail: </strong>{{$detail['email']}}</p>
        <p><strong> Número do Passaporte: </strong>{{$detail['passaporte']}}</p>
        <a href="http://localhost/education/public/resumo" class="btn btn-primary btn-lg btn-block">Lista dos Candidatos</a>
        <p>Criado por <a href="https://firsteducation.edu.mz/">FirstTech</a></p>
    </div>


</body>

</html>