<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <style>
        label, input { display: block; }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Pessoa</legend>

        <form method="post" action="/mvc-php/App/index.php/pessoa/form/save">

            <input type="hidden" name="id" />
            
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" type="text" />

            <label for="cpf">CPF:</label>
            <input id="cpf" name="cpf" type="number" />

            <label for="data_nascimento">Data Nascimento:</label>
            <input id="data_nascimento" name="data_nascimento" type="date" />
            
            <button type="submit">Salvar</button>
        </form>
    </fieldset>
</body>
</html>