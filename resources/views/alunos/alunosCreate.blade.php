<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Aluno</title>
</head>
<body>

    <form action="/alunos" method="post">
        @csrf
        <label for="">Nome</label>
        <input type="text" name="nome">
        <br>
        <label for="">cpf</label>
        <input type="text" name="cpf">
        <br>
        <label for="">sexo</label>
        <select name="sexo">
            <option value="MASCULINO">MASCULINO</option>
            <option value="FEMININO">FEMININO</option>
        </select>
        <button>Enviar</button>
    </form>
</body>
</html>
